<?php include 'head.php'; ?>
</head>
<?php include 'header.php'; ?>
</header>
  
  <main class="longreads">   
  <article class="h-entry">
  <h1 class="p-name">Building a Podcast Feed</h1>
  <div class="pubinfo">
  <p>Published by <a class="u-author h-card" href="https://jgregorymcverry.com">J. Gregroy McVerry</a>
    <a class="u-url" href="/aboutme.html">About Author</a>
     on <time class="dt-published" datetime="2018-11-20 09:08:00">11<sup>th</sup> November 20th 2018</time></p>
  <span class="summary">
    <p class="p-summary"><data class="p-category" value="$status">Backstage</data> Post on Building a Podcast Feed</p>
    </span>
 </div>
      <img class="featured u-featured" src="http://dogzone.jgregorymcverry.com/file/fba9517047520cf22d94187a864e986d/stuffedworldcover.jpg">
    
    <div class="copy">
  <div class="e-content">
    <p>My middle child <a class="u-url h-card" href="https://dogzone.jgregorymcverry.com">Ben</a> has really enjoyed having a  As part of this journey Ben has started a few podcast series. One on dogbreeds and a second show explaining the backstory of each of hist stuffed animals</p>
    <p>
      As a suprise for him learned how to create a podcast feed and submit it to Itunes, microcast.club, and PocketCast. I needed to learn as part of my WordPress migration plan. I stumbled a few times but I drove home listening to episode 2.
    </p>
    <h2>
      Building the Feed
    </h2>
    <p>
      I began by first building an RSS feed. I first grabbed the rss feed from Known for the audio post. I tried to create a tag in the post and then see if I could use that link on microcast.club. It did not work. I tried without the tag and it to did not work. I had just learned how to add an RSS feed to this site so I  googled and copy and pasted an Itunes podcast feed. Actually I didn't specify ITunes it was just the first template I found so I said why not. </p>
    <p>I created an xml file and then put it on Ben's domain. Folks in the #IndieWeb dev channel gave me a few parsers to try. The feed worked ion the parsers...almost. I then asked in #IndieWeb /Dev and <a href="https://quickthoughts.jgregorymcverry.com/2018/11/20/trying-to-make-an-rss-feed-for">online</a> what I did wrong. After removing the slash the feed could parse..again almost
    </p>
  </div>
      <h2>
        Building a Page. 
      </h2>
      <p>
        The podcast episodes worked but the podcast page could not be recognized. Well I could add it to microcast.club and add the webring on Ben's profile but the podcast website was not found. Trying to go to <a href="https://dogzone.jgregorymcverry.com/stuffedworld.xml">https://dogzone.jgregorymcverry.com/stuffedworld.xml</a> did not work. Trying to go to the page using the tag did not work. So I quickly threw up <a href="http://stuffedworld.dogzone.jgregorymcverry.com"> http://stuffedworld.dogzone.jgregorymcverry.com</a>. No style or anything just a landing page. It worked! I could add the podcast every, except Apple
      </p>
      <h2>
        Doing Things the Apple Way
      </h2>
      <p>
        I could not get the Apple validator to work. The hardest issue to solve was the category. I could not get "toys" accepted. I thought I made a mistake in the syntax or the template had a mistake. I used spaces, not spaces, words, etc. Nothing worked. The validator said I had no category. After some more searching I found out that you have to use Apple's categories. Success!
      </p>
      <p>
        Yet I could not pass all the tests. My image was wrong. I wish the one I used didn't have the red eye but I was moving quick and needed a picture. We will edit it later or do another shoot. Apple wants a 1400X14000 image. I first I thought any square image would do but those dimensions be the law of the land. So I hopped over to pixlr.com/editor cut out a square and then scaled it up to 1400x1400. I should start over rather than using a previously resized image but again, moving quick. After editing the image I passed the test and now we wait for approval.
      </p>
      <p>
        I did get the show into pocketcast but could not discover it. I copied in the the link to the XML file and got to listen to Ben describe "The Twins"
      </p>
      

<a href="https://jgregorymcverry.com/notes/2020-02-20-2" rel="prev"> Previous Note</a> <a class="u-syndication" href="https://brid.gy/about#twitter">Published with Bridgy</a>
  

 </div>
</article><div id="webmentions"></div>
    </main>
    <footer>
<?php include 'footer.php'; ?>

  </body>

</html>
