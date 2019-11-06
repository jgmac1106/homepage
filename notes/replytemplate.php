<?php include '../head.php'; ?>
</head>
 <?php include '../header.php'; ?>
</header>  
  <main class="longreads"> 
    <div class="notewrapper">
  	<div class="note h-entry" id="note2">
      <a class="u-author" href="/"></a>

        
  
      
        <time class="dt-published" datetime="<?php echo date("Y/m/d")?>"><?php echo date("Y/m/d")?></time>
       <p>In reply to <a class="u-in-reply-to" href="https://dailyconnector.com/2018/10/10/testing-out-indieweb-with-poetry">poetry</a> by <a class="h-card p-name" href="https://dogratx.edublogs.com">@dogtrax</a></p>
      

<p>This didn't syndicate because of incorrect metadata. Most of the IndieWeb tools rely on a type of extra data called microformats. If you did this same poem on your write.as blog it would have worked (I think).</p>

<p>If you want to learn more about microformats check out the  <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/microformats">Mozilla docs:</a></p>

<p>For WordPress users this means having to choose between a few (but awesome) compatible themes.</p>

<p>People have tried to make plugins that will work for any theme but it just hasn't been tenable. Too many theme conflicts, plugin problems, and legacy metadata break all the microformats.</p>

<p>You can try this  <a href="https://wordpress.org/plugins/wp-uf2/"> plugin:</a>and I will test it on your theme to see it works. It really is a case by case basis. </p>
     
 
<a class="u-url url" href="https://jgregorymcverry.com<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "utf-8"); ?> "rel="canonical"><strong>My Notes</strong></a>
  <a class="u-syndication" href="https://brid.gy/about#twitter">Published with Bridgy</a>
</div>
</div>
  	</main>
  		<footer>
     <?php include '../footer.php'; ?>

  </body>
 
</html>