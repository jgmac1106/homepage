<?php
require __DIR__.'/library.php';
try { $selection=archive_selection($_GET); $entries=archive_entries(); }
catch (InvalidArgumentException $e) { http_response_code(400); echo '<h1>Invalid archive filter</h1><p><a href="/archive/">Browse all posts</a></p>'; exit; }
catch (RuntimeException $e) { http_response_code(503); echo '<h1>The archive is temporarily unavailable</h1>'; exit; }
$types=archive_types(); $matching=archive_filter($entries,$selection); $typed=archive_filter($entries,$selection,false);
$counts=array_fill_keys(array_keys($types),0); $counts['all']=count($entries);
foreach ($entries as $entry) $counts[$entry['type']]++;
$months=[]; $days=[]; $undated=0;
foreach ($typed as $entry) { if (empty($entry['date'])) { $undated++; continue; } $key=substr($entry['date'],0,7); $months[$key]=($months[$key]??0)+1; $days[$entry['date']]=($days[$entry['date']]??0)+1; }
krsort($months); $years=[]; foreach ($months as $month=>$count) $years[substr($month,0,4)]=($years[substr($month,0,4)]??0)+$count;
$total=count($matching); $pages=max(1,(int)ceil($total/20));
if ($selection['page']>$pages) { http_response_code(404); echo '<h1>Page not found</h1><p><a href="'.esc(archive_link($selection,['page'=>1])).'">Return to this feed</a></p>'; exit; }
$visible=array_slice($matching,($selection['page']-1)*20,20);
$title=$selection['type']==='all'?'Post archive':$types[$selection['type']];
$period=$selection['year'];
if ($selection['month']) $period=date('F Y',strtotime($selection['year'].'-'.$selection['month'].'-01'));
if ($selection['day']) $period=archive_date_label($selection['year'].'-'.$selection['month'].'-'.$selection['day']);
$feed=archive_link($selection,['page'=>1],'/archive/feed.php');
?><!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?=esc($title.($period?' · '.$period:'').' · Greg McVerry')?></title>
<meta name="description" content="Browse Greg McVerry’s articles, notes, replies and other posts by type and date.">
<link rel="canonical" href="<?=esc('https://jgregorymcverry.com'.archive_link($selection))?>">
<link rel="stylesheet" href="/archive/archive.css">
<link rel="alternate" type="application/rss+xml" title="<?=esc($title)?>" href="<?=esc($feed)?>">
</head><body class="archive-page"><a class="skip-link" href="#archive-content">Skip to posts</a>
<?php include dirname(__DIR__).'/header.php'; ?></header>
<main id="archive-content" class="archive-shell">
<div class="archive-heading"><div><p class="eyebrow">Greg McVerry / Writing &amp; conversations</p><h1><?=esc($title)?></h1><p class="intro"><?= $selection['type']==='articles'?'Longer writing, essays and reflections.':'Browse the things I’ve written, shared and replied to.' ?></p></div><a class="rss-link" href="<?=esc($feed)?>">Subscribe via RSS ↗</a></div>
<div class="archive-layout"><aside class="archive-sidebar"><nav aria-label="Post types"><h2>Post types</h2><ul class="type-list">
<?php foreach ($types as $key=>$label): ?><li><a href="<?=esc(archive_link($selection,['type'=>$key,'page'=>1]))?>" <?=$selection['type']===$key?'aria-current="page"':''?>><span><?=esc($label)?></span><span class="count"><?=$counts[$key]?></span></a></li><?php endforeach; ?>
</ul></nav></aside><div class="archive-main">
<section class="date-browser" aria-labelledby="date-heading"><div class="section-top"><h2 id="date-heading">Browse by date</h2><a href="<?=esc(archive_link($selection,['year'=>'','month'=>'','day'=>'','page'=>1]))?>">All dates</a></div>
<nav aria-label="Years" class="date-links"><?php foreach ($years as $year=>$count): ?><a href="<?=esc(archive_link($selection,['year'=>(string)$year,'month'=>'','day'=>'','page'=>1]))?>" <?=$selection['year']===(string)$year?'aria-current="date"':''?>><?=esc($year)?> <span><?=$count?></span></a><?php endforeach; ?></nav>
<?php if (!$months): ?><p class="muted">No dated posts in this feed yet.</p><?php endif; ?>
<?php if ($selection['year']): ?><nav aria-label="Months in <?=esc($selection['year'])?>" class="month-grid"><?php for ($m=1;$m<=12;$m++): $mk=$selection['year'].'-'.sprintf('%02d',$m); $count=$months[$mk]??0; ?><div><?php if ($count): ?><a href="<?=esc(archive_link($selection,['month'=>sprintf('%02d',$m),'day'=>'','page'=>1]))?>" <?=$selection['month']===sprintf('%02d',$m)?'aria-current="date"':''?>><?=date('M',strtotime($mk.'-01'))?> <span><?=$count?></span></a><?php else: ?><span class="inactive"><?=date('M',strtotime($mk.'-01'))?> <span>0</span></span><?php endif; ?></div><?php endfor; ?></nav><?php endif; ?>
<?php if ($selection['month']): $base=$selection['year'].'-'.$selection['month']; $stamp=strtotime($base.'-01'); $offset=(int)date('N',$stamp)-1; $length=(int)date('t',$stamp); ?>
<table class="calendar"><caption><?=esc(date('F Y',$stamp))?></caption><thead><tr><?php foreach (['Mon','Tue','Wed','Thu','Fri','Sat','Sun'] as $label): ?><th scope="col"><?=$label?></th><?php endforeach; ?></tr></thead><tbody>
<?php for ($cell=0;$cell<(int)ceil(($offset+$length)/7)*7;$cell++): if ($cell%7===0) echo '<tr>'; $d=$cell-$offset+1; ?><td><?php if ($d>0 && $d<=$length): $day=sprintf('%02d',$d); $count=$days[$base.'-'.$day]??0; if ($count): ?><a href="<?=esc(archive_link($selection,['day'=>$day,'page'=>1]))?>" aria-label="<?=esc(archive_date_label($base.'-'.$day).', '.$count.' posts')?>" <?=$selection['day']===$day?'aria-current="date"':''?>><span><?=$d?></span><small><?=$count?></small></a><?php else: ?><span class="inactive"><?=$d?></span><?php endif; endif; ?></td><?php if ($cell%7===6) echo '</tr>'; endfor; ?></tbody></table><?php endif; ?>
<?php if ($undated): ?><p class="muted"><?=$undated?> posts have no recorded date and appear under “All dates.”</p><?php endif; ?>
</section>
<section class="h-feed" aria-labelledby="feed-heading"><div class="section-top feed-top"><h2 id="feed-heading" class="p-name"><?=esc($period?:'All dates')?></h2><p class="result-count"><?=$total?> <?=$total===1?'post':'posts'?></p></div>
<a class="p-author h-card sr-only" href="https://jgregorymcverry.com">Greg McVerry</a>
<?php if (!$visible): ?><div class="empty-state"><h3>No posts here yet</h3><p><?=count($typed)?'There are no posts for this date. Choose another month or browse all dates.':'This feed will fill as posts are added to the archive.'?></p><a href="<?=esc(archive_link($selection,['year'=>'','month'=>'','day'=>'','page'=>1,'type'=>count($typed)?$selection['type']:'all']))?>">Browse <?=count($typed)?'all dates':'all posts'?> →</a></div><?php endif; ?>
<?php foreach ($visible as $entry): ?><article class="archive-entry h-entry"><div class="entry-meta"><span class="post-type"><?=esc($types[$entry['type']])?></span><?php if (!empty($entry['date'])): ?><time class="dt-published" datetime="<?=esc($entry['date'])?>"><?=esc(archive_date_label($entry['date']))?></time><?php else: ?><span>Date not recorded</span><?php endif; ?></div>
<h3 class="p-name"><a class="u-url" href="<?=esc($entry['url'])?>"><?=esc($entry['title'])?></a></h3>
<?php if (!empty($entry['reply_to']) && archive_url($entry['reply_to'])): ?><p class="reply-context">In reply to <a class="u-in-reply-to" href="<?=esc(archive_url($entry['reply_to']))?>"><?=esc(parse_url($entry['reply_to'],PHP_URL_HOST) ?: 'the original post')?> ↗</a></p><?php endif; ?>
<?php if (!empty($entry['summary'])): ?><p class="p-summary"><?=esc($entry['summary'])?></p><?php endif; ?>
<a class="p-author h-card sr-only" href="https://jgregorymcverry.com"><?=esc($entry['author']??'Greg McVerry')?></a>
</article><?php endforeach; ?>
<?php if ($pages>1): ?><nav class="pagination" aria-label="Feed pages"><?php if ($selection['page']>1): ?><a rel="prev" href="<?=esc(archive_link($selection,['page'=>$selection['page']-1]))?>">← Newer</a><?php else: ?><span></span><?php endif; ?><span>Page <?=$selection['page']?> of <?=$pages?></span><?php if ($selection['page']<$pages): ?><a rel="next" href="<?=esc(archive_link($selection,['page'=>$selection['page']+1]))?>">Older →</a><?php else: ?><span></span><?php endif; ?></nav><?php endif; ?>
</section></div></div></main><footer class="archive-footer"><a href="/">Greg McVerry</a><span>Make. Hack. Play. Learn.</span><a href="/archive/">Browse the archive</a></footer></body></html>
