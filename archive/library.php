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
    // Both indexes contain reviewed public post metadata.
    foreach (['homepage.json', 'known.json'] as $file) {
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

// Fixed-width catalog indexes keep memory bounded as the archive grows.
function archive_catalog_root() { return __DIR__.'/data/catalog'; }
function archive_new_entries() {
    $path=__DIR__.'/data/new-posts.json'; if (!is_file($path)) return [];
    $rows=json_decode(file_get_contents($path),true); if (!is_array($rows)) throw new RuntimeException('New post index is unavailable.');
    $out=[]; foreach ($rows as $row) {
        if (!is_array($row) || empty($row['id']) || ($row['access']??'PUBLIC')!=='PUBLIC' || ($row['publish_status']??'published')!=='published') continue;
        if (!isset(archive_types()[$row['type']??''])) continue; $row['url']=archive_url($row['url']??''); if ($row['url']) $out[]=$row;
    }
    usort($out,function($a,$b){return strcmp($b['date']??'',$a['date']??'') ?: strcmp($a['url'],$b['url']);}); return $out;
}
function archive_catalog_stats() {
    static $stats=null;
    if ($stats===null) {
        $stats=json_decode(file_get_contents(archive_catalog_root().'/stats.json'),true);
        if (!is_array($stats)) throw new RuntimeException('Archive catalog unavailable.');
    }
    return $stats;
}
function archive_catalog_index($selection) {
    $period=$selection['year'];
    if ($selection['month']) $period.='-'.$selection['month'];
    if ($selection['day']) $period.='-'.$selection['day'];
    return archive_catalog_root().'/indexes/'.$selection['type'].'/'.($period ?: 'all').'.idx';
}
function archive_catalog_record($ref) {
    if (!is_array($ref) || count($ref)!==2 || !is_numeric($ref[0]) || !is_numeric($ref[1]) || $ref[0]<0 || $ref[1]<1 || $ref[1]>16777216) throw new RuntimeException('Invalid catalog record.');
    $file=fopen(archive_catalog_root().'/records.jsonl','rb');
    if (!$file || fseek($file,(int)$ref[0])!==0) throw new RuntimeException('Archive content unavailable.');
    $raw=''; $remaining=(int)$ref[1];
    while ($remaining>0 && !feof($file)) { $part=fread($file,$remaining); if ($part===false || $part==='') break; $raw.=$part; $remaining-=strlen($part); }
    fclose($file);
    $record=json_decode($raw,true);
    if ($remaining!==0 || !is_array($record)) throw new RuntimeException('Archive content unavailable.');
    return $record;
}
function archive_historical_slice($selection,$limit,$offset) {
    $path=archive_catalog_index($selection); if (!is_file($path)) return [];
    $file=fopen($path,'rb'); if (!$file || fseek($file,$offset*21)!==0) throw new RuntimeException('Archive index unavailable.');
    $rows=[];
    for ($i=0;$i<$limit;$i++) {
        $line=fread($file,21); if ($line==='') break;
        if (!preg_match('/^[0-9]{20}\\n$/D',$line)) throw new RuntimeException('Archive index damaged.');
        $rows[]=archive_catalog_record([(int)substr($line,0,12),(int)substr($line,12,8)]);
    }
    fclose($file); return $rows;
}
function archive_catalog_slice($selection,$limit,$offset) {
    // Merge the small overlay with the sorted historical stream; never load the catalog.
    $new=archive_filter(archive_new_entries(),$selection);
    if (!$new) return archive_historical_slice($selection,$limit,$offset);
    $path=archive_catalog_index($selection); $file=is_file($path)?fopen($path,'rb'):false;
    $next=function() use ($file) {
        if (!$file) return null;
        $line=fread($file,21); if ($line==='') return null;
        if (!preg_match('/^[0-9]{20}\\n$/D',$line)) throw new RuntimeException('Archive index damaged.');
        return archive_catalog_record([(int)substr($line,0,12),(int)substr($line,12,8)]);
    };
    $old=$next(); $i=0; $position=0; $entries=[];
    while (count($entries)<$limit && ($old!==null || $i<count($new))) {
        $fresh=$new[$i]??null;
        $before=$fresh!==null && ($old===null || strcmp($fresh['date']??'',$old['date']??'')>0 || (($fresh['date']??'')===($old['date']??'') && strcmp($fresh['url'],$old['url'])<=0));
        if ($before) { $row=$fresh; $i++; } else { $row=$old; $old=$next(); }
        if ($position++ >= $offset) $entries[]=$row;
    }
    if ($file) fclose($file); return $entries;
}
function archive_catalog_view($selection) {
    $stats=archive_catalog_stats(); $path=archive_catalog_index($selection);
    $size=is_file($path)?filesize($path):0;
    if ($size%21!==0) throw new RuntimeException('Archive index damaged.');
    $new=archive_new_entries(); $matching=array_values(array_filter($new,function($row) use ($selection) {
        if ($selection['type']!=='all' && $selection['type']!==$row['type']) return false;
        $prefix=$selection['year']; if ($selection['month']) $prefix.='-'.$selection['month']; if ($selection['day']) $prefix.='-'.$selection['day'];
        return !$prefix || substr($row['date']??'',0,strlen($prefix))===$prefix;
    }));
    $total=(int)($size/21)+count($matching);$pages=max(1,(int)ceil($total/20));
    $counts=array_fill_keys(array_keys(archive_types()),0);
    foreach($stats['counts'] as $key=>$count) $counts[$key]=$count;
    foreach($new as $row) { $counts[$row['type']]++; $counts['all']++; }
    $typed=$stats['types'][$selection['type']] ?? [];
    $months=$typed['months'] ?? []; $days=$typed['days'] ?? []; $years=$typed['years'] ?? [];
    foreach(archive_filter($new,$selection,false) as $row) if (!empty($row['date'])) { $mk=substr($row['date'],0,7); $months[$mk]=($months[$mk]??0)+1; $days[$row['date']]=($days[$row['date']]??0)+1; $years[substr($mk,0,4)]=($years[substr($mk,0,4)]??0)+1; }
    krsort($months);krsort($years);
    return ['types'=>archive_types(),'counts'=>$counts,'months'=>$months,'days'=>$days,'years'=>$years,'undated'=>($counts[$selection['type']]-array_sum($days)),'total'=>$total,'pages'=>$pages,'visible'=>archive_catalog_slice($selection,20,($selection['page']-1)*20)];
}
function archive_tweet_record($id) {
    if (!is_string($id) || !preg_match('/^[0-9]{1,25}$/D',$id)) return null;
    $bucket=str_pad(substr($id,-3),3,'0',STR_PAD_LEFT);
    $file=archive_catalog_root().'/tweets/'.$bucket[0].'/'.$bucket.'.json';
    if (!is_file($file)) return null;
    $refs=json_decode(file_get_contents($file),true);
    if (!isset($refs[$id])) return null;
    $r=archive_catalog_record($refs[$id]);
    return ($r['id']??'')==='twitter:'.$id && ($r['access']??'')==='PUBLIC' && ($r['publish_status']??'')==='published' ? $r : null;
}
function archive_tweet_reply_url($id,$fallback) {
    if (!$id) return $fallback;
    if (archive_tweet_record($id)) return '/archive/twitter/?id='.$id;
    $map=json_decode(file_get_contents(archive_catalog_root().'/known-tweet-links.json'),true);
    return $map[$id] ?? $fallback;
}
