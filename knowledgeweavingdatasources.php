<?php include 'head.php'; ?>
</head>
<?php include 'header.php'; ?>
</header>
    
   <main class="longreads">   
<article class="h-entry">
	<h1 class="p-name">Data Sources: Knowledge Weaving in IndieWeb Network</h1>
    <div class="pubinfo">
  <p>Published by <a class="p-author h-card" href="https://jgregorymcverry.com">J. Gregory McVerry</a>
     on <time class="dt-published" datetime="2019-08-07 15:38:00">07<sup>th</sup> August 2019</time></p>
  <span class="summary">
    <p class="p-summary">Baring my Sole for Dai</p>
    </span>
 </div>
    
    <div class="copy e-content">
<div class="h-entry">
  <div class="h-cite u-repost-of">
    Repost of <a class="u-url" href="https://chat.indieweb.org/meta/2019-10-29#t157236334305500">a post</a> by
    <span class="p-author h-card">
      <a class="u-url p-name" href="https://indieweb.org">IndieWeb</a>
    </span>:
    <blockquote class="e-content">
   
<p>[tantek] authorship is supposed to be spec for consuming code, not general purpose documentation about authors<br />
# 15:28<br />
[tantek] all the "how to mark up an h-entry with ..." should be in /h-entry<br />
# 15:28<br />
[tantek] all the "how to markup an h-feed with ..." should be in /h-feed<br />
[Lewis_Cowles] joined the channel<br />
# 15:33<br />
[jgmac1106] snarfed shared this which some people find helpful: https://indieweb.org/h-card#Issues<br />
# 15:35<br />
[jgmac1106] that question comes up a lot where people don't want an h-card in every h-entry and may or may not want in the footer of the article, I have meetings now but will try to take a look later at the h-entry, h-feed articles on the IWC wiki<br />
# 15:35<br />
[jgmac1106] authorship has a section on "How to Publish" https://indieweb.org/authorship#How_to_publish<br />
# 15:37<br />
[jgmac1106] and the article is written with publishers and not consumers in mind "if you have an h-card on your website" etc maybe move that section to their respective placers on /h-entry or h-feed?<br />
# 15:37<br />
[tantek] no I disagree that sharing issues is useful to someone asking "how to" questions<br />https://chat.indieweb.org/meta/2019-10-29#t1572363343055000
# 15:38<br />
[tantek] that's only a way to confuse people further with things that may have nothing to do with what they're trying to do<br />
# 15:38<br />
[tantek] is that not obvious from a learning perspective?<br />
# 15:38<br />
[jgmac1106] yeah just sharing the links people pass around when folks ask about hiding their author info<br />
# 15:38<br />
[tantek] not helping<br />
jackjamieson joined the channel<br />
# 15:40<br />
[jgmac1106] cool if you want to add a section to /h-entry and /h-feed would happily share those with people luckily Maxwell found it helpful https://www.maxwelljoslyn.com/blog/2019/10/28/1 but agree we can make a more accessible resource for folks..well off to meetings<br />
# 15:40<br />
Loqi With advice from Greg McVerry, Aaron Parecki, and Ryan Barrett, I finished getting this blog set up for subscription using the h-feed microformat, and made other improvements along the way: all pages now have a self-link in the title all pages, not ...<br />
# 16:00<br />
[tantek] I'm saying don't share links just because other people do, that's not helpful<br />
# 16:00<br />
[tantek] question whether those links are actually helpful from a beginner's and learning perspective<br />
# 16:00<br />
[tantek] also even if/when people do get things figured out, they may have still struggled with the documentation that was provided.<br /></p>
</blockquote>
</div>
</div>

<div class="h-entry">
  <div class="h-cite u-repost-of">
    Repost of <a class="u-url" href="https://chat.indieweb.org/meta/2019-10-29#t157236334305500">a post</a> by
    <span class="p-author h-card">
      <a class="u-url p-name" href="https://indieweb.org">IndieWeb</a>
    </span>:
    <blockquote class="e-content">
    	<p>
