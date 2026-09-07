<?php
require dirname(__DIR__).'/archive/library.php';
function smallpoems_entries() {
    $rows=json_decode(file_get_contents(__DIR__.'/data.json'),true);
    if (!is_array($rows)) throw new RuntimeException('Collection unavailable.');
    $seen=[];$entries=[];
    foreach($rows as $row) {
        if (isset($row['access']) && $row['access']!=='PUBLIC') continue;
        if (isset($row['publish_status']) && $row['publish_status']!=='published') continue;
        if (empty($row['id']) || isset($seen[$row['id']]) || !archive_url($row['url']??'')) continue;
        $seen[$row['id']]=true;$entries[]=$row;
    }
    return $entries;
}
function smallpoems_link($selection,$changes=[],$endpoint='/smallpoems/') {
    return archive_link($selection,$changes,$endpoint);
}
