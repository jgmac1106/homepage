<?php
require __DIR__.'/library.php';
try { $selection=archive_selection($_GET); $selection['page']=1; $entries=archive_filter(archive_entries(),$selection); }
catch (InvalidArgumentException $e) { http_response_code(400); exit('Invalid feed filter.'); }
catch (RuntimeException $e) { http_response_code(503); exit('Feed temporarily unavailable.'); }
header('Content-Type: application/rss+xml; charset=utf-8');
function xml_text($value) { return htmlspecialchars(preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F]/u','',(string)$value),ENT_XML1 | ENT_QUOTES,'UTF-8'); }
$title=archive_types()[$selection['type']].' · Greg McVerry';
$base='https://jgregorymcverry.com';
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom"><channel>
<title><?=xml_text($title)?></title><link><?=xml_text($base.archive_link($selection))?></link>
<description>Writing and conversations from Greg McVerry.</description><language>en</language>
<atom:link href="<?=xml_text($base.archive_link($selection,[], '/archive/feed.php'))?>" rel="self" type="application/rss+xml" />
<?php foreach (array_slice($entries,0,50) as $entry): $url=$entry['url'][0]==='/'?$base.$entry['url']:$entry['url']; ?>
<item><title><?=xml_text($entry['title'])?></title><link><?=xml_text($url)?></link><guid isPermaLink="true"><?=xml_text($url)?></guid>
<description><?=xml_text($entry['summary']??'')?></description><category><?=xml_text($entry['type'])?></category>
<?php // Only emit a timestamp when the source supplies its timezone; never invent one.
if (!empty($entry['published']) && preg_match('/(?:Z|[+-]\d{2}:?\d{2})$/D',$entry['published'])):
    try { $published=new DateTimeImmutable($entry['published']); echo '<pubDate>'.xml_text($published->format(DATE_RSS)).'</pubDate>'; } catch (Exception $e) {} endif; ?>
</item><?php endforeach; ?></channel></rss>
