<?php include 'head.php'; ?>
</head>
<?php include 'header.php'; ?>
    </header>
  <main class="longreads">   
  <article class="h-entry">
  <h1 class="p-name">How to Install Known on Reclaim Hosting</h1>
  <div class="pubinfo">
  <p>Published by <a class="p-author h-card" href="https://jgregorymcverry.com">J. Gregroy McVerry</a> 
     on <time class="dt-published" datetime="2020-02-07T15:14:20">7<sup>th</sup> February 2020</time></p>
    

    
    <span class="summary">
    <p class="p-summary">Step By Step Guide to Installing Known</p>
    </span>
 </div>
   <video class="featured u-video" controls  src="https://jgregorymcverry.com/videos/InstallingKnownOnReclaimHosting.mp4">
   </video>
    <div class="copy">

  <div class="e-content">
     <ul>
      <li>Make a domain or subdomain in CPanel</li>
      <li>Issue a Let's Encrypt Certifcate</li>
      <li>Go back to CPanel and click on All Applications</li>
      <li>Choose Known and then select your new domain or subdomain. make sure to install in https</li>
      <li>After installation go back to CPanel and chose Terminal</li>
      <li>Change directories direectories to your new domain or subdomain by typing: cd directoryname</li>
      <li>Copy this line into Terminal. It updates to the latest version: git clone <pre>https://github.com/idno/known.git</pre></li>
      <li>Go to <a href="https://getcomposer.org/download/"> Get Composer</a></li>
      <li>Copy the code at the top and paste it into Terminal. I can not add the download code here as it changes with new versions of Composer</li>
      <li>Then paste this line into Terminal: <pre>cd known; composer install</pre></li>
      <li>When that is done paste the following line into Terminal to remove a file permissions error: <pre>find . -type f | xargs -i{} chmod 644 {}</pre></li>
      <li>You are done and your Known site is now up to date</li>

     </ul> 
  </div>
      </div>
</article>
    </main>
    <footer>
<?php include 'footer.php'; ?>

  </body>
 
</html>
