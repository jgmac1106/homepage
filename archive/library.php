<?php
// Archive entries are plain text metadata. Never include or execute imported content.
function archive_types() {
    return ['all'=>'All posts', 'articles'=>'Articles', 'notes'=>'Notes', 'replies'=>'Replies',
        'photos'=>'Photos', 'likes'=>'Likes', 'bookmarks'=>'Bookmarks', 'reposts'=>'Reposts',
        'checkins'=>'Check-ins', 'rsvps'=>'RSVPs', 'events'=>'Events', 'audio'=>'Audio',
        'videos'=>'Videos', 'listening'=>'Listening', 'reading'=>'Reading',
        'watching'=>'Watching', 'reviews'=>'Reviews', 'other'=>'Other posts'];
}
function esc($text) { return htmlspecialchars((string)$text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function archive_url($value) {
    if (!is_string($value)) return '';
    if (preg_match('~^/(?!/)[^\r\n]*$~', $value)) return $value;
    if (filter_var($value, FILTER_VALIDATE_URL) && in_array(strtolower(parse_url($value, PHP_URL_SCHEME)), ['http','https'], true)) return $value;
    return '';
}
function archive_entries() {
    $entries = []; $seen = []; $types = archive_types();
    // The Known import will be added explicitly here only after public-content review.
    foreach (['homepage.json'] as $file) {
        $raw = file_get_contents(__DIR__.'/data/'.$file);
        $rows = json_decode($raw, true);
        if (!is_array($rows)) throw new RuntimeException('Archive index is unavailable.');
        foreach ($rows as $row) {
            if (!is_array($row) || empty($row['id']) || isset($seen[$row['id']])) continue;
            if (isset($row['access']) && $row['access'] !== 'PUBLIC') continue;
            if (isset($row['publish_status']) && $row['publish_status'] !== 'published') continue;
            if (empty($row['type']) || $row['type']==='all' || !isset($types[$row['type']])) continue;
            $url = archive_url($row['url'] ?? '');
            if (!$url) continue;
            $row['url'] = $url;
            if (!empty($row['date']) && !archive_valid_date($row['date'])) $row['date'] = null;
            $seen[$row['id']] = true; $entries[] = $row;
        }
    }
    usort($entries, function($a, $b) {
        return strcmp($b['date'] ?? '', $a['date'] ?? '') ?: strcmp($a['url'], $b['url']);
    });
    return $entries;
}
function archive_valid_date($date) {
    if (!is_string($date) || !preg_match('/^(\d{4})-(\d{2})-(\d{2})$/D', $date, $m)) return false;
    return checkdate((int)$m[2], (int)$m[3], (int)$m[1]);
}
function archive_selection($query) {
    $result = ['type'=>'all','year'=>'','month'=>'','day'=>'','page'=>1];
    foreach ($result as $key=>$default) {
        if (!isset($query[$key]) || $query[$key]==='') continue;
        if (!is_string($query[$key])) throw new InvalidArgumentException('Invalid archive filter.');
        $value = $query[$key];
        if ($key==='type') {
            if (!isset(archive_types()[$value])) throw new InvalidArgumentException('Unknown post type.');
            $result[$key] = $value;
        } elseif ($key==='year') {
            if (!preg_match('/^[12][0-9]{3}$/D',$value)) throw new InvalidArgumentException('Invalid year.');
            $result[$key] = $value;
        } else {
            if (!ctype_digit($value) || strlen($value)>6 || (int)$value<1) throw new InvalidArgumentException('Invalid date or page.');
            $result[$key] = $key==='page' ? (int)$value : sprintf('%02d',(int)$value);
        }
    }
    if ($result['month'] && (!$result['year'] || (int)$result['month']>12)) throw new InvalidArgumentException('Choose a valid year and month.');
    if ($result['day'] && (!$result['month'] || !archive_valid_date($result['year'].'-'.$result['month'].'-'.$result['day']))) throw new InvalidArgumentException('Choose a valid day.');
    return $result;
}
function archive_filter($entries, $selection, $dates=true) {
    return array_values(array_filter($entries, function($entry) use ($selection,$dates) {
        if ($selection['type']!=='all' && $selection['type']!==$entry['type']) return false;
        if (!$dates) return true;
        $prefix = $selection['year'];
        if ($selection['month']) $prefix .= '-'.$selection['month'];
        if ($selection['day']) $prefix .= '-'.$selection['day'];
        return !$prefix || substr($entry['date'] ?? '',0,strlen($prefix))===$prefix;
    }));
}
function archive_link($selection, $changes=[], $endpoint='/archive/') {
    $params = array_merge($selection,$changes);
    foreach ($params as $key=>$value) if ($value==='' || ($key==='type' && $value==='all') || ($key==='page' && $value===1)) unset($params[$key]);
    return $endpoint.($params ? '?'.http_build_query($params,'','&',PHP_QUERY_RFC3986) : '');
}
function archive_date_label($date) {
    return $date ? date('F j, Y', strtotime($date.' 12:00:00 UTC')) : 'Date not recorded';
}
