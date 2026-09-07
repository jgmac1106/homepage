<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<title>MAGA Social Media</title>
<style>
/* Base */
*, *::before, *::after { box-sizing: border-box; }

body { font-family: Arial, Helvetica, sans-serif; margin: 24px; }
h1 { font-size: 20px; margin-bottom: 8px; }
p.note { color: #444; font-size: 12px; margin-top: 0; margin-bottom: 18px; }

.tableWrap { width: 100%; }

table { border-collapse: collapse; width: 100%; table-layout: fixed; }
th, td {
  border: 1px solid #999;
  padding: 8px;
  vertical-align: top;
  word-wrap: break-word;
  overflow-wrap: anywhere;
}
th {
  position: sticky;
  top: 0;
  z-index: 2;
  background: #f2f2f2;
  font-size: 12px;
}
td { font-size: 12px; }

a { text-decoration: none; }
a:hover { text-decoration: underline; }

/* Controls */
#tableControls{
  display:flex;
  flex-wrap:wrap;
  gap:10px;
  align-items:center;
  margin: 12px 0 16px;
}
#tableControls input,
#tableControls select{
  padding:8px 10px;
  border:1px solid #999;
  border-radius:8px;

  /* Responsive-friendly sizing (prevents overflow on mobile) */
  min-width: 0;
  flex: 1 1 260px;
  width: 100%;
}
#tableControls button{
  padding:8px 12px;
  border:1px solid #999;
  border-radius:8px;
  background:#f2f2f2;
  cursor:pointer;
}
#resultCount{
  font-size: 12px;
  color:#444;
  margin-left: 0;
  flex: 1 1 160px;
  text-align: left;
}

/* Sorting indicators */
th.sortable{ cursor:pointer; user-select:none; }
th.sortable::after{ content:""; margin-left:6px; }
th.sortable[data-sort="asc"]::after{ content:"▲"; }
th.sortable[data-sort="desc"]::after{ content:"▼"; }

