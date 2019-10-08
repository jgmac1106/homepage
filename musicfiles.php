<?php include 'head.php'; ?>
</head>
<?php include 'header.php'; ?>
    </header>
  <main class="longreads">   
  <article class="h-entry">
  <h1 class="p-name">Current Seeds</h1>
  <div class="pubinfo">
  <p>Published by <a class="p-author h-card" href="https://jgregorymcverry.com">J. Gregory McVerry</a>
     on <time class="dt-published" datetime="2019-10-06 06:41:00">10<sup>th</sup> October 2019</time></p>
    <p>
      Updated <time class="dt-updated" datetime="2019-10-06 06:41:00">10<sup>th</sup> October 2019</time></p>
   
  <span class="summary">
    <p class="p-summary">A collection of my music</p>
    </span>
 </div>
    <div class="copy">
  <div class="e-content">
    <?php
$dir    = 'https://jgregorymcverry.com/music';
$files1 = scandir($dir);

print_r($files1);
?>
  </div>
      </div>
</article>
    </main>
    <footer>
<?php include 'footer.php'; ?>

  </body>
 
</html>