# 20:58<br/>
jamietanna[m] What's Greg's chat name? Spotted that his author name on http://php.microformats.io/?url=https%3A%2F%2Fjgregorymcverry.com%2Fnotes%2F2020-02-02-1 is `/`<br/>
# 20:59<br/>
[snarfed] https://indieweb.org/chat-names !<br/>
# 20:59<br/>
[snarfed] he's jgmac1106<br/>
[tantek] and [jgmac1106] joined the channel<br/>
# 21:18<br/>
[jgmac1106] Thx jamietanna trying to figure out the author thing with using <a class="p-author" href="/" ></a> and still messing it up.<br/>
# 21:18<br/>
[jgmac1106] I have trouble understanding that page. I am either messing up a u-uid or something in my footer h-cars I guess??<br/>
# 21:18<br/>
[jgmac1106] h-card?<br/>
# 21:18<br/>
[jgmac1106] What is author?<br/>
# 21:18<br/>
Loqi authorship is an algorithm that determines the author of a post https://indieweb.org/author<br/>
# 21:19<br/>
[jgmac1106] This: https://indieweb.org/authorship#How_to_publish<br/>
# 21:19<br/>
[jgmac1106] If you can tell me what I am doing wrong happy to fix<br/>
# 21:20<br/>
aaronpk looks like there's a missing space in your class names<br/>
# 21:20<br/>
aaronpk i see "u-url-u-uid"<br/>
# 21:21<br/>
[jgmac1106] Ooh oops, that needs fixing. Thanks<br/>
# 21:21<br/>
aaronpk it's pretty visible if you look at the parsed result<br/>
# 21:21<br/>
aaronpk https://php.microformats.io/?url=https%3A%2F%2Fjgregorymcverry.com%2Fnotes%2F2020-02-02-1<br/>
# 21:21<br/>
[jgmac1106] And u-uid is to my homepage and u-url to the post?<br/>
# 21:22<br/>
aaronpk this is for your h-card, so this is the URL of your h-card<br/>
# 21:22<br/>
[jgmac1106] Ahh yeah. Can't believe I missed this long, thx aaronpk and jaime<br/>
# 21:22<br/>
aaronpk i don't think you need uid in this case at all<br/>
# 21:22<br/>
[jgmac1106] jaimetanna++<br/>
# 21:22<br/>
Loqi jaimetanna has 1 karma over the last year<br/>
# 21:24<br/>
[tantek] I feel like every time we see something like that, like an actual real world typo error, we should consider adding it to IndieWebifyme's h-entry validator as something to look for<br/>
# 21:24<br/>
[tantek] and specifically warn about<br/>
# 21:25<br/>
aaronpk i dunno this one feels particularly fringe case<br/>
# 21:25<br/>
[tantek] also aaronpk, your question is good too, I wonder if we could detect that case of an unnecessary u-uid and recommend dropping it, in the spirit of avoiding excess/unnecessary markup<br/>
# 21:25<br/>
aaronpk i've literally never seen it before, and i'm not really excited about hardcoding checks for every possible punctuation typo or things that look like combined mf2 class names<br/>
# 21:25<br/>
[tantek] aaronpk, fair. maybe wait for more than one real world occurrence of such a typo.<br/>
# 21:25<br/>
aaronpk recommending against unnecessary uid i like though!<br/>
# 21:26<br/>
[jgmac1106] I have had the hardest time underst3u-uid but thought it was necessary for the authorship algorithm if you don't put an author<br/>
# 21:26<br/>
[jgmac1106] Understanding*<br/>
# 21:26<br/>
aaronpk the authorship algorithm is not written for publishers, so it's pretty confusing if you try to read it like that<br/>
# 21:26<br/>
jamietanna[m] Ah fair, no worries. Did we mean jamietanna++ ? 😁<br/>
# 21:27<br/>
[tantek] [jgmac1106] I'm curious, why did you feel compelled to read the authorship algorithm, as a publisher?<br/>
# 21:27<br/>
[jgmac1106] Its the best place how to figure out how to mark up a post if you don't want an h-card in every h-entry.<br/>
# 21:28<br/>
aaronpk does the "how to publish" section above that not cover it?<br/>
# 21:28<br/>
[jgmac1106] Plus it is where you go when you ask "What is author"<br/>
# 21:28<br/>
aaronpk maybe we should move the authorship algorithm to its own page so that it's more clear it's for determining the author rather than the general concept of authorship<br/>
# 21:28<br/>
[jgmac1106] Yeah it does. I made a typo. Was a little confused between h-card in footer and h-cars on homepage<br/>
# 21:29<br/>
aaronpk that would also better match the other specs like webmention and micropub where specs get their own page<br/>
# 21:29<br/>
[jgmac1106] When it wasn't parsing correct to h-card om homepage I added an h-card in footer to force that....but typo<br/>
# 21:29<br/>
[jgmac1106] Kinda same with post-type-discovery<br/>
# 21:30<br/>
[jgmac1106] Many people go there for "how to markup or publish*<br/>
# 21:30<br/>
[tantek] "Many people"?!?<br/>
# 21:31<br/>
[tantek] I'm asking why you felt compelled to go there, not others<br/>
# 21:31<br/>
[jgmac1106] I felt compelled bc when asked that is where people or Loqi send me<br/>
# 21:31<br/>
[tantek] the Loqi part we can fix<br/>
# 21:32<br/>
[jgmac1106] And h-entry, note, or post don't get into it.<br/>
# 21:32<br/>
aaronpk Loqi responds with the link to /authorship, but what made you scroll down to the "how to determine" header vs the "how to publish" header?<br/>
# 21:32<br/>
aaronpk (which is why i'm thinking maybe we move the algorithm to its own page)<br/>
# 21:33<br/>
aaronpk i will also say the "how to publish" section could benefit from being expanded a bit and adding some real markup examples<br/>
# 21:38<br/>
[jgmac1106] Agree tantek. Thus I like the idea of separate page or a subsection on h-entry... Well off to cook dinner and start chauffeur duties<br/>
# 21:38<br/>
[jgmac1106] Because learners make mistakes to learn<br/>
# 21:38<br/>
[tantek] h-entry should get into it, since it really is the p-author/u-author property we're talking about<br/>
# 21:39<br/>
[tantek] no, learners shouldn't be sent to docs that will likely confuse them more than help them. that's not kind to learners<br/>
# 21:40<br/>
[jgmac1106] aaronpk I probably got there because nothing I tried worked because I didn't realize I made a typo<br/>
# 21:40<br/>
[jgmac1106] My online life could he defined as the hunt for the missing closing div<br/>
# 22:00<br/>
[tantek] and if people are accidentally discovering it by searching for "author" or "authorship" then we should bias those pages for *publishers* and move the algorithm to its own specific page because devs will hunt deeper for that any way<br/>
# 22:01<br/>
[jgmac1106] okay went through my GitHub commits and figured out what happened. I was trying to be able to POSSE to twitter using Bridgy and keeping tweets threaded but replying to my url rather than first POSSEd tweet url and made a copy paste mistake along the way as I kept unsuccessfully trying things<br/>
# 22:03<br/>
[jgmac1106] that got stuck in my templates and copy pasta everywhere (if I am using term correctly) but it originated between some misunderstanding of me reading Bridgy how-to and authorship (conjecture based on time of commit and my browser history being same)<br/>
[KevinMarks] joined the channel<br/>
# 22:03<br/>
[jgmac1106] tantek it isnt accidental that is where community points people<br/>
# 22:06<br/>
[tantek] right, that's something we should fix<br/>
# 22:06<br/>
[tantek] -> meta<br/>
</p>
</blockquote>
</div>
</div>
<div class="h-entry">
  <div class="h-cite u-repost-of">
    Repost of <a class="u-url" href="https://chat.indieweb.org/2020-02-15#t1581730780328700">a chat log</a> by
    <span class="p-author h-card">
      <a class="u-url p-name" href="https://indieweb.org">IndieWeb</a>
    </span>:
    <blockquote class="e-content">
<p>
# 01:38<br />
[tantek] lol<br />
# 01:39<br />
[tantek] !tell [jgmac1106] per my previous consternation of authorship publishing advice vs algorithm for consuming, I've tried to split out the algorithm spec to a separate page: https://indieweb.org/authorship-spec. Could you review /authorship to see if it’s sufficiently more publisher-friendly now? Feel free to improve further. Thanks!<br />
# 01:39<br />
Loqi Ok, I'll tell them that when I see them next<br />
# 01:49<br />
[jgmac1106] What is author?<br />
# 01:49<br />
Loqi authorship is how to indicate who the author is for a post, and an algorithm that determines the author of a post https://indieweb.org/author<br />
# 01:49<br />
[jgmac1106] tantek++<br />
# 01:49<br />
Loqi tantek has 15 karma in this channel over the last year (123 in all channels)<br />
# 01:50<br />
[jgmac1106] I think under posts I will add an explict part about if it is in the footer, the two examples do cover this use case but it will be better to layout the possibilities<br />
<br />
# 16:44<br />
aaronpk okay I just did a big chunk of work on the /authorship page to try to make it more readable and include example markup... i'd appreciate any feedback on it! https://indieweb.org/authorship<br />
# 16:47<br />
[jgmac1106] except I can't aaronpk thqat is exactly what I wanted to do last night, explicit examples for the use cases. nice job<br />
swentel joined the channel<br />
# 16:51<br />
GWG aaronpk: Speaking of Compass, did you ever solve the maintenance question<br />
# 16:51<br />
aaronpk I don't remember the question<br />
# 16:52<br />
GWG aaronpk: You were thinking about how to do database maintenance after you added FlightAware data<br />
# 16:53<br />
[Jeff_Hawkins] According to the authorship test mentioned there I have some more work to do. I got a 'null' after the tests ran.<br />
# 16:54<br />
[Jeff_Hawkins] Anyway, great article but the 'test here' link goes to a Wiki stub instead of the test itself.<br />
# 16:56<br />
aaronpk that project really needs a better name, then that wiki page would make more sense<br />
jjuran joined the channel<br />
# 16:56<br />
aaronpk but yes generally wiki pages will link to other wiki pages<br />
# 16:57<br />
[Jeff_Hawkins] Link should be https://sturdy-backbone.glitch.me/ I think<br />
# 16:57<br />
aaronpk no it's intentionally linking to the wiki page there<br />
# 16:57<br />
aaronpk also that glitch link is right below it so it's fine<br />
# 16:58<br />
[Jeff_Hawkins] Stubs seem to confuse people... like me 😃<br />
# 16:58<br />
aaronpk how bout I just remove the "stub" notice then :D<br />
[LewisCowles] joined the channel<br />
# 16:59<br />
[LewisCowles] I take it the reason `u-author` never has nested `u-photo`, and rarely multiple `u-url` is that it's disallowed for some reason? I kinda understand the examples, but they don't map to my understanding of author information. I've added myself to the list of people looking for a way to link to a fuller h-card on it's own page<br />
# 16:59<br />
aaronpk oh hm I will update the examples to not use implied h-card parsing, that will be clearer<br />
# 17:03<br />
aaronpk ok done<br />
# 17:03<br />
aaronpk [LewisCowles]: i'm not sure what you mean by "`u-author` never has nested `u-photo`", do the updated examples make that clearer or do you still have this question?<br />
# 17:24<br />
[LewisCowles] [aaronpk] the reasoning and examples given, seem more confusing to me than the spec, which gives fuller examples. `u-author` isn't even on the spec page for h-card, so I guess it having nested things which didn't have the expected classes added to my confusion.<br />
# 17:26<br />
aaronpk hmm well u-author is not at all part of the h-card spec<br />
# 17:28<br />
aaronpk by "spec page" do you mean the microformats.org wiki for h-card?<br />
# 17:36<br />
aaronpk The authorship page isn't meant to be a tutorial on h-cards, it's meant to show how to provide authorship info for h-entry posts<br />
# 17:38<br />
aaronpk ok I added some text clarifying that these are not meant to be complete h-card examples<br />
# 17:42<br />
sknebel aaronpk++<br />
# 17:42<br />
Loqi aaronpk has 56 karma in this channel over the last year (209 in all channels)<br />
jjuran joined the channel<br />
# 17:50<br />
[LewisCowles] so u-author is the thing others were asking for to link to author?<br />
# 17:50<br />
[LewisCowles] probably don't mind me until I do my required reading<br />
# 17:54<br />
sknebel h-entry has a property for the author<br />
# 17:56<br />
sknebel which with a prefix then ends up as u-author or p-author in the page source<br />
# 17:57<br />
aaronpk I also realized there isn't really any use for the p- prefix in this case since you always want the value to be a URL, so I dropped it from the examples to avoid confusion and having to explain even more edge cases<br /></p>
</blockquote>
</div>
</div>
<div class="h-entry">
  <div class="h-cite u-repost-of">
    Repost of <a class="u-url" href="https://indieweb.org/wiki/index.php?title=authorship&action=history">IndieWeb Wiki History</a> by
    <span class="p-author h-card">
      <a class="u-url p-name" href="https://indieweb.org">IndieWeb</a>
    </span>:
    <blockquote class="e-content">
<p>

    (cur | prev) 09:37, 15 February 2020‎ Aaronparecki.com (talk | contribs)‎ . . (5,475 bytes) (+326)‎ . . (→‎How to publish: clarify that these are minimal h-card examples, not canonical) (rollback 8 edits | undo)<br />
    (cur | prev) 09:02, 15 February 2020‎ Aaronparecki.com (talk | contribs)‎ . . (5,149 bytes) (+233)‎ . . (include full h-card examples instead of implied parsing to better illustrate the examples) (undo)<br />
    (cur | prev) 08:43, 15 February 2020‎ Aaronparecki.com (talk | contribs)‎ . . (4,916 bytes) (+1,344)‎ . . (→‎Authorship for streams of posts: add example markup, expand details of dedicated author page) (undo)<br />
    (cur | prev) 08:12, 15 February 2020‎ Aaronparecki.com (talk | contribs)‎ . . (3,572 bytes) (-6)‎ . . (→‎See Also) (undo)<br />
    (cur | prev) 08:11, 15 February 2020‎ Aaronparecki.com (talk | contribs)‎ . . (3,578 bytes) (+451)‎ . . (→‎Authorship for individual posts: include sample markup) (undo)<br />
    (cur | prev) 08:04, 15 February 2020‎ Aaronparecki.com (talk | contribs)‎ . . (3,127 bytes) (+351)‎ . . (expand permalink section, bring use cases to the front of the description) (undo)<br />
    (cur | prev) 07:57, 15 February 2020‎ Aaronparecki.com (talk | contribs)‎ . . (2,776 bytes) (+285)‎ . . (expand how to section to make it less terse) (undo)<br />
    (cur | prev) 07:50, 15 February 2020‎ Aaronparecki.com (talk | contribs)‎ . . (2,491 bytes) (+138)‎ . . (→‎Validate) (undo)<br />
    (cur | prev) 18:01, 14 February 2020‎ Jgregorymcverry.com (talk | contribs)‎ . . (2,353 bytes) (-212)‎ . . (Undo revision 68421 by Jgregorymcverry.com (talk)) (undo)<br />
    (cur | prev) 18:00, 14 February 2020‎ Jgregorymcverry.com (talk | contribs)‎ . . (2,565 bytes) (+212)‎ . . (→‎How to publish: adding sentence about explicit design choices) (undo)<br />
    (cur | prev) 17:34, 14 February 2020‎ Tantek.com (talk | contribs)‎ . . (2,353 bytes) (+22)‎ . . (see also spec) (undo)<br />
    (cur | prev) 17:34, 14 February 2020‎ Tantek.com (talk | contribs)‎ . . (2,331 bytes) (-98)‎ . . (update Why for publish) (undo)<br />
    (cur | prev) 17:13, 14 February 2020‎ Tantek.com (talk | contribs)‎ . . (2,429 bytes) (-27,040)‎ . . (move algorithm and specification, issues, brainstorming to spec page) (undo)<br /></p>
    </blockquote>
    </div>
    </div>
<div class="h-entry">
  <div class="h-cite u-repost-of">
    Repost of <a class="u-url" href="https://indieweb.org/wiki/index.php?title=authorship-spec&action=history">IndieWeb Wiki History</a> by
    <span class="p-author h-card">
      <a class="u-url p-name" href="https://indieweb.org">IndieWeb</a>
    </span>:
    <blockquote class="e-content">

    (cur | prev) 08:18, 15 February 2020‎ Aaronparecki.com (talk | contribs)‎ . . (29,151 bytes) (+148)‎ . . (→‎Questions: moved mine to github) (rollback 1 edit | undo)<br />
    (cur | prev) 17:36, 14 February 2020‎ Tantek.com (talk | contribs)‎ . . (29,003 bytes) (+289)‎ . . (move authorship#Why to here as use-case, reword accordingly) (undo)<br />
    (cur | prev) 17:20, 14 February 2020‎ Tantek.com (talk | contribs)‎ . . (28,714 bytes) (+40)‎ . . (test suite) (undo)<br />
    (cur | prev) 17:16, 14 February 2020‎ Tantek.com (talk | contribs)‎ . . (28,674 bytes) (+119)‎ . . (Formal spec and issues space created, building blocks, new issues on GH please) (undo)<br />
    (cur | prev) 17:13, 14 February 2020‎ Tantek.com (talk | contribs)‎ . . (28,555 bytes) (+28,555)‎ . . (extract from authorship and start a spec for implementers)<br />
</blockquote>
</div>
</div>
<div class="h-entry">
  <div class="h-cite u-repost-of">
    Repost of <a class="u-url" href="https://indieweb.org/h-card#Issues">IndieWeb Wiki Page</a> by
    <span class="p-author h-card">
      <a class="u-url p-name" href="https://indieweb.org">IndieWeb</a>
    </span>:
    <blockquote class="e-content">
<p>From a pure user features perspective, and assuming no invisible metadata, how are the following accomplished (that is, with h-card)?</p>
<p>    I'd like to show some personal profile information (for example, name) on my posts, but not my picture. I may want to show additional profile information on another page, for example. /about. That may include my picture, or it may not (including icon).</p>
<p>    When I comment, like, repost, or rsvp to someone else's post, and they render that response (comments-presentation), I'd like to let them show my additional profile information, including my picture, if they choose. authorship handles some of this, but maybe not all, for example, the case where I don't show my picture anywhere on my site.</p>
<p>    Similarly, when I log into a site like this wiki with IndieAuth (etc.), I'd like the site to be able to discover my additional profile information, including my picture, to show on my profile page, activity, or other appropriate places. representative-hcard-parsing gets close, but not all the way. #Brainstorming below is a straw man extension that could help.</p>
<p>From an h-card specific viewpoint, here are some additional issues / questions:</p>
<p>    Some people (e.g. GWG, Kartik, User:Snarfed.org, User:Mowens.com, gRegor Morrill, Vika, Lewis Cowles) would like a way to include both a minimal h-card on a page *and* a link to a "complete" h-card with more information, for example, contact details or photo. authorship and representative-hcard-parsing are both related but slightly different, and both currently only use the inline h-card if it's available. The inline h-card could include a link to the expanded h-card.</p>
<p>    Along the same lines, some people (e.g. User:Snarfed.org, User:Mowens.com, gRegor Morrill) would like to make some parts of their h-card invisible everywhere, but still available to programmatic consumers. Examples include rel-me links to some silos, public encryption key. Related: antipatterns#invisible_metadata</p><p>
        On my site currently, my author hCard on each post is invisible because I do not feel the need to display my photo, URL, and name on every post. This would be different if it was a multiple-author site. gRegor Morrill</p><p>
        I too have made the h-card invisible on my home page because I don't want details to show there for design reasons. Jeremy Cherfas</p>
    </blockquote>
</div>
</div>
</div>
</article>
<div id="webmentions"></div>
    </main>
    <footer>
<?php include 'footer.php'; ?>

  </body>
 
</html>
