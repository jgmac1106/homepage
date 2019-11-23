<?php include 'head.php'; ?>
</head>
<?php include 'header.php'; ?>
    </header>
  <main class="longreads">   
  <article class="h-entry">
  <h1 class="p-name">Building a Video Page</h1>
  <div class="pubinfo">
  <p>Published by <a class="p-author h-card" href="https://jgregorymcverry.com">J. Gregory McVerry</a>
     on <time class="dt-published" datetime="2019-11-23 10:14:20">23<sup>rd</sup> Novemeber 2019</time></p>
    <p>
     
      Featured img "Building A Video Feed" a remix by jgmac1106 of 
   <small><a title="construction" href="https://flickr.com/photos/mini_malist/48703542623">construction</a> flickr photo by <a href="https://flickr.com/people/mini_malist">mini_malist (off is the new on)</a> shared under a <a href="https://creativecommons.org/licenses/by-nd/2.0/">Creative Commons (BY-ND) license</a> </small> and <small><a title="Videographer" href="https://flickr.com/photos/photosofsrilanka/6967007333">Videographer</a> flickr photo by <a href="https://flickr.com/people/photosofsrilanka">Dhammika Heenpella / CWSSIP Images of Sri Lanka</a> shared under a <a href="https://creativecommons.org/licenses/by-nc/2.0/">Creative Commons (BY-NC) license</a> </small>
  <span class="summary">
    <p class="p-summary">Reflection on Building My Video Page</p>
    </span>
 </div>
 <img class="featured u-featured" src="https://jgregorymcverry.com/photos/assets/buildingavideofeed.jog">
    <div class="copy">
  <div class="e-content">
    <p>Often we fear the scaffolds that surrond us. Building out your own infastructure takes time and effort. Over the last few months I have looked to alternatives for hosting my videos rather than relying on YouTube. I don't want people having to swim through trackers to watch my content. I am not making money on pre-roll advertisments, nobody watches my stuff. Finally I disagree with YouTube's terms of service and their creative commons content. How can something have a license that allows for remixing but to download the video to edit you violate YouTube's Terms of Service? Basically you trap content meant for the world behind a silo. </p>
    <p>I needed a new way forward. I first turned to the Internet Archive. You can see all my <a href="https://archive.org/details/@jgmac1106">videos here</a>. I might still use archive.org for my class videos, stuff for a very specific audience, but I wanted to create feeds of videos on my own site. I find the msot resilient content you can build online begins with your own domain</p>
    <p>You can see the results of <a href="https://jgregorymcverry.com/myvideos">my video page</a>.
    <h2>How I did it?</h2>
    <p>I began by thinking about my design. I sketched it out quickly on paper. I wanted to organize videos by topics or shows and have a feed for each. So I decided to use flexbox to make a quick video grid. I could have used CSS Grid but I only needed to think in one dimension so flexbox would do.</p>
    <h3>Layout and MarkUp</h3>
    <code>.videoblock {
display:flex;
flex-wrap: wrap;
 justify-content: flex-start;
}</code>
<p>So I am setting the display to flex. I then use a wrap so if a video does not fit in the current display it will drop down to another row. I then justified the content at the start of the flexbox. As I built the feed I kept checking the <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">CSS tricks guide.</a>.</p>
<code>.videoblock video {
  width:320px;
  height:240px;
}</code> 
<p>I then set the video width and height to 320x240 which is a 4:3 ratio and would allow me to have three videos across large displays, two videos on most displays, and one video on smaller displys.</p>
<code>
  .videoblock div{
  margin-right: 20px;
  margin-bottom: 20px;
}</code>
<p>The videos were too close together so I added a bit of margins on each side. I know I could use shorthand and write the two rules in one line but for people just learning often seeing explicit rules helps with understanding and growth.</p>
<code>
.videoblock p {
  font-size:2vmin;
  line-height:2vmin;
}
.videoblock time {
  font-size:1.8vmin;
  line-height:1.8vmin;
}
.videofeed {
  margin-bottom: 20px;
}
</code>
<p>I then started to play with my font-sizes. They are not perfect yet. Too big and you push the div down into the next row, too small and folks can not read them. I have also started to use viewport sizes for fonts to reduce the number of media queries I write. After I had my layout set I turned to my HTML markup</p>
<code>  &lt;div class="h-entry"&gt;
          &lt;p class="p-name"&gt;Poetry Response&lt;/p&gt;
          &lt;a class="p-author" href="/"&gt;&lt;/a&gt;
           &lt;video  controls poster="https://jgregorymcverry.com/videos/respond2poetry.png "class="u-video" src="https://jgregorymcverry.com/videos/RespondToPoetryWithPictures.mp4"&gt; 
          &lt;/video&gt;
           
      &lt;p class="p-summary"&gt;Respond to Poetry with Images?&lt;/p&gt;
      &lt;time class="dt-published" datetime="2019-11-1111:24:20+0000"&gt;2019-11-11&lt;/time&gt;
        &lt;/div&gt;</code>
  </div>
  <p>In term of the video I am mainly shooting in 720p. These are instructional videos. I see no reason in wasting bandwidth on anythign higher. Personal videos I may step up the resolution.</p>
  <p>If you are worried about hosting or don't have enough space you can use the Internet archive. In fact many of the videos on my page are still hosted there. Just copy the embed link to the video form archive.org and switch archive.org/embed/file to archive.org/download/file. If you have multiple videos in an archive.org item you will need to use the inspect tool to grad the link. You will need to replace details with download in this case. As a final note archive.org only allows openly licensed content.</p>
  <p>I ended up adding a div around each video. .This means each div is like it's own box and flexbox. Anything contained in the div sticks together. I made each video an h-entry. This is a kind of data called <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/microformats">microfomats</a> that tells social readers this is a post containing stuff. The microformats are also important to generate an RSS feed for my videos.</p>
  <h3>Building h-feeds and RSS feeds</h3>
