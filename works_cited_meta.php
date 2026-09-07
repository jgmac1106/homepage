<?php
// works_cited_meta.php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['error' => 'POST required']);
  exit;
}

$raw = file_get_contents('php://input');
$payload = json_decode($raw, true);
$urls = $payload['urls'] ?? [];

if (!is_array($urls) || count($urls) === 0) {
  http_response_code(400);
  echo json_encode(['error' => 'Missing urls[]']);
  exit;
}

$cacheDir = __DIR__ . '/../cache/works_cited_meta';
@mkdir($cacheDir, 0775, true);

// ---- helpers ----
function strip_tracking_params($url) {
  $parts = parse_url($url);
  if (!$parts || empty($parts['scheme']) || empty($parts['host'])) return $url;

  $query = [];
  if (!empty($parts['query'])) parse_str($parts['query'], $query);

  $tracking = [
    'utm_source','utm_medium','utm_campaign','utm_term','utm_content',
    'fbclid','gclid','mc_cid','mc_eid'
  ];
  foreach ($query as $k => $v) {
    if (in_array(strtolower($k), $tracking, true)) unset($query[$k]);
  }

  $rebuilt = $parts['scheme'].'://'.$parts['host']
    .(!empty($parts['port']) ? ':'.$parts['port'] : '')
    .($parts['path'] ?? '');

  if ($query) $rebuilt .= '?'.http_build_query($query);
  if (!empty($parts['fragment'])) $rebuilt .= '#'.$parts['fragment'];

  return $rebuilt;
}

function fetch_html($url) {
  $ch = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_MAXREDIRS => 5,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_CONNECTTIMEOUT => 6,
    CURLOPT_USERAGENT => 'Mozilla/5.0 (WorksCitedBot/1.0)',
    CURLOPT_HTTPHEADER => ['Accept: text/html,application/xhtml+xml'],
  ]);
  $html = curl_exec($ch);
  $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);
  if ($html === false || $code >= 400) return null;
  return $html;
}

function parse_meta_and_jsonld($html) {
  libxml_use_internal_errors(true);
  $dom = new DOMDocument();
  $dom->loadHTML($html);
  $xp = new DOMXPath($dom);

  $meta = [];

  // Capture <title> as a last-resort fallback
  $titleNodes = $xp->query('//title');
  if ($titleNodes && $titleNodes->length > 0) {
    $t = trim($titleNodes->item(0)->textContent);
    if ($t) $meta['__title_tag'] = $t;
  }

  // Collect <meta> tags. Preserve duplicates as arrays (e.g., citation_author).
  foreach ($xp->query('//meta[@property or @name]') as $m) {
    $k = $m->getAttribute('property') ?: $m->getAttribute('name');
    $v = $m->getAttribute('content');
    if (!$k || !$v) continue;

    $k = strtolower(trim($k));
    $v = trim($v);

    if (isset($meta[$k])) {
      if (is_array($meta[$k])) $meta[$k][] = $v;
      else $meta[$k] = [$meta[$k], $v];
    } else {
      $meta[$k] = $v;
    }
  }

  $jsonld = [];
  foreach ($xp->query('//script[@type="application/ld+json"]') as $s) {
    $txt = trim($s->textContent);
    if (!$txt) continue;
    $data = json_decode($txt, true);
    if (json_last_error() === JSON_ERROR_NONE) $jsonld[] = $data;
  }

  return [$meta, $jsonld];
}

function meta_first($meta, $key) {
  $k = strtolower(trim($key));
  if (!isset($meta[$k])) return null;
  $v = $meta[$k];
  if (is_array($v)) {
    foreach ($v as $x) {
      if (is_string($x) && trim($x) !== '') return trim($x);
    }
    return null;
  }
  return is_string($v) ? trim($v) : null;
}

function meta_all($meta, $key) {
  $k = strtolower(trim($key));
  if (!isset($meta[$k])) return [];
  $v = $meta[$k];
  if (is_array($v)) {
    return array_values(array_filter(array_map('trim', array_filter($v, 'is_string')), fn($s) => $s !== ''));
  }
  return is_string($v) && trim($v) !== '' ? [trim($v)] : [];
}

function clean_author_string($s) {
  if (!is_string($s)) return $s;
  $s = trim($s);
  // Strip common newsroom prefixes
  $s = preg_replace('/^\s*by\s+/i', '', $s);
  return trim($s);
}

function find_in_jsonld($jsonld, $key) {
  $stack = $jsonld;
  while ($stack) {
    $node = array_pop($stack);
    if (is_array($node)) {
      foreach ($node as $k => $v) {
        if ($k === $key) return $v;
        $stack[] = $v;
      }
    }
  }
  return null;
}

function normalize_author($authorVal) {
  if (is_string($authorVal)) return trim($authorVal);

  // author: { name: "..." } or [{name:"..."}]
  if (is_array($authorVal)) {
    if (isset($authorVal['name']) && is_string($authorVal['name'])) return trim($authorVal['name']);
    if (isset($authorVal[0]['name']) && is_string($authorVal[0]['name'])) return trim($authorVal[0]['name']);
  }
  return null;
}