/* Tag chips */
.chips { display:flex; flex-wrap:wrap; gap:6px; }
.chip{
  display:inline-flex;
  align-items:center;
  padding:3px 8px;
  border:1px solid #999;
  border-radius:999px;
  font-size:11px;
  cursor:pointer;
  background:#f7f7f7;
  user-select:none;
  white-space:nowrap;
}
.chip.active { background:#e9e9e9; font-weight:600; }

/* ============================
   Responsive table + controls
   ============================ */

/* Medium screens: allow horizontal scroll INSIDE a wrapper */
@media (min-width: 701px) and (max-width: 1100px) {
  .tableWrap{
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  table{
    width: 100%;
    min-width: 980px; /* adjust if you want more/less scroll */
  }
}

/* Small screens: convert rows to "cards" */
@media (max-width: 700px) {
  html, body { overflow-x: hidden; }

  body { margin: 12px; }
  h1 { font-size: 18px; }

  /* Stack controls */
  #tableControls { gap: 8px; }
  #resultCount { width: 100%; order: 99; }

  /* Stop horizontal scroll; cards fit screen */
  .tableWrap { overflow: visible; }
  table {
    border: 0;
    min-width: 0;
    table-layout: auto;
  }

  thead { display: none; }
  tbody { display: block; }

  tr{
    display:block;
    border: 1px solid #999;
    border-radius: 12px;
    margin: 0 0 12px;
    overflow: hidden;
    background:#fff;
  }

  td{
    display:flex;
    gap:10px;
    align-items:flex-start;
    border:0;
    border-bottom:1px solid #e1e1e1;
    padding:10px 12px;
    font-size:13px;
    text-align:left;
  }
  td:last-child { border-bottom: 0; }

  td::before{
    content: attr(data-label);
    flex: 0 0 38%;
    font-weight: 700;
    color:#444;
    white-space: normal;
  }

  td > * { min-width: 0; }
  a { word-break: break-word; }
}

/* Wide screens: keep result count pushed right */
@media (min-width: 701px) {
  #resultCount { margin-left: auto; text-align: right; }
}
.works-cited {
  max-width: 1000px;
  margin: 3rem auto;
  padding: 0 1rem;
}

.works-cited h2 {
  margin: 0 0 1rem 0;
}

.works-cited h3 {
  margin: 1.5rem 0 0.75rem 0;
}

.apa-list {
  margin: 0;
  padding-left: 2rem; /* list marker gutter */
}

.apa-list li {
  margin: 0 0 0.85rem 0;
  padding-left: 1.5rem;   /* hanging indent width */
  text-indent: -1.5rem;   /* creates the hanging indent */
  line-height: 1.5;
}

.apa-list a {
  word-break: break-word;
  overflow-wrap: anywhere;
}

.apa-note {
  margin-top: 1rem;
  font-size: 0.95rem;
  opacity: 0.85;
}

</style>
</head>
<body>
<h1>MAGA Social Media</h1>
<h2>Are They State Owned Propaganda Channels?</h2>
<div id="tableControls">
  <input id="searchBox" type="search" placeholder="Search all columns…" />

  <select id="categoryFilter">
    <option value="">All categories</option>
  </select>

  <input id="tagsFilter" type="text" placeholder="Tags (comma-separated), e.g. OFAC, Trump Tower meeting" />

  <button id="clearFilters" type="button">Clear</button>

  <div id="resultCount"></div>
</div>
<table id="connectionsTable" border="1">
  <thead>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Tags</th>
      <th>Biographical summary</th>
      <th>Connection to Donald Trump</th>
      <th>Roles in TMTG / Truth Social / Rumble / Locals / Narya / Colt / X</th>
      <th>Role in current Trump Administration</th>
      <th>Connection(s) to Russia</th>
      <th>Dropped cases / investigations / lawsuits ended or withdrawn by DOJ or other federal agency</th>
      <th>Sources / evidence links</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Donald Trump</td>
      <td>Trump Administration (elected)</td>
      <td>President; TMTG shareholder; Truth Social</td>
      <td>American politician and businessman; 45th and 47th President of the United States.</td>
      <td>Subject (Donald Trump).</td>
      <td>
        Founder / controlling stakeholder of Trump Media &amp; Technology Group (TMTG) (stake reported held via a revocable trust managed by Donald Trump Jr.).<br>
        Flagship user/promoter of Truth Social (TMTG platform).
      </td>
      <td>President of the United States (inaugurated Jan. 20, 2025).</td>
      <td>
        Multiple investigations documented extensive Russia-related contacts/issues around the 2016 election era; major references include the Mueller Report and the Senate Intelligence Committee report series.<br>
        Trump Tower Moscow pursuit during the 2015–2016 period is discussed in public investigative reporting (see Mueller Report).
      </td>
      <td>
        DOJ moved to dismiss (and court dismissed) the federal 2020-election subversion case against Trump in late Nov. 2024, citing DOJ policy regarding prosecution of a sitting president.<br>
        After the 2024 election, DOJ/Special Counsel also ceased pursuing the classified-documents appeal as to Trump; the 11th Circuit dismissed the appeal as to Trump in late Nov. 2024.
      </td>
      <td>
        <a href="https://www.justice.gov/storage/report_volume1.pdf">DOJ: Mueller Report (Vol. I PDF)</a><br>
        <a href="https://www.intelligence.senate.gov/sites/default/files/documents/report_volume5.pdf">U.S. Senate Intel Report, Vol. 5 (PDF)</a><br>
        <a href="https://www.reuters.com/world/us/us-prosecutor-smith-asks-judge-dismiss-2020-election-subversion-case-against-2024-11-25/">Reuters (Nov. 2024: election case dismissed)</a><br>
        <a href="https://www.reuters.com/world/us/us-court-dismisses-appeal-trump-classified-documents-case-2024-11-26/">Reuters (Nov. 2024: docs appeal dismissed as to Trump)</a><br>
        <a href="https://www.pbs.org/newshour/politics/read-the-full-motion-to-dismiss-election-interference-case-against-trump">PBS: Motion to dismiss (full text)</a>
      </td>
    </tr>

    <tr>
      <td>Devin Nunes</td>
      <td>Trump Administration / TMTG</td>
      <td>TMTG CEO; Intelligence board</td>
      <td>Former U.S. Representative (CA) and former House Intelligence Committee chair; executive in Trump-aligned media ventures.</td>
      <td>Longtime Trump ally; leads Trump Media (TMTG) and has held Trump-appointed advisory roles.</td>
      <td>CEO, Trump Media &amp; Technology Group (TMTG).</td>
      <td>Intelligence board chair (PIAB).</td>
      <td>None known</td>
      <td>None known</td>
      <td>
        <a href="https://www.presidency.ucsb.edu/documents/statement-president-elect-donald-j-trump-announcing-the-appointment-devin-nunes-chair-the">UCSB Presidency Project: Nunes PIAB appointment</a><br>
        <a href="https://www.tmtgcorp.com/">TMTG corporate site</a>
      </td>
    </tr>

    <tr>
      <td>Eric Swider</td>
      <td>TMTG</td>
      <td>TMTG board</td>
      <td>Corporate executive associated with the SPAC pathway that took Trump Media public; listed as a director of TMTG in company governance materials.</td>
      <td>Serves on Trump Media’s board; involved in the TMTG public-company structure.</td>
      <td>Director, Trump Media &amp; Technology Group (TMTG).</td>
      <td>&mdash;</td>
      <td>None known</td>
      <td>None known</td>
      <td>
        <a href="https://ir.tmtgcorp.com/corporate-governance/board-of-directors/default.aspx">TMTG: Board of Directors</a><br>
        <a href="https://rtac1.com/team/">RTAC: Team / leadership bio</a>
      </td>
    </tr>

    <tr>
      <td>Donald Trump Jr.</td>
      <td>Trump family / TMTG</td>
      <td>TMTG board; Trust</td>
      <td>Businessman and political figure; executive at the Trump Organization; prominent Trump campaign surrogate.</td>
      <td>Son of Donald Trump; major public advocate and surrogate in Trump politics and fundraising.</td>
      <td>
        Director, Trump Media &amp; Technology Group (TMTG).<br>
        Reported trustee of a revocable trust holding Donald Trump’s TMTG shares.
      </td>
      <td>&mdash;</td>
      <td>Participated in the June 9, 2016 Trump Tower meeting involving a Russian-linked lawyer and other participants (documented in the Mueller Report and related reporting).</td>
      <td>None known</td>
      <td>
        <a href="https://ir.tmtgcorp.com/corporate-governance/board-of-directors/default.aspx">TMTG: Board of Directors</a><br>
        <a href="https://www.theverge.com/2024/12/13/24320326/trump-media-donald-trump-jr-trust-majority-stake">The Verge (trust / stake reporting)</a><br>
        <a href="https://www.justice.gov/storage/report_volume1.pdf">DOJ: Mueller Report (Vol. I PDF)</a>
      </td>
    </tr>

    <tr>
      <td>Linda McMahon</td>
      <td>Trump Administration / TMTG</td>
      <td>Cabinet; TMTG board</td>
      <td>Business executive (WWE) and longtime Republican donor/figure; served as SBA Administrator in Trump’s first term; later appointed to lead the Department of Education in Trump’s second term.</td>
      <td>Longtime Trump ally/donor; served in Trump’s first-term administration; senior Trump-world figure.</td>
      <td>Director, Trump Media &amp; Technology Group (TMTG) (company governance filings/reporting).</td>
      <td>Cabinet (Education).</td>
      <td>None known</td>
      <td>None known</td>
      <td>
        <a href="https://www.ed.gov/about/leadership/linda-mcmahon">U.S. Dept. of Education: McMahon bio</a><br>
        <a href="https://www.newsweek.com/linda-mcmahon-trump-media-board-stock-1998269">Newsweek (TMTG board reporting)</a>
      </td>
    </tr>

    <tr>
  <td>Peter Thiel</td>
  <td>U.S. business executives / investors</td>
  <td>Tech investor<br>Political donor</td>
  <td>Silicon Valley billionaire and venture capitalist. Co-founded PayPal and Palantir. Prominent Republican-aligned political donor.</td>
  <td>
    Joined Donald Trump’s 2016 transition effort.<br>
   connected Mark Zuckerberg and Donald Trump for a private dinner meeting.<br>
    Backed MAGA3X  through Jeff Giesea,  former Thiel Capital Management employee, and through Thiel’s attendance at the DeploraBall. <br>
    MAGA3X leader Mike Cernovich previously promoted false Pizzagate rumors. Pizzagate is a debunked conspiracy theory that is widely described as a precursor to QAnon.
  </td>
  <td></td>
  <td>None known</td>
  <td>
  Jefffrey Epstein’s emails and calendar documents show Jeffrey Epstein scheduled a meeting in October 2016 with Peter Thiel and Russian United Nations ambassador Vitaly Churkin. <br>
</td>
  <td>None known</td>
  <td>
    <a href="https://www.theguardian.com/technology/2016/nov/11/peter-thiel-joins-donald-trump-transition-team">The Guardian (Thiel joins Trump transition)</a><br>
    <a href="https://www.vanityfair.com/news/2019/11/mark-zuckerberg-donald-trump-secret-dinner">Vanity Fair (Zuckerberg–Trump dinner, Thiel involvement)</a><br>
    <a href="https://www.theatlantic.com/politics/archive/2017/01/the-deploraball-the-alt-right-begins-to-coalesce/513039/">The Atlantic (DeploraBall, MAGA3X leadership, Thiel attendance)</a><br>
    <a href="https://www.britannica.com/topic/Pizzagate">Britannica (Pizzagate overview and link to QAnon)</a><br>
    <a href="https://www.washingtonpost.com/politics/mike-cernovich-steps-into-the-us-senate-race-in-arizona-a-gonzo-thing-he-says/2018/08/25/d0fe9ece-a7bd-11e8-a656-943eefab5daf_story.html">The Washington Post (Cernovich promoted Pizzagate, QAnon outgrowth)</a>
  </td>
</tr>


    <tr>
      <td>JD Vance</td>
      <td>Trump Administration (elected)</td>
      <td>Vice President; Narya</td>
      <td>American politician and author; previously U.S. Senator from Ohio; venture-capital background.</td>
      <td>Trump’s 2024 running mate; now Vice President.</td>
      <td>Co-founder, Narya Capital.</td>
      <td>Vice President.</td>
      <td>None known</td>
      <td>None known</td>
      <td>
        <a href="https://www.whitehouse.gov/administration/jd-vance/">White House: Vice President JD Vance</a><br>
        <a href="https://www.axios.com/2019/01/18/jd-vance-narya-capital-venture-capital">Axios: Vance co-founds Narya Capital</a>
      </td>
    </tr>
<tr>
  <td>David Sacks</td>
  <td>Trump Administration (White House)</td>
  <td>White House adviser; Rumble board</td>
  <td>
    Technology entrepreneur and venture capitalist; co-founder and partner at Craft Ventures.<br>
    Craft Ventures led Locals’ $3.8M seed round (Apr. 2021).<br>
    Rumble later acquired Locals (Oct. 2021).<br>
    Rumble acquired Sacks’s startup Callin in 2023 and stated Sacks would join Rumble’s board pursuant to that acquisition.
  </td>
  <td>
    Trump appointee as “White House A.I. &amp; Crypto Czar” / adviser (announced Dec. 2024; waiver memo issued Mar. 2025).
  </td>
  <td>
    Rumble: Board member (joined following Rumble’s acquisition of Callin).
  </td>
  <td>White House adviser (AI &amp; Crypto).</td>
  <td>
    No direct Russia-linked business orcontact known<br>
    Publicly argued against the U.S. going “all in” on Ukraine and emphasized negotiation/de-escalation themes; critics characterize this as aligning with Russian-favorable framing.
  </td>
  <td>None known</td>
  <td>
    <a href="https://www.craftventures.com/team/david-sacks">Craft Ventures: David Sacks bio</a><br>
    <a href="https://blog.locals.com/en/locals-com-raises-to-empower-content-creators-to-be-independent-with-its-subscription-based-community-platform/">Locals (Apr. 20, 2021): $3.8M seed led by Craft Ventures</a><br>
    <a href="https://www.prnewswire.com/news-releases/rumble-acquires-locals-to-help-build-a-bigger-creator-economy-301408700.html">PRNewswire (Oct. 26, 2021): Rumble acquires Locals</a><br>
    <a href="https://www.sec.gov/Archives/edgar/data/1830081/000121390022072651/ea168711-424b3_rumbleinc.htm">SEC filing (Rumble prospectus): acquisition of Locals (Oct. 25, 2021; consideration disclosed)</a><br>
    <a href="https://corp.rumble.com/blog/rumble-acquires-podcasting-and-live-streaming-platform-callin/">Rumble (May 15, 2023): Callin acquisition; Sacks slated to join board</a><br>
    <a href="https://www.axios.com/2023/05/20/rumble-social-media-video-podcasts">Axios (May 20, 2023): context on Locals/Callin and board seat</a><br>
    <a href="https://www.presidency.ucsb.edu/documents/statement-president-elect-donald-j-trump-announcing-the-appointment-david-o-sacks-white">UCSB Presidency Project (Dec. 5, 2024): Trump statement appointing Sacks</a><br>
    <a href="https://www.whitehouse.gov/wp-content/uploads/2025/03/Memo-David-Sacks-3.5.2025-1.pdf">White House (Mar. 5, 2025): memo for Sacks</a><br>
    <a href="https://www.theamericanconservative.com/should-america-go-all-in-on-ukraine/">The American Conservative: “Should America Go All In on Ukraine?”</a>
  </td>
</tr>

  <tr>
  <td>Howard Lutnick</td>
  <td>Trump Administration (Cabinet)</td>
  <td>Cabinet<br>Investor</td>
  <td>Business executive. Chairman and CEO of Cantor Fitzgerald. Serves as Secretary of Commerce in the current Trump Administration.</td>
  <td>Trump appointee and Cabinet official.</td>
  <td>
    Rumble Inc. (RUM) holding disclosed on his public financial disclosure with a reported value range of $1,000,001 to $5,000,000<br>
    CF Acquisition Corp. VI was a Cantor sponsored SPAC led by Lutnick that completed a business combination with Rumble
  </td>
  <td>Cabinet (Commerce)</td>
  <td>None known</td>
  <td>
    A Cantor Fitzgerald affiliate, CG Technology LP formerly doing business as Cantor Gaming, entered a non prosecution agreement in 2016<br>
    The company agreed to pay $16.5 million in penalties and forfeiture to resolve a criminal investigation into illegal gambling and money laundering conduct from about 2009 through 2013<br>
    The agreement stated the government would not prosecute CG Technology if it complied with the agreement for two years
  </td>
  <td>
    <a href="https://www.justice.gov/usao-edny/pr/cantor-fitzgerald-affiliate-pay-more-16-million-penalties-and-forfeiture-engaging">DOJ EDNY, Oct 3 2016, Cantor Gaming CG Technology non prosecution agreement</a><br>
    <a href="https://extapps2.oge.gov/201/Presiden.nsf/PAS%2BIndex/AC841CF0E3B5807A85258C1C00320D21/%24FILE/Lutnick%2C%20Howard%20%20final278.pdf">OGE 278e, Jan 2025, Lutnick financial disclosure including Rumble holding</a><br>
    <a href="https://www.sec.gov/Archives/edgar/data/1830081/000121390022056631/ea165901ex99-2_cfacq6.htm">SEC filing exhibit, Sep 2022, CFVI led by Lutnick and sponsored by Cantor</a><br>
    <a href="https://investors.rumble.com/corporate-governance/board-of-directors/">Rumble investor relations, Board of Directors page</a>
  </td>
</tr>


  <td>Tulsi Gabbard</td>
  <td>Trump Administration (IC leadership)</td>
  <td>Intelligence; Rumble; Locals</td>
  <td>Former U.S. Representative and U.S. Army Reserve officer. Serves as Director of National Intelligence in the current Trump Administration.</td>
  <td>Nominated by Donald Trump and confirmed as Director of National Intelligence.</td>
  <td>
    Locals community creator at <a href="https://tulsi.locals.com/">tulsi.locals.com</a><br>
    Rumble creator with a channel at <a href="https://rumble.com/TulsiGabbard">rumble.com/TulsiGabbard</a><br>
    Rumble announced in 2021 that it welcomed her to the platform as a featured creator and reporting described a paid content deal
  </td>
  <td>Intelligence leadership (DNI)</td>
  <td>
    As DNI, she declassified and publicized materials about Russian interference in the 2016 election and argued that Obama era officials politicized intelligence related to that issue.<br>
    She said she would refer former officials for potential prosecution and provided materials to the Justice Department.<br>
    The Justice Department announced a Strike Force to assess evidence tied to the materials she publicized.<br>
    AP reporting said the declassified documents did not support claims of a conspiracy to frame Trump and did not change the longstanding conclusion that Russia interfered in 2016.
  </td>
  <td>None known</td>
  <td>
    <a href="https://www.justice.gov/opa/pr/justice-department-announces-formation-strike-force-assess-evidence-publicized-odni">DOJ, July 23 2025, Strike Force announcement</a><br>
    <a href="https://www.reuters.com/world/us/justice-department-assess-claims-alleged-weaponization-us-intelligence-community-2025-07-23/">Reuters, July 23 2025, DOJ to assess claims tied to ODNI disclosures</a><br>
    <a href="https://apnews.com/article/0452e1079506daa86d75fa0a2f22fc60">AP, August 2025, review of the declassified materials</a><br>
    <a href="https://www.politico.com/news/2025/07/18/tulsi-gabbard-2016-election-investigation-00463779">Politico, July 18 2025, reporting on referrals and prosecution requests</a><br>
    <a href="https://www.dni.gov/files/ODNI/documents/DIG/DIG-Declassified-HPSCI-Report-Manufactured-Russia-Hoax-July2025.pdf">ODNI, July 2025, posted declassified report PDF</a><br>
    <a href="https://tulsi.locals.com/">Locals: Tulsi Gabbard community</a><br>
    <a href="https://corp.rumble.com/blog/rumble-welcomes-eight-nationally-recognized-thought-leaders-to-its-platform/">Rumble, Aug 12 2021, announcement welcoming Gabbard to the platform</a><br>
    <a href="https://www.civilbeat.org/beat/gabbard-hired-by-rumble-a-conservative-video-platform/">Honolulu Civil Beat, Aug 12 2021, reporting on her Rumble agreement</a><br>
    <a href="https://www.tubefilter.com/2021/08/16/rumble-content-deals-tulsi-gabbard-glenn-greenwald-covid-videos/">Tubefilter, Aug 16 2021, reporting on paid content deals</a>
  </td>
</tr>



    <tr>
      <td>Vivek Ramaswamy</td>
      <td>Political figure</td>
      <td>Candidate</td>
      <td>Entrepreneur and former Republican presidential primary candidate; later endorsed Trump.</td>
      <td>Endorsed Trump; briefly associated with the government-efficiency effort (reporting indicates he exited that role).</td>
      <td>&mdash;</td>
      <td>&mdash;</td>
      <td>None known</td>
      <td>None known</td>
      <td>
        <a href="https://apnews.com/article/vivek-ramaswamy-doge-ohio-governor-musk-trump-328400a5cc47adde8dd97eb628d18164">AP: Ramaswamy won’t join DOGE</a><br>
        <a href="https://www.reuters.com/world/us/trump-says-elon-musk-vivek-ramaswamy-will-lead-department-government-efficiency-2024-11-13/">Reuters: DOGE announcement</a>
      </td>
    </tr>

    <tr>
      <td>Dan Bongino</td>
      <td>Trump Administration (law enforcement)</td>
      <td>Law enforcement; Rumble</td>
      <td>Former NYPD officer and U.S. Secret Service agent; conservative media personality and commentator.</td>
      <td>High-profile pro-Trump commentator; appointed to senior FBI leadership in Trump’s second term.</td>
      <td>
        Rumble: content creator / channel presence.<br>
        Rumble: reported beneficial ownership/shareholding in company filings.
      </td>
      <td>FBI leadership (Deputy Director).</td>
      <td>None known</td>
      <td>None known</td>
      <td>
        <a href="https://www.fbi.gov/about/leadership-and-structure/deputy-director-dan-bongino">FBI: Deputy Director Dan Bongino</a><br>
        <a href="https://www.sec.gov/Archives/edgar/data/1830081/000121390024035786/ea0204515-def14a_rumble.htm">SEC: Rumble DEF 14A (ownership)</a>
      </td>
    </tr>
    
<tr>
  <td>Michael Ellis</td>
  <td>Trump Administration (intelligence)</td>
  <td>Intelligence</td>
  <td>
    Attorney and national security official. Served in senior roles in the first Trump Administration including a legal role at the National Security Council and the White House Counsel’s Office. Later became General Counsel and Corporate Secretary at Rumble. Sworn in as Deputy Director of the CIA in February 2025.
  </td>
  <td>
    Former first term Trump Administration official. Appointed by Trump as Deputy Director of the CIA.
  </td>
  <td>&mdash;</td>
  <td>
    Intelligence leadership (CIA)<br>
   Ellis removed the CIA’s top legal official and installed himself as the agency’s general counsel while remaining Deputy Director.
  </td>
  <td>None known</td>
  <td>None known</td>
  <td>
    <a href="https://www.cia.gov/stories/story/michael-ellis-sworn-in-as-cia-deputy-director/">CIA, Feb 10 2025, sworn in as CIA Deputy Director</a><br>
    <a href="https://www.reuters.com/world/us/cia-deputy-director-replaces-agencys-top-legal-official-with-himself-new-york-2025-10-06/">Reuters, Oct 6 2025, installed himself as CIA general counsel per NYT report</a><br>
    <a href="https://corp.rumble.com/blog/rumble-announces-michael-ellis-as-general-counsel/">Rumble, Dec 8 2021, hired as General Counsel and Corporate Secretary</a><br>
    <a href="https://www.sec.gov/Archives/edgar/data/1830081/000121390022074228/ea169010ex10-1_rumbleinc.htm">SEC exhibit, Nov 16 2022, employment agreement stating he was General Counsel and Corporate Secretary at Rumble</a>
  </td>
</tr>

    <tr>
      <td>Elon Musk</td>
      <td>Tech executive / Trump adviser</td>
      <td>X owner; White House adviser</td>
      <td>Technology executive; leads/has led major firms including SpaceX and Tesla; owner of X (formerly Twitter).</td>
      <td>Major Trump ally/donor and adviser; played a leading role in the administration’s government-reform effort (DOGE) per public reporting.</td>
      <td>Owner/controller of X (formerly Twitter).</td>
      <td>White House adviser (DOGE).</td>
      <td>
        Multiple reports alleged Musk held conversations with Russian President Vladimir Putin and/or other Russian officials; U.S. lawmakers publicly urged investigation into those reports.
      </td>
      <td>
        DOJ dropped (with prejudice) a case alleging SpaceX engaged in discriminatory hiring practices against asylum seekers/refugees; dismissal documented in OCAHO materials and widely reported.
      </td>
      <td>
        <a href="https://www.wsj.com/world/russia/musk-putin-secret-conversations-37e1c187">WSJ (Oct. 2024 report)</a><br>
        <a href="https://www.reuters.com/world/us/democratic-senators-ask-pentagon-us-attorney-general-probe-musks-alleged-russia-2024-11-15/">Reuters (Nov. 2024)</a><br>
        <a href="https://www.reuters.com/legal/us-says-it-will-drop-immigration-case-against-spacex-2025-02-21/">Reuters (Feb. 2025: SpaceX case dropped)</a><br>
        <a href="https://www.justice.gov/d9/2025-02/1499b.pdf">DOJ (OCAHO) order PDF</a><br>
        <a href="https://www.nytimes.com/2025/02/11/us/politics/elon-musk-companies-conflicts.html">NYT (Feb. 2025)</a>
      </td>
    </tr>
  </tbody>
</table>



<section
  id="works-cited"
  class="works-cited"
  data-works-cited-scope="#connectionsTable"
>
  <h2>Works Cited</h2>


  <h3>Articles &amp; reports linked in the table</h3>
  <ol id="works-cited-auto" class="apa-list"></ol>

  <p class="apa-note">
    <strong>Note:</strong> Entries marked <em>(n.d.)</em> or <em>[Publisher]</em> are placeholders—swap in the publication year/publisher once confirmed.
  </p>
</section>
</body>
<script>
(() => {
  // ====== SETTINGS ======
  const TAG_MATCH_MODE = "AND"; // "AND" = must include all selected tags; "OR" = any selected tag
  const TABLE_SELECTOR = "table"; // change if needed: "#yourTableId"

  // ====== HELPERS ======
  const norm = (s) => (s || "").toLowerCase().replace(/\s+/g, " ").trim();
  const parseTagList = (s) =>
    (s || "")
      .split(",")
      .map(t => t.trim())
      .filter(Boolean)
      .map(t => t.toLowerCase());

  const getHeaderCells = (table) => {
    const thead = table.tHead || table.querySelector("thead");
    if (thead && thead.rows.length) return Array.from(thead.rows[0].cells);
    const firstRow = table.rows[0];
    return firstRow ? Array.from(firstRow.cells) : [];
  };

  const findColIndex = (headerCells, label) =>
    headerCells.findIndex(th => norm(th.innerText) === norm(label));

  // ====== FIND TABLE ======
  const table = document.querySelector(TABLE_SELECTOR);
  if (!table) return;

  const tbody = table.tBodies[0] || table.querySelector("tbody");
  if (!tbody) return;

  // ====== WRAP TABLE (prevents layout overflow; enables safe horizontal scroll) ======
  const wrapTableIfNeeded = () => {
    if (table.parentElement && table.parentElement.classList.contains("tableWrap")) return table.parentElement;

    const wrap = document.createElement("div");
    wrap.className = "tableWrap";
    table.parentNode.insertBefore(wrap, table);
    wrap.appendChild(table);
    return wrap;
  };

  const tableWrap = wrapTableIfNeeded();

  const headerCells = getHeaderCells(table);
  const idxCategory = findColIndex(headerCells, "Category");
  const idxTags = findColIndex(headerCells, "Tags");

  const rows = Array.from(tbody.rows);
  rows.forEach((r, i) => r.dataset._origIndex = String(i));

  // Add data-labels so the mobile card CSS can show field names
  const headerLabels = headerCells.map(th => (th.innerText || "").trim());
  rows.forEach(r => {
    Array.from(r.cells).forEach((td, i) => {
      if (!td.hasAttribute("data-label")) td.setAttribute("data-label", headerLabels[i] || "");
    });
  });

  // ====== INJECT CONTROLS IF MISSING ======
  const ensureControls = () => {
    let controls = document.getElementById("tableControls");
    if (controls) return controls;

    controls = document.createElement("div");
    controls.id = "tableControls";
    controls.innerHTML = `
      <input id="searchBox" type="search" placeholder="Search all columns…" />
      <select id="categoryFilter"><option value="">All categories</option></select>
      <input id="tagsFilter" type="text" placeholder="Tags (comma-separated), e.g. OFAC, Trump Tower meeting" />
      <button id="clearFilters" type="button">Clear</button>
      <div id="resultCount"></div>
    `;

    // Insert controls above the WRAPPER (so it stays above the scroll area)
    tableWrap.parentNode.insertBefore(controls, tableWrap);
    return controls;
  };

  ensureControls();

  const searchBox = document.getElementById("searchBox");
  const categoryFilter = document.getElementById("categoryFilter");
  const tagsFilter = document.getElementById("tagsFilter");
  const clearBtn = document.getElementById("clearFilters");
  const resultCount = document.getElementById("resultCount");

  // ====== CATEGORY DROPDOWN ======
  const populateCategories = () => {
    if (idxCategory < 0 || !categoryFilter) return;
    const current = categoryFilter.value || "";

    categoryFilter.querySelectorAll("option:not(:first-child)").forEach(o => o.remove());

    const cats = new Set();
    rows.forEach(r => {
      const cell = r.cells[idxCategory];
      const val = cell ? cell.innerText.trim() : "";
      if (val) cats.add(val);
    });

    Array.from(cats).sort((a,b)=>a.localeCompare(b)).forEach(c => {
      const opt = document.createElement("option");
      opt.value = c;
      opt.textContent = c;
      categoryFilter.appendChild(opt);
    });

    categoryFilter.value = current;
  };

  // ====== TAG CHIPS ======
  const renderTagChips = () => {
    if (idxTags < 0) return;

    rows.forEach(r => {
      const cell = r.cells[idxTags];
      if (!cell) return;

      if (cell.querySelector(".chip")) return;

      const raw = (cell.innerText || "").trim();
      if (!raw) return;

      const tags = raw
        .split(/[,;|]\s*|\n+/)
        .map(t => t.trim())
        .filter(Boolean);

      if (!tags.length) return;

      cell.innerHTML = "";
      const wrap = document.createElement("div");
      wrap.className = "chips";

      tags.forEach(t => {
        const chip = document.createElement("span");
        chip.className = "chip";
        chip.textContent = t;
        chip.dataset.tag = t.toLowerCase();
        wrap.appendChild(chip);
      });

      cell.appendChild(wrap);
    });
  };

  const rowTags = (row) => {
    if (idxTags < 0) return [];
    const cell = row.cells[idxTags];
    if (!cell) return [];

    const chips = cell.querySelectorAll(".chip");
    if (chips.length) return Array.from(chips).map(c => c.dataset.tag);

    return (cell.innerText || "")
      .split(/[,;|]\s*|\n+/)
      .map(t => t.trim().toLowerCase())
      .filter(Boolean);
  };

  const highlightActiveChips = () => {
    if (idxTags < 0 || !tagsFilter) return;
    const active = new Set(parseTagList(tagsFilter.value));

    rows.forEach(r => {
      const cell = r.cells[idxTags];
      if (!cell) return;
      cell.querySelectorAll(".chip").forEach(chip => {
        chip.classList.toggle("active", active.has(chip.dataset.tag));
      });
    });
  };

  const toggleTagInFilter = (tag) => {
    if (!tagsFilter) return;
    const current = parseTagList(tagsFilter.value);
    const i = current.indexOf(tag);
    if (i >= 0) current.splice(i, 1);
    else current.push(tag);
    tagsFilter.value = current.join(", ");
    applyFilters();
    highlightActiveChips();
  };

  // ====== FILTERING ======
  const applyFilters = () => {
    const q = (searchBox?.value || "").trim().toLowerCase();
    const cat = (categoryFilter?.value || "").trim();
    const wantTags = parseTagList(tagsFilter?.value || "");

    let visible = 0;

    rows.forEach(r => {
      const text = (r.innerText || "").toLowerCase();
      const matchesSearch = !q || text.includes(q);

      const matchesCat =
        !cat ||
        (idxCategory >= 0 && (r.cells[idxCategory]?.innerText || "").trim() === cat);

      const tags = rowTags(r);
      let matchesTags = true;

      if (wantTags.length) {
        if (TAG_MATCH_MODE === "OR") {
          matchesTags = wantTags.some(t => tags.includes(t));
        } else {
          matchesTags = wantTags.every(t => tags.includes(t));
        }
      }

      const show = matchesSearch && matchesCat && matchesTags;
      r.style.display = show ? "" : "none";
      if (show) visible++;
    });

    if (resultCount) resultCount.textContent = `${visible} / ${rows.length} rows`;
  };

  // ====== SORTING ======
  const makeSortable = () => {
    headerCells.forEach((th, colIndex) => {
      th.classList.add("sortable");

      th.addEventListener("click", () => {
        const current = th.getAttribute("data-sort");
        const nextDir = current === "asc" ? "desc" : "asc";

        headerCells.forEach(h => h.removeAttribute("data-sort"));
        th.setAttribute("data-sort", nextDir);

        const sorted = Array.from(rows).sort((a, b) => {
          const av = (a.cells[colIndex]?.innerText || "").trim();
          const bv = (b.cells[colIndex]?.innerText || "").trim();

          const cmp = av.localeCompare(bv, undefined, { numeric: true, sensitivity: "base" });
          if (cmp !== 0) return cmp;

          return (parseInt(a.dataset._origIndex, 10) - parseInt(b.dataset._origIndex, 10));
        });

        if (nextDir === "desc") sorted.reverse();

        sorted.forEach(r => tbody.appendChild(r));
        highlightActiveChips();
      });
    });
  };

  // ====== EVENTS ======
  searchBox && searchBox.addEventListener("input", () => { applyFilters(); highlightActiveChips(); });
  categoryFilter && categoryFilter.addEventListener("change", () => { applyFilters(); highlightActiveChips(); });
  tagsFilter && tagsFilter.addEventListener("input", () => { applyFilters(); highlightActiveChips(); });

  clearBtn && clearBtn.addEventListener("click", () => {
    if (searchBox) searchBox.value = "";
    if (categoryFilter) categoryFilter.value = "";
    if (tagsFilter) tagsFilter.value = "";
    applyFilters();
    highlightActiveChips();
  });

  table.addEventListener("click", (e) => {
    const chip = e.target.closest(".chip");
    if (!chip) return;
    toggleTagInFilter(chip.dataset.tag);
  });

  // ====== INIT ======
  populateCategories();
  renderTagChips();
  makeSortable();
  applyFilters();
  highlightActiveChips();
})();
(() => {
  document.addEventListener("DOMContentLoaded", () => {
    buildWorksCited().catch(() => {});
  });

  async function buildWorksCited() {
    const worksSection = document.querySelector("#works-cited");
    const output = document.querySelector("#works-cited-auto");
    if (!worksSection || !output) return;

    const scopeSelector = worksSection.getAttribute("data-works-cited-scope") || "";
    const sourcePage = worksSection.getAttribute("data-works-cited-source-page") || "";
    const endpoint = worksSection.getAttribute("data-works-cited-endpoint") || "/works_cited_meta.php";

    // 1) Find scope on *this* page first
    let scope =
      (scopeSelector && document.querySelector(scopeSelector)) ||
      document.querySelector("#connectionsTable") ||
      document.querySelector("table");

    // 2) If no scope here, fetch the table page (same-origin) and parse links from it
    let baseForRelativeUrls = window.location.href;
    let docToScan = document;

    if (!scope && sourcePage) {
      const absSource = new URL(sourcePage, window.location.origin).toString();
      const html = await fetch(absSource, { credentials: "same-origin" }).then(r => r.text());
      docToScan = new DOMParser().parseFromString(html, "text/html");
      baseForRelativeUrls = absSource;

      scope =
        (scopeSelector && docToScan.querySelector(scopeSelector)) ||
        docToScan.querySelector("#connectionsTable") ||
        docToScan.querySelector("table");
    }

    if (!scope) return;

    // If we've previously resolved metadata, stamp it onto links *before* we scan,
    // so overrideAuthor/overrideDate can be picked up even when a source blocks requests.
    try {
      const cached = JSON.parse(localStorage.getItem("worksCitedMetaCache_v1") || "{}");
      const ts = Number(cached && cached._ts) || 0;
      const fresh = ts && (Date.now() - ts) < (30 * 24 * 3600 * 1000);
      const cachedItems = (fresh && cached && cached.items && typeof cached.items === "object") ? cached.items : {};
      applyApaOverridesToLinks(scope, baseForRelativeUrls, cachedItems);
    } catch {}

    // Collect unique citations from <a> tags
    const seen = new Map();

    const stripTrackingParams = (u) => {
      const tracking = new Set([
        "utm_source","utm_medium","utm_campaign","utm_term","utm_content",
        "fbclid","gclid","mc_cid","mc_eid"
      ]);
      [...u.searchParams.keys()].forEach((k) => {
        if (tracking.has(k.toLowerCase())) u.searchParams.delete(k);
      });
      u.hash = ""; // drop fragments
      return u;
    };

    scope.querySelectorAll("a[href]").forEach((a) => {
      const rawHref = (a.getAttribute("href") || "").trim();
      if (!rawHref) return;
      if (rawHref.startsWith("#") || rawHref.toLowerCase().startsWith("javascript:")) return;
      if (rawHref.toLowerCase().startsWith("mailto:")) return;

      let url;
      try {
        url = new URL(rawHref, baseForRelativeUrls);
        stripTrackingParams(url);
      } catch {
        return;
      }

      const href = url.toString();

      const overrideTitle = (a.getAttribute("data-apa-title") || "").trim();
      const overrideAuthor = (a.getAttribute("data-apa-author") || "").trim();
      const overrideDate = (a.getAttribute("data-apa-date") || "").trim();

      const linkText = (a.textContent || "").replace(/\s+/g, " ").trim();
      const titleGuess = overrideTitle || linkText || href;

      if (!seen.has(href)) {
        seen.set(href, {
          href,
          titleGuess,
          overrideAuthor,
          overrideDate,
        });
      }
    });

    const urls = [...seen.keys()];
    if (urls.length === 0) return;

    // Ask PHP endpoint to fetch OG/JSON-LD metadata cross-origin
    let metaByUrl = {};

    // Lightweight localStorage cache so we can re-use resolved author/title/date
    // (helps when exporting/printing or when endpoints rate-limit).
    const cacheKey = "worksCitedMetaCache_v1";
    const cacheTtlMs = 30 * 24 * 3600 * 1000;

    let cachedItems = {};
    try {
      const cached = JSON.parse(localStorage.getItem(cacheKey) || "{}");
      const ts = Number(cached && cached._ts) || 0;
      const fresh = ts && (Date.now() - ts) < cacheTtlMs;
      cachedItems = (fresh && cached && cached.items && typeof cached.items === "object") ? cached.items : {};
    } catch {
      cachedItems = {};
    }

    const missingUrls = urls.filter((u) => !cachedItems[u]);

    if (missingUrls.length) {
      try {
        const resp = await fetch(endpoint, {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ urls: missingUrls })
        });
        const json = await resp.json();
        const fetched = (json && json.items) ? json.items : {};
        metaByUrl = { ...cachedItems, ...fetched };
      } catch {
        metaByUrl = { ...cachedItems };
      }

      try {
        localStorage.setItem(cacheKey, JSON.stringify({ _ts: Date.now(), items: metaByUrl }));
      } catch {}
    } else {
      metaByUrl = { ...cachedItems };
    }

    // Populate data-apa-* attributes directly on the table links (so future runs can
    // use stable values even if a source is blocked/paywalled later).
    applyApaOverridesToLinks(scope, baseForRelativeUrls, metaByUrl);

    // Convert to renderable items
    const items = urls.map((u) => {
      const base = seen.get(u);
      const meta = metaByUrl[u] || {};

      const author = base.overrideAuthor || meta.author || meta.site || cleanSiteName(u);
      const title = meta.title || base.titleGuess || u;
      const dateIso = base.overrideDate || meta.date || "";
      const dateApa = formatApaDate(dateIso);

      const site = meta.site || cleanSiteName(u);

      return { author, dateApa, title, site, href: u };
    });

    // Sort roughly APA-ish
    items.sort((x, y) => {
      const a = x.author.localeCompare(y.author);
      if (a !== 0) return a;
      const d = (x.dateApa || "").localeCompare(y.dateApa || "");
      if (d !== 0) return d;
      return x.title.localeCompare(y.title);
    });

    // Render
    const frag = document.createDocumentFragment();
    items.forEach((c) => {
      const li = document.createElement("li");

      const orgAsAuthor = (c.author || "").toLowerCase() === (c.site || "").toLowerCase();

      li.innerHTML = orgAsAuthor
        ? `${escapeHtml(c.author)}. (${escapeHtml(c.dateApa)}). <em>${escapeHtml(c.title)}</em>. <a href="${escapeAttr(c.href)}" target="_blank" rel="noopener noreferrer">${escapeHtml(c.href)}</a>`
        : `${escapeHtml(c.author)}. (${escapeHtml(c.dateApa)}). <em>${escapeHtml(c.title)}</em>. ${escapeHtml(c.site)}. <a href="${escapeAttr(c.href)}" target="_blank" rel="noopener noreferrer">${escapeHtml(c.href)}</a>`;

      frag.appendChild(li);
    });

    output.replaceChildren(frag);
  }

  function applyApaOverridesToLinks(scope, baseForRelativeUrls, metaByUrl) {
    if (!scope || !metaByUrl) return;

    const stripTrackingParams = (u) => {
      const tracking = new Set([
        "utm_source","utm_medium","utm_campaign","utm_term","utm_content",
        "fbclid","gclid","mc_cid","mc_eid"
      ]);
      [...u.searchParams.keys()].forEach((k) => {
        if (tracking.has(k.toLowerCase())) u.searchParams.delete(k);
      });
      u.hash = ""; // drop fragments
      return u;
    };

    const normalize = (rawHref) => {
      if (!rawHref) return "";
      if (rawHref.startsWith("#") || rawHref.toLowerCase().startsWith("javascript:")) return "";
      if (rawHref.toLowerCase().startsWith("mailto:")) return "";
      try {
        const url = new URL(rawHref, baseForRelativeUrls);
        stripTrackingParams(url);
        return url.toString();
      } catch {
        return "";
      }
    };

    scope.querySelectorAll("a[href]").forEach((a) => {
      const href = normalize((a.getAttribute("href") || "").trim());
      if (!href) return;

      const meta = metaByUrl[href];
      if (!meta || typeof meta !== "object") return;

      // Only set attributes that are currently missing/blank.
      const hasTitle = ((a.getAttribute("data-apa-title") || "").trim().length > 0);
      const hasAuthor = ((a.getAttribute("data-apa-author") || "").trim().length > 0);
      const hasDate = ((a.getAttribute("data-apa-date") || "").trim().length > 0);

      if (!hasTitle && meta.title) a.setAttribute("data-apa-title", String(meta.title));
      if (!hasAuthor && meta.author) a.setAttribute("data-apa-author", String(meta.author));
      if (!hasDate && meta.date) a.setAttribute("data-apa-date", String(meta.date));
    });
  }

  function cleanSiteName(href) {
    try {
      const u = new URL(href);
      return u.hostname.replace(/^www\./i, "").trim();
    } catch {
      return "";
    }
  }

  function formatApaDate(dateVal) {
    // Accept ISO like 2024-11-12 or 2024-11-12T...
    if (!dateVal) return "n.d.";
    const iso = String(dateVal).trim();
    const m = iso.match(/^(\d{4})-(\d{2})-(\d{2})/);
    if (!m) {
      const y = iso.match(/^(\d{4})/);
      return y ? y[1] : "n.d.";
    }
    const y = +m[1], mo = +m[2], d = +m[3];
    const months = [
      "January","February","March","April","May","June",
      "July","August","September","October","November","December"
    ];
    return `${y}, ${months[mo - 1]} ${d}`;
  }

  function escapeHtml(str) {
    return String(str)
      .replaceAll("&","&amp;")
      .replaceAll("<","&lt;")
      .replaceAll(">","&gt;")
      .replaceAll('"',"&quot;")
      .replaceAll("'","&#039;");
  }
  function escapeAttr(str) {
    return escapeHtml(str);
  }
})();
</script>




</html>