<!-- publishing:managed -->
<?php include __DIR__.'/head.php'; ?>
</head><body><?php include __DIR__.'/header.php'; ?></header>
<main class="longreads">
<!-- publishing:body --><article class="h-entry" style="grid-auto-rows:auto">
<h1 class="p-name">Kicking The Tires of the Website</h1>
<figure class="featured-image"><img class="u-featured" src="https://live.staticflickr.com/8569/16122315430_e4e381914f.jpg" alt="tires"></figure>
<div class="pubinfo" style="grid-column:2/8"><p>Published by <a class="p-author h-card" href="https://jgregorymcverry.com">Greg McVerry</a> on <time class="dt-published" datetime="2026-09-17">2026-09-17</time> · <a class="u-url" href="https://jgregorymcverry.com/websiteupdates">Permalink</a></p></div>
<div class="e-content copy" style="grid-row:3"><h2>Be Your Own Social Media</h2>
Art needs friction. Crafting your own space online follows the same rules. Ursula Franklin, metallurgist and philosopher, wrote about the difference of holistic and prescriptive art. Beauty hides in the nooks and crannies of the creation. The mass produced pieces had no soul. The web works this way.

Social media prescribes a design and forces you into an algorithm. Before Snap,X, TikTok, and Instagram fewer people wrote online. You had to know a bit of code.

Then the WYSIWG, what you see is what you get editor burst onto the scene and Web 2.0 spread. The first generation of the web supposedly democratized reading, reaching a billion people in a few decades. Web 2.0, evangelist heralded would democratize writing.

More people did start to publish, and then social media emerged. Others came before it, but MySpace went mainstream. It still provided you with control. Many of the games and websites you love got crafted by designers who cut teeth on MySpace CSS (cascading stylesheets..how HTML gets a glow up) theme hacks.

Social media came in like a prescriptive storm and homogenized the technology. Yes it opened up the web to millions more, but looking ten years back did it bring us artistic value? State actors weaponized facebook with Cambridge Analytica. True, Twitter provided a democratizing force around the globe, but the oligarchs bought Twitter and turned the place into a cesspool.

So while billions got connected, everyone feels disconnected. Maybe we need a little friction when publishing online. Having a blog and an rss feed still works.

I wanted to get back to building my website, my story. For the last few years I have engaged more in social media for a variety of reasons. I let my home stagnate. Time to dust off the porch and reorganize the shelves.

<h2>Reclaiming Lost Archives</h2>

Having your own URL and some serve space does not come without risk. I would spin up a ton of blogs overtime, I would write on social media. Overtime things began to break. I kept muy facebook and Google+ archives, but lost them long ago.

For my blogs I had written on quickthoughts for years. It used a tool called Known. It came with my Shared Host, where my website gets published. I made so many. Then supporting the tool got too hard. The company shit down, my databases got disconnected. Everything broke. I never deleted anything though,

Through the use of ChatGPT and Codex I restored all my old blog posts and tweets. Well over 250 thousand posts. I did switch it up a bit and use Python for the publishing workflow instead of PHP and GitHub Actions. I 10% relied on vibecoding for Python. I don't know it, but look forward to learning as I build out my website.

I used AI to create a publishing workflow that allows me to use Terminal and SSH into my server. Then I create a file in a directory on my computer and open it in my text editor. Next I publish a preview, and then publish. This all works from my computer. Anywhere really.

I also relied on vibecoding to help me create a directory of my PDFs. I have worked as a Professor for a long time, and collected PDFs as a graduate student for even longer. This lead to well over 1800 files. I always had them on my server, but had to manually search.

Utilizing Codex I learned how to use some available Python libraries to parse all the files. Then using JSON a large data file gor created. Next a search engine. I fully admit having very little of a role in building this resource, but I am happy how it turned out.

I still have one WordPress site to fold in. I also have a number of personal wikis online. I am not sure if I will fold these into my website. I do have to keep them updated, but they run on an open source PHP stack that will get borked if I share the links. I may overtime try to bring it here.

I always had a plan to bring back my old work, but my I wrote my website in PHP and didn't know MYSQL well enough o do much. I feel like Python and the data files provide a nice to middle ground to wanting flat files with no database. Plus with all my stuff already in JSON I might get to do neat stuff down the road with a local LLM.

Importing the database and publishing the initial build did chew through tokens, I don't know how much beyond knowing my balance auto-refilled, in the beginning of the month, but now I have a publishing workflow that does not rely on me using any AI and just local resources. Let's me concentrate on writing.


<h2>Building a Poetry Page</h2>

I also wanted to save all my poems. Reading and writing online takes agency and artistry, as Tierney used to say. I find both in making poems. I had hundreds of poems on Twitter and my old blogs I could have lost. When Codex created a data file for me of my archives I could then create a view for my poems.

I still have my <a href="/mypoetry/">poetry page</a>but I embedded a feed of my <a href="/smallpoems/">Small Poems</a>

<h2>Ukrainian Poetry</h2>

I also have done some fundraising for different units in Ukraine using poetry. I don't have much money, but I do have too many words. I decided to leverage a poetic crutch to create thank you gifts for people who donate to collections.

Every April I even run a gift a poem fundraiser to celebrate National Poetry Month. I pulled all my poems together and published a page <a>

<h2>What's Next?</h2>

I need to work on my font and typesetting. I like mucking about in CSS but have struggled with responsive fonts. I could use media queries but I have tried more viewport font sizes, and messed them up.

I also want to add some more photo pages. I have lots of ideas.

<a href="https://news.indieweb.org/en">
  Also posted on IndieNews
</a>
</div>
</article><!-- /publishing:body -->
<div id="webmentions"></div>
</main><footer><?php include __DIR__.'/footer.php'; ?></body></html>