function pick_best_author($meta, $jsonld) {
  // 1) Google Scholar-style meta tags (often present on journalism + academic pages)
  $citationAuthors = meta_all($meta, 'citation_author');
  if ($citationAuthors && count($citationAuthors) > 0) {
    $clean = array_map('clean_author_string', $citationAuthors);
    $clean = array_values(array_filter($clean, fn($x) => is_string($x) && trim($x) !== ''));
    if (count($clean) > 0) return implode(', ', $clean);
  }

  $a =
    meta_first($meta, 'author')
    ?? meta_first($meta, 'article:author')
    ?? meta_first($meta, 'parsely-author')
    ?? meta_first($meta, 'sailthru.author')
    ?? meta_first($meta, 'twitter:creator')
    ?? meta_first($meta, 'dc.creator')
    ?? meta_first($meta, 'dcterms.creator')
    ?? meta_first($meta, 'byl') // NYT often uses "By ..."
    ?? null;

  if ($a && is_string($a)) return clean_author_string($a);

  // 2) JSON-LD (schema.org)
  $ldAuthor = find_in_jsonld($jsonld, 'author');
  $norm = normalize_author($ldAuthor);
  if ($norm) return clean_author_string($norm);

  // 3) JSON-LD sometimes uses 'creator'
  $ldCreator = find_in_jsonld($jsonld, 'creator');
  $norm2 = normalize_author($ldCreator);
  if ($norm2) return clean_author_string($norm2);

  return null;
}

function pick_best_date($meta, $jsonld) {
  $d =
    meta_first($meta, 'article:published_time')
    ?? meta_first($meta, 'og:published_time')
    ?? meta_first($meta, 'article:modified_time')
    ?? meta_first($meta, 'og:updated_time')
    ?? meta_first($meta, 'citation_publication_date')
    ?? meta_first($meta, 'citation_date')
    ?? meta_first($meta, 'citation_online_date')
    ?? meta_first($meta, 'dc.date')
    ?? meta_first($meta, 'dc.date.issued')
    ?? meta_first($meta, 'dcterms.issued')
    ?? meta_first($meta, 'pubdate')
    ?? meta_first($meta, 'date')
    ?? meta_first($meta, 'parsely-pub-date')
    ?? meta_first($meta, 'sailthru.date')
    ?? null;

  if ($d && is_string($d)) return trim($d);

  $ld = find_in_jsonld($jsonld, 'datePublished');
  if ($ld && is_string($ld)) return trim($ld);

  $ld2 = find_in_jsonld($jsonld, 'dateModified');
  if ($ld2 && is_string($ld2)) return trim($ld2);

  return null;
}

function pick_best_title($meta, $jsonld) {
  $t =
    meta_first($meta, 'og:title')
    ?? meta_first($meta, 'twitter:title')
    ?? meta_first($meta, 'citation_title')
    ?? meta_first($meta, 'dc.title')
    ?? meta_first($meta, 'dcterms.title')
    ?? meta_first($meta, '__title_tag')
    ?? null;

  if ($t && is_string($t)) return trim($t);

  $ld = find_in_jsonld($jsonld, 'headline');
  if ($ld && is_string($ld)) return trim($ld);

  // Sometimes JSON-LD uses 'name'
  $ld2 = find_in_jsonld($jsonld, 'name');
  if ($ld2 && is_string($ld2)) return trim($ld2);

  return null;
}

function pick_best_site($meta, $url) {
  $site = $meta['og:site_name'] ?? null;
  if ($site && is_string($site)) return trim($site);

  $host = parse_url($url, PHP_URL_HOST) ?: '';
  return preg_replace('/^www\./i', '', $host);
}

// ---- main ----
$out = [];

foreach ($urls as $u) {
  if (!is_string($u)) continue;
  $u = trim($u);
  if (!$u) continue;
  if (!filter_var($u, FILTER_VALIDATE_URL)) continue;

  $u = strip_tracking_params($u);
  $cacheKey = sha1($u);
  $cacheFile = $cacheDir . "/$cacheKey.json";

  // cache TTL: 30 days
  if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < (30 * 24 * 3600)) {
    $cached = json_decode(file_get_contents($cacheFile), true);
    if (is_array($cached)) { $out[$u] = $cached; continue; }
  }

  $html = fetch_html($u);
  if (!$html) {
    $out[$u] = ['url'=>$u, 'title'=>null, 'author'=>null, 'date'=>null, 'site'=>pick_best_site([], $u)];
    continue;
  }

  [$meta, $jsonld] = parse_meta_and_jsonld($html);

  $item = [
    'url'    => $u,
    'title'  => pick_best_title($meta, $jsonld),
    'author' => pick_best_author($meta, $jsonld),
    'date'   => pick_best_date($meta, $jsonld),
    'site'   => pick_best_site($meta, $u),
  ];

  file_put_contents($cacheFile, json_encode($item, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
  $out[$u] = $item;
}

echo json_encode(['items' => $out], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);