<code> &lt;section class="h-feed videofeed" id="7minuteTips"&gt;
  &lt;h2 class="p-name"&gt;7 Minute Teaching Tips&lt;/h2&gt;</code>
      </div>
      <p>I arranged each feed into sections. The semnatic HTML elements are not required. I could have used a div but stuff like section and article make it easier for me to see my website as a bunch of restackable pieces. When I just use div it is hard to tell what piece I am working with</p>
      <p>I also made each section have an id. This allows me to use a fragment link to get to each section. So if I want to link directly to my 7 mintue teaching tip videos I can add <a href="https://jgregorymcverry.com/myvideos#7mintueTips">https://jgregorymcverry.com/myvideos#7mintueTips</a></p>
      <p>The feeds were a bit oo close together so I added som margin to the bottom. If you use a social reader that can add to h-feed you can now add my videos</p>
      <p>Next I needed to make an RSS feed for the other 98% of people who are interested in my content. This used to mean having to write and mantain an entire seperate file called XML. This leads to so many problems. When you have to manuallyenter the same data twice it doesn't take too long for one of your data sources to be wrong.</p>
      <p>Luckily Ryan Barret made this awesome tool called <a href="https://granary.io">Granary</a>. Granary will fetch a feed of your choice and then serve it up in a different feed type. So I select HTML and then select RSS for my output and boom I get a link to a proper RSS file. It will change as I update my content. Granary doesn't store any data, it just serves up the conversion. I drop in <a href="https://jgregorymcverry.com/myvideos#7mintueTips">https://jgregorymcverry.com/myvideos#7mintueTips</a> and I get <a href="https://granary.io/url?input=html&output=rss&url=https%3A%2F%2Fjgregorymcverry.com%2Fmyvideos%237minuteTips">href="https://granary.io/url?input=html&output=rss&url=https%3A%2F%2Fjgregorymcverry.com%2Fmyvideos%237minuteTips</a>. You can now subscribe to my video feeds in RSS.</p>
        <h3>What is Next?</h3>
        <p>I have started to caption all of my videos. It takes my about 3X the video length to clean up captions after importing them into the same tool. I also need to learn the syntax of how to display text overlays in my captions. If I am just repeating words I say for emphasis I wouldn't include them but sometimes I incldue extra information. I wonder if there is a way to put this in captions or if it doesn't belong.</p>
       

</article>
    </main>
    <footer>
<?php include 'footer.php'; ?>

  </body>
 
</html>
