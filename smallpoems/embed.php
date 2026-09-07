<?php
require __DIR__.'/library.php';
try { $posts=array_slice(smallpoems_entries(),0,12); }
catch (RuntimeException $e) { $posts=[]; }
header('Content-Type: text/html; charset=utf-8');
?><!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Small Poems feed</title><base target="_top">
<link rel="alternate" type="application/rss+xml" href="/smallpoems/feed.php" title="Small Poems">
<style>body{margin:0;padding:1rem;color:#202827;background:#fff;font:1rem/1.6 system-ui,sans-serif}a{color:#24675c;text-underline-offset:.2em}nav{display:flex;gap:1rem;flex-wrap:wrap;border-bottom:2px solid #24675c;padding-bottom:.8rem}article{padding:1rem 0;border-bottom:1px solid #d6e2df;overflow-wrap:anywhere}h2{font-size:1.05rem;line-height:1.4;margin:.4rem 0}p{margin:.5rem 0}time{color:#596461;font-size:.85rem}a:focus-visible{outline:3px solid #9b3247;outline-offset:3px}</style></head><body>
<nav aria-label="Small Poems"><a href="/smallpoems/">Browse all Small Poems</a><a href="/smallpoems/feed.php">Subscribe via RSS</a></nav>
<main class="h-feed"><span class="p-name" hidden>Small Poems</span>
<?php foreach($posts as $post): ?><article class="h-entry">
<?php if (!empty($post['date'])): ?><time class="dt-published" datetime="<?=esc($post['date'])?>"><?=esc(archive_date_label($post['date']))?></time><?php endif; ?>
<h2 class="p-name"><a class="u-url" href="<?=esc($post['url'])?>"><?=esc($post['title'])?></a></h2>
<?php if (!empty($post['summary'])): ?><p class="p-summary"><?=esc($post['summary'])?></p><?php endif; ?>
</article><?php endforeach; ?>
<?php if (!$posts): ?><p><a href="/smallpoems/">Open the Small Poems collection.</a></p><?php endif; ?>
</main></body></html>
