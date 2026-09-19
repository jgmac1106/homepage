<!-- publishing:managed -->
<?php include __DIR__.'/../head.php'; ?>
</head>
<?php include __DIR__.'/../header.php'; ?>
</header>
<main class="longreads">
<div class="notewrapper">
<div class="note h-entry">
<a class="u-author" href="/"></a>
<time class="dt-published" datetime="2026-09-19">2026-09-19</time>
<div class="p-name e-content">
<!-- publishing:body --><div style="white-space:pre-wrap">Summer Wikipedia editing report.

## September

* GRU Unit 54777
* International Club of National Unity
* 164th Radio Technical Brigade

## August

* Alexander Bortnikov
* 44th Mechanized Brigade
* 318th Psychological Operations Company
* 7th Psychological Operations Group
* Printer
* 13th Main Directorate of Military Counterintelligence
* Security Services of Ukraine
* Regional Directorate of the Territorial Defense Forces &quot;East&quot; 
* Ukrainian Ground Forces

## July

* 426th Unmanned Systems Regiment (Ukraine)
* 10th Mobile Border Detachment
* Biden-Ukraine Conspiracy Theory
* Kraken
* Kraken in Popular Culture
* 34th Marine Brigade
* 10th Special Purpose Detachment (Ukraine) 
* Mykhailo Bilinskyi 

</div><!-- /publishing:body -->
</div>

<a class="u-url" href="https://jgregorymcverry.com/notes/2026-09-19-1" rel="canonical"><strong>My Notes</strong></a>
<nav aria-label="Note navigation">
<?php
$noteFiles = glob(__DIR__ . '/*.php');
$noteFiles = array_values(array_filter($noteFiles, function ($file) {
    return preg_match('/^\d{4}-\d{2}-\d{2}-\d+\.php$/', basename($file));
}));
usort($noteFiles, function ($a, $b) { return strnatcmp(basename($a), basename($b)); });
$notePosition = array_search(__FILE__, $noteFiles, true);
if ($notePosition !== false) {
    foreach ([-1 => ['prev', 'Previous Note'], 1 => ['next', 'Next Note']] as $offset => $label) {
        if (isset($noteFiles[$notePosition + $offset])) {
            $noteUrl = 'https://jgregorymcverry.com/notes/' . basename($noteFiles[$notePosition + $offset], '.php');
            echo '<a href="' . htmlspecialchars($noteUrl, ENT_QUOTES) . '" rel="' . $label[0] . '">' . $label[1] . '</a> ';
        }
    }
}
?>
</nav>
</div>
</div>
<div id="webmentions"></div>
</main>
<footer>
<?php include __DIR__.'/../footer.php'; ?>
</body>
</html>
