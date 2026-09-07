<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<title>People table: Trump connections &amp; Russia connections</title>
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
<h1>"Russia Hoax": biographical summary, Trump connections, Russia connections</h1>
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
<th>Connection(s) to Russia</th>
<th>Sources / evidence links</th>
</tr>
</thead>
<tbody>
<tr>
<td>Seimon (Semyon) Kislin</td>
<td>U.S. political operatives / lobbyists / consultants</td>
<td>Role: U.S. operative</td>
<td>Soviet‑born U.S. businessman and political fundraiser associated with Trans Commodities; active in New York City Republican politics.</td>
<td>Reporting describes business interactions in NYC real‑estate orbit. Sold Donald Trump televisions for hist hotels. First interaction with Trump and organized crimes</td>
<td>Born in the USSR; investigative reporting has examined alleged links to Russian organized crime figures&mdash;Kislin has denied wrongdoing.</td>
<td><a href="https://publicintegrity.org/politics/russian-revelations/alleged-russian-mobsters-courted-giuliani-trump/">Center for Public Integrity profile</a> | <a href="https://www.bloomberg.com/news/articles/2018-07-18/trump-soho-scrutiny-turns-to-new-york-city-s-russians">Bloomberg reporting (Trump SoHo / NY Russians)</a> | <a href="https://www.theguardian.com/world/2018/may/02/mueller-giuliani-reportedly-met-ukrainian-oligarch-hoping-to-abandon-trump">The Guardian mention / context</a></td>
</tr>
<tr>
<td>Ivan Gromakov</td>
<td>Russian intelligence / security services</td>
<td>Role: Russian intel/security</td>
<td>Gromakov invited Trump to Moscow to meet the KGB goal of turning more US businessman into assets</td>
<td>No direct, well‑sourced public link to Donald Trump identified in the sources used.</td>
<td>Reportedly associated with Soviet intelligence in some accounts;</td>
<td><a href="https://newrepublic.com/article/143586/trumps-1987-trip-moscow-not-innocuous">The New Republic (Trump 1987 trip context)</a></td>
</tr>
<tr>
<td>Yuri Dubinin</td>
<td>Russian state officials &amp; diplomats</td>
<td>Role: Russian state</td>
<td>Soviet diplomat; served as Soviet ambassador to the United States (1986&ndash;1990).</td>
<td>Accounts of Trump&rsquo;s 1987 Moscow trip describe Soviet diplomatic involvement during that period (flagged as historical context).</td>
<td>Senior Soviet diplomat during the late Cold War.</td>
<td><a href="https://newrepublic.com/article/143586/trumps-1987-trip-moscow-not-innocuous">The New Republic (1987 trip context)</a></td>
</tr>
<tr>
<td>Natalia Dubinina</td>
<td>Russian intelligence / security services</td>
<td>Role: Russian intel/security</td>
<td>A name reported in some accounts related to Soviet‑era diplomatic/intelligence context; limited standalone, reliable public biography in mainstream English sources.</td>
<td>Mentioned in some journalistic narratives about Trump&rsquo;s 1987 Moscow trip; not a widely documented public figure in U.S. politics.</td>
<td>Contextualized in Soviet/Russian state structures in the reporting cited; independent corroboration is limited.</td>
<td><a href="https://newrepublic.com/article/143586/trumps-1987-trip-moscow-not-innocuous">The New Republic (mentions Dubinin family)</a></td>
</tr>
<tr>
<td>David Bogatin</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>Soviet‑born U.S. businessman; convicted in the 1980s gasoline tax fraud/bootlegging schemes per widely reported accounts.</td>
<td>Reporting says he purchased multiple units in Trump Tower in the 1980s showing up with a suticase with millions in cash. Known as the "Nerd Criminal" Bogatin was deeply involved in the Gasoline scandal.</td>
<td>Born in USSR; commonly discussed in reporting on Russian‑linked organized crime in NYC during that era.</td>
<td><a href="https://www.vox.com/2018/9/12/17764132/trump-russia-fbi-new-york-times-craig-unger">Vox explainer (Bogatin/NYC context)</a></td>
</tr>
<tr>
<td>Vyacheslav Ivankov ("Yaponchik")</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>Russian organized‑crime figure ("thief‑in‑law") widely described in law‑enforcement and historical reporting; murdered in 2009.</td>
<td>Lived in Trump Towers when arrested. He had multiple contact numbers for Donald Trump when arrested</td>
<td>Prominent Russian mafia figure.</td>
<td><a href="https://publicintegrity.org/politics/russian-revelations/alleged-russian-mobsters-courted-giuliani-trump/">Center for Public Integrity (network context)</a></td>
</tr>
<tr>
<td>Semyon Mogilevich</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>Ukrainian‑born (Soviet‑era) organized‑crime boss; long described as a major figure in transnational organized crime.</td>
<td>No direct, well‑documented Trump business link identified in the sources used; included for Russia/organized‑crime context in NYC-era reporting. Trump is alleged to say in Mogilevich's hotel on his second Moscow visit</td>
<td>Wanted/linked in law‑enforcement reporting; associated with post‑Soviet organized crime.</td>
<td><a href="https://www.fbi.gov/wanted/topten/semyon-mogilevich">FBI: Semyon Mogilevich</a></td>
</tr>
<tr>
<td>Bernard Lown</td>
<td>Historical / misc.</td>
<td>Role: Historical/misc</td>
<td>Lithuanian‑American cardiologist; developed the DC defibrillator; co‑founded International Physicians for the Prevention of Nuclear War (Nobel Peace Prize recipient organization).</td>
<td>No known direct Trump connection identified</td>
<td>Peace/anti‑nuclear activism was centered on U.S.&ndash;Soviet nuclear risk (historical context, not a personal business tie).</td>
<td><a href="https://www.nobelprize.org/prizes/peace/1985/physicians/acceptance-speech/">Nobel Prize: IPPNW acceptance speech (1985)</a> | <a href="https://www.ippnw.org/about/ippnw-a-brief-history/1985-nobel-peace-prize">IPPNW: Nobel Peace Prize (1985)</a></td>
</tr>
<tr>
<td>Armand Hammer</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business</td>
<td>American businessman and philanthropist; led Occidental Petroleum; known for early trade and long-running business engagement with the Soviet Union.</td>
<td>No known direct Trump connection identified.</td>
<td>Conducted extensive business/trade with the USSR; historically associated with U.S.&ndash;Soviet commercial relations.</td>
<td><a href="https://www.britannica.com/money/Armand-Hammer">Britannica: Armand Hammer</a></td>
</tr>
<tr>
<td>Ronald Knapp</td>
<td>Other foreign state officials</td>
<td>Role: Foreign state official</td>
<td>American entertainer/impersonator noted in 1980s coverage for a resemblance to Mikhail Gorbachev (popular culture reference).</td>
<td>Was able to fool Trump into thinking he was the real Gorbachev.</td>
<td>Association is indirect (Gorbachev impersonation / Cold War pop-culture).</td>
<td><a href="https://www.latimes.com/archives/la-xpm-1987-12-04-me-17737-story.html">Los Angeles Times (1987 profile)</a></td>
</tr>
<tr>
<td>Roy Cohn</td>
<td>Trump family &amp; Trump Organization</td>
<td>Role: Trump Org/family</td>
<td>American attorney and political fixer; mentor and lawyer to Donald Trump in the 1970s&ndash;1980s.</td>
<td>Mentored and represented Trump; widely described as a formative influence. (Flag: major direct Trump mentor.)</td>
<td>No specific Russia tie identified in the sources used.</td>
<td><a href="https://www.theguardian.com/us-news/2016/apr/20/roy-cohn-donald-trump-joseph-mccarthy-rosenberg-trial">The Guardian on Cohn&ndash;Trump relationship</a></td>
</tr>
<tr>
<td>Roger Stone</td>
<td>U.S. political operatives / lobbyists / consultants</td>
<td>Role: U.S. operative; Mueller / Senate Intel</td>
<td>American political consultant and longtime Republican operative.</td>
<td>Longtime Trump associate; advised/advocated for Trump over decades; convicted in 2019 on charges arising from the Russia investigation (later pardoned).</td>
<td>Central figure in investigations about contacts involving WikiLeaks/GRU hack-and-leak pipeline (flag: Mueller/Senate report context).</td>
<td><a href="https://www.justice.gov/storage/report_volume1.pdf">DOJ: Mueller Report (Vol. I PDF)</a> | <a href="https://www.pbs.org/newshour/politics/u-s-government-says-roger-stone-undermined-russia-inquiry">PBS (Stone case overview)</a></td>
</tr>
<tr>
<td>Paul Manafort</td>
<td>Trump campaign / administration</td>
<td>Role: Trump-world official; Trump Tower meeting (6/9/2016); Mueller / Senate Intel</td>
<td>American political consultant and lobbyist; served as Trump&rsquo;s 2016 campaign chairman.</td>
<td>Campaign chairman (2016). FLAG: Appears in Trump Tower meeting documentation (June 9, 2016).</td>
<td>Longtime work for pro‑Russia political interests in Ukraine; described in the Senate Intelligence Committee report as working closely with Konstantin Kilimnik (flag: Senate Vol. 5).</td>
<td><a href="https://www.intelligence.senate.gov/wp-content/uploads/2024/08/sites-default-files-documents-report-volume5.pdf">U.S. Senate Intel Report, Vol. 5 (PDF)</a> | <a href="https://www.justice.gov/storage/report_volume1.pdf">DOJ: Mueller Report (Vol. I PDF)</a></td>
</tr>
<tr>
<td>Boris Birshtein</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business</td>
<td>Soviet‑born businessman associated with post‑Soviet commerce and the Seabeco group in reporting and biographies.</td>
<td>No direct, well‑sourced Trump connection identified in the sources used.</td>
<td>Born in the USSR; business career linked to post‑Soviet markets in public reporting.</td>
<td><a href="https://tbcarchives.org/wp-content/uploads/FSB-and-OC-Swiss-intel-report.pdf">Swiss intel report PDF (archived)</a> | <a href="https://law.yale.edu/sites/default/files/documents/pdf/motion_to_intervene.pdf">Yale Law PDF referencing FBI/FT reporting</a></td>
</tr>
<tr>
<td>Artem Klyushin</td>
<td>Foreign influence / social media influence operative</td>
<td>Role: Agalarov employee / social media; Senate counterintelligence concern; Miss Universe Moscow (2013)</td>
<td>Russian social-media specialist described in a Lawfare summary of the U.S. Senate Select Committee on Intelligence&rsquo;s Russia investigation as a &ldquo;Kremlin-linked bot developer&rdquo; who supported Russian influence operations on social media, including pro-Kremlin propaganda efforts in Ukraine in 2014.</td>
<td>The Senate report (as summarized by Lawfare) noted Klyushin and his then-wife Yulya Klyushina were Agalarov employees who interacted with Donald Trump during the 2013 Miss Universe trip to Moscow; the Committee said it had little insight into the nature of those interactions.</td>
<td>Senate investigators (per Lawfare&rsquo;s summary) said they had &ldquo;significant concerns&rdquo; about Klyushin and assessed he provided social-media influence expertise to the Kremlin and was connected to other Kremlin-linked online influencers (including Konstantin Rykov).</td>
<td><a href="https://www.lawfaremedia.org/article/collusion-reading-diary-what-did-senate-intelligence-committee-find" target="_blank" rel="noopener noreferrer" data-apa-author="Carney, Todd; Fry, S.; Jurecic, Quinta; Schulz, Jacob; Sewell, Tia; Taylor, Margaret; Wittes, Benjamin" data-apa-date="2020, August 21" data-apa-title="A Collusion Reading Diary: What Did the Senate Intelligence Committee Find?">Lawfare: Collusion Reading Diary (Aug 21, 2020)</a> | <a href="https://www.intelligence.senate.gov/2020/08/18/press-senate-intel-releases-volume-5-bipartisan-russia-report/" target="_blank" rel="noopener noreferrer" data-apa-author="U.S. Senate Select Committee on Intelligence" data-apa-date="2020, August 18" data-apa-title="Senate Intel Releases Volume 5 of Bipartisan Russia Report">SSCI: Volume 5 press release (Aug 18, 2020)</a> | <a href="https://www.dailydot.com/viral-politics/artem-klyushin-russian-x-account-trump-cabinet/" target="_blank" rel="noopener noreferrer" data-apa-author="Huggins, Katherine" data-apa-date="2024, November 19" data-apa-title="Open puppetering: Russian X account tweeting policy suggestions at Musk is causing a full-on freakout">Daily Dot (Nov 19, 2024)</a></td>
</tr>
tr>
  <td>Konstantin Rykov</td>
  <td>Foreign influence / propaganda figure</td>
  <td>Role: Former State Duma deputy; pro-Kremlin blogger/media entrepreneur; online influence networks</td>
  <td>
    Russian internet and media figure and former State Duma deputy who has been described in reporting as an early architect of pro-Kremlin online media and messaging, including work connected to state-linked media and Kremlin-aligned political circles.
  </td>
  <td>
    No widely documented direct relationship to Donald Trump. The U.S. Senate Intelligence Committee&rsquo;s Russia investigation devoted a subsection to &ldquo;Artem Klyushin, Konstantin Rykov, and Associates,&rdquo; situating Rykov in the same influence/online ecosystem discussed alongside Agalarov-linked figures who interacted with Trump during the 2013 Miss Universe trip to Moscow (per Lawfare&rsquo;s summary of Volume 5).
  </td>
  <td>
    Described by multiple outlets as a pro-Kremlin online influencer and former United Russia politician, with reporting that places him in Kremlin-adjacent media and political networks.
  </td>
  <td>
    <a
      href="https://www.lawfaremedia.org/article/collusion-reading-diary-what-did-senate-intelligence-committee-find"
      target="_blank" rel="noopener noreferrer"
      data-apa-author="Carney, Todd; Fry, S.; Jurecic, Quinta; Schulz, Jacob; Sewell, Tia; Taylor, Margaret; Wittes, Benjamin"
      data-apa-date="2020, August 21"
      data-apa-title="A Collusion Reading Diary: What Did the Senate Intelligence Committee Find?"
    >Lawfare summary of SSCI Volume 5 (Aug 21, 2020)</a>
    |
    <a
      href="https://www.intelligence.senate.gov/2020/08/18/press-senate-intel-releases-volume-5-bipartisan-russia-report/"
      target="_blank" rel="noopener noreferrer"
      data-apa-author="U.S. Senate Select Committee on Intelligence"
      data-apa-date="2020, August 18"
      data-apa-title="Senate Intel Releases Volume 5 of Bipartisan Russia Report"
    >SSCI press release (Aug 18, 2020)</a>
    |
    <a
      href="https://theworld.org/stories/2018/05/04/man-who-taught-kremlin-how-win-internet"
      target="_blank" rel="noopener noreferrer"
      data-apa-author="Schwartz, Molly"
      data-apa-date="2018, May 4"
      data-apa-title="The man who taught the Kremlin how to win the internet"
    >The World (PRX): profile of Rykov (May 4, 2018)</a>
  </td>
</tr>
<tr>
<td>Mikhail Chernoy (Michael Cherney)</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business</td>
<td>Israeli entrepreneur; known in reporting around the Russian aluminum industry in the 1990s.</td>
<td>No direct, well‑sourced Trump connection identified in the sources used.</td>
<td>Business dealings tied to post‑Soviet Russian industry; commonly referenced in 1990s Russia business reporting.</td>
<td><a href="https://www.theguardian.com/business/2012/mar/14/oleg-deripaska-michael-chernoy-settlement">The Guardian: Deripaska&ndash;Cherney settlement (2012)</a> | <a href="https://www.theguardian.com/business/2007/oct/29/russia.internationalcrime">The Guardian: Cherney oligarch dispute coverage (2007)</a></td>
</tr>
<tr>
<td>Vladimir Kryuchkov</td>
<td>Russian intelligence / security services</td>
<td>Role: Russian intel/security</td>
<td>Soviet politician; chaired the KGB (1988&ndash;1991) and was a leader of the 1991 August coup attempt.</td>
<td>No known direct Trump connection identified in the sources used.</td>
<td>Senior KGB official (USSR).</td>
<td><a href="https://www.theguardian.com/news/2007/nov/30/guardianobituaries.russia">The Guardian obituary: Vladimir Kryuchkov (2007)</a></td>
</tr>
<tr>
<td>Sergei Mikhailov ("Mikhas")</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>Russian organized‑crime figure described as a leader of the Solntsevskaya Bratva.</td>
<td>No direct, well‑sourced Trump connection identified in the sources used.</td>
<td>Russian mafia leadership per biographies and reporting.</td>
<td><a href="https://irp.fas.org/news/1998/11/981130-roc.htm">FAS/USIA report on Swiss case (1998)</a> | <a href="https://theins.ru/en/corruption/149860">The Insider: Solntsevskaya gang ties (2019)</a></td>
</tr>
<tr>
<td>Alexander Shnaider</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate</td>
<td>Russian‑Canadian businessman; co‑developer associated with the Trump International Hotel &amp; Tower Toronto project.</td>
<td>Business partner via Trump-branded Toronto tower (licensing/branding relationship).</td>
<td>Reporting has linked financing/transactions in the Toronto project to Russian institutions (e.g., VEB in some coverage).</td>
<td><a href="https://www.axios.com/2017/12/15/funding-for-trump-hotel-traces-back-to-russian-bank-1513302381">Axios summary (WSJ-sourced)</a></td>
</tr>
<tr>
<td>Wilbur Ross</td>
<td>Trump campaign / administration</td>
<td>Role: Trump-world official</td>
<td>American investor; served as U.S. Secretary of Commerce (2017&ndash;2021).</td>
<td>Cabinet member in Trump&rsquo;s first term (Commerce Secretary).</td>
<td>ICIJ reporting (Paradise Papers) described business ties involving a shipping firm (Navigator) that did business with Russia-linked entities (as reported). Ross also had deep connections to Bank of Cyprus and money laundering efforts/</td>
<td><a href="https://www.icij.org/investigations/paradise-papers/donald-trumps-commerce-secretary-wilbur-ross-and-his-russian-business-ties/">ICIJ: Paradise Papers (Ross/Russia ties)</a> | <a href="https://www.pbs.org/newshour/show/what-we-learned-about-wilbur-ross-financial-ties-from-the-paradise-papers">PBS NewsHour segment</a></td>
</tr>
<tr>
<td>Dmitry Rybolovlev</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate</td>
<td>Russian billionaire and businessman (fertilizer/chemicals; investment activity).</td>
<td>Bought Trump&rsquo;s Palm Beach property (Maison de L&rsquo;Amiti&eacute;) in 2008 for $95M (real‑estate transaction).</td>
<td>Russian citizen and oligarch; business career in Russia.</td>
<td><a href="https://www.palmbeachpost.com/story/business/real-estate/2019/02/17/trump-in-palm-beach-did-russian-mansion-buyer-make-money/5934528007/">Palm Beach Post reporting</a></td>
</tr>
<tr>
<td>Felix Sater</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate; Trump Tower Moscow; Bayrock / Trump SoHo</td>
<td>American businessman; former managing director at Bayrock Group; known for real‑estate and prior criminal case (stock-related) in the 1990s.</td>
<td>Bayrock executive involved in Trump-branded projects; associated with efforts around a proposed Trump Tower Moscow project (2010s) in reporting.</td>
<td>Born in USSR; Bayrock/Trump Moscow efforts involved Russian contacts/real estate proposals (as described in public reporting).</td>
<td><a href="https://law.yale.edu/sites/default/files/documents/pdf/motion_to_intervene.pdf">Yale Law PDF (Oberlander v. Sater context)</a> | <a href="https://www.nycourts.gov/courts/ad2/Handdowns/2019/Decisions/D60352.pdf">NY Courts PDF (Oberlander disciplinary decision)</a> | <a href="https://www.courtlistener.com/docket/4318656/united-states-v-sater/">CourtListener docket: U.S. v. Sater</a></td>
</tr>
<tr>
<td>Tevfik Arif</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate; Bayrock / Trump SoHo</td>
<td>Kazakh-Turkish businessman; founder of Bayrock Group.</td>
<td>Bayrock partnered on Trump SoHo / Trump-branded projects (branding/licensing relationship).</td>
<td>Born in Kazakhstan (Soviet-era); Bayrock operated in networks tied to post‑Soviet business circles in reporting.</td>
<td><a href="https://nymag.com/news/features/45591/">New York Magazine: Trump SoHo background (2008)</a> | <a href="https://www.vanityfair.com/news/2017/08/why-robert-mueller-has-trump-soho-in-his-sights">Vanity Fair: Trump SoHo / Bayrock (2017)</a></td>
</tr>
<tr>
<td>Tamir Sapir</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate; Bayrock / Trump SoHo</td>
<td>Soviet‑born U.S. real‑estate investor and founder of the Sapir Organization.</td>
<td>Financier/development partner in the Trump SoHo project (branding project linkage).</td>
<td>Born in the Soviet Union; business history includes Soviet/post‑Soviet connections in biographical accounts.</td>
<td><a href="https://therealdeal.com/new-york/2014/09/29/sapir-organizations-tamir-sapir-dies/">The Real Deal: Tamir Sapir obituary (2014)</a> | <a href="https://nymag.com/news/features/45591/">New York Magazine: Trump SoHo background (2008)</a></td>
</tr>
<tr>
<td>Pavel Uglanov</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate</td>
<td>Russian-born businessman (as described in real-estate reporting).</td>
<td>Reported buyer of a Trump-branded property unit in NYC per Bloomberg reporting (real-estate linkage).</td>
<td>Russian-born; reported in context of Russian-linked NYC real estate purchases.</td>
<td><a href="https://www.bloomberg.com/news/articles/2018-07-18/trump-soho-scrutiny-turns-to-new-york-city-s-russians">Bloomberg: Trump SoHo / NY Russians</a></td>
</tr>
<tr>
<td>Vadim Finkelstein</td>
<td>Foreign influence intermediaries</td>
<td>Role: Foreign intermediary</td>
<td>Russian mixed martial arts promoter; founded Red Devil Sport Club and was involved with M-1 Global.</td>
<td>Tried to establish an MMA reality show in Russia with Trump.</td>
<td>Russia-based sports promoter and manager.</td>
<td><a href="https://m-1global.com/en/pages/about.html">M‑1 Global: About (Vadim Finkelstein)</a></td>
</tr>
<tr>
<td>Nursultan Nazarbayev</td>
<td>Other foreign state officials</td>
<td>Role: Foreign state official</td>
<td>Kazakh politician; first President of Kazakhstan (1990&ndash;2019).</td>
<td>Deeply involved in Trump's effort to Build Trump Towers Baku</td>
<td>Led Kazakhstan, a close regional partner of Russia; post‑Soviet political context.</td>
<td><a href="https://www.britannica.com/biography/Nursultan-Nazarbayev">Britannica: Nursultan Nazarbayev</a></td>
</tr>
<tr>
<td>Vitaly Churkin</td>
<td>Russian state officials &amp; diplomats</td>
<td>Role: Russian state</td>
<td>Russian diplomat; served as Russia&rsquo;s permanent representative to the UN (2006&ndash;2017).</td>
<td>Mentioned in some accounts related to the period of Trump&rsquo;s 1987 Moscow outreach (historical reporting).</td>
<td>Senior Russian diplomat.</td>
<td><a href="https://newrepublic.com/article/143586/trumps-1987-trip-moscow-not-innocuous">The New Republic (1987 trip context)</a></td>
</tr>
<tr>
<td>Aras Agalarov</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate; Trump Tower meeting (6/9/2016); Miss Universe Moscow</td>
<td>Russian-Azerbaijani billionaire; real-estate developer (Crocus Group).</td>
<td>Hosted Trump for Miss Universe 2013 in Moscow (business/branding context). Indirectly connected to 2016 Trump Tower meeting via his family/business circle. FLAG: Trump Tower meeting (indirect via Agalarov-linked outreach).</td>
<td>Russia-based billionaire with major business in Russia.</td>
<td><a href="https://www.theguardian.com/us-news/2017/jun/13/aras-agalarov-rob-goldstone-natalia-veselnitskaya-donald-trump-russia">The Guardian: Agalarov/Goldstone/Trump Tower meeting context (2017)</a> | <a href="https://time.com/4855690/donald-trump-jr-emails-russian-lawyer/">Time: context on Trump Tower meeting participants (2017)</a></td>
</tr>
<tr>
<td>Sergei Millian</td>
<td>Foreign influence intermediaries</td>
<td>Role: Foreign intermediary</td>
<td>Belarus-born American businessman; associated with the Russian-American Chamber of Commerce in some reporting; linked in media to the Steele dossier sourcing claims (disputed).</td>
<td>Publicly supported Trump; discussed in dossier-related reporting rather than formal campaign leadership.</td>
<td>Belarus/Russia-linked diaspora business networks; dossier-related allegations are disputed/denied.</td>
<td><a href="https://abcnews.go.com/Politics/us-russian-businessman-source-key-trump-dossier-claims/story?id=45019603">ABC News: Millian dossier-source reporting (2017)</a> | <a href="https://www.washingtonpost.com/politics/who-is-sergei-millian/2017/03/29/379846a8-0f53-11e7-9d5a-a83e627dc120_story.html">Washington Post: Millian profile (2017)</a> | <a href="https://www.washingtonpost.com/lifestyle/style/media-washington-post-steele-dossier/2021/11/12/f7c9b770-43d5-11ec-a88e-2aa4632af69b_story.html">Washington Post: correction/removals re Millian (2021)</a></td>
</tr>
<tr>
  <td>Maria Butina</td>
  <td>Foreign influence intermediaries</td>
  <td>Role: Foreign intermediary; NRA outreach; DOJ case (2018–2019)</td>
  <td>
    Russian national charged in 2018 and later convicted in U.S. federal court for conspiring to act as an agent of the Russian Federation in the United States without required notification/registration. She was sentenced in 2019 to 18 months’ imprisonment and later removed from the U.S.
  </td>
  <td>
    Operated in U.S. conservative political circles during the 2016 election / early Trump era, cultivating relationships with political activists and organizations influential in Republican politics as described in federal court filings and DOJ press releases.
  </td>
  <td>
    U.S. prosecutors said she acted at the direction of a Russian official and sought to build influence relationships in the United States on behalf of the Russian Federation.
  </td>
  <td>
    <a
      href="https://www.justice.gov/usao-dc/pr/russian-national-charged-conspiracy-act-agent-russian-federal-within-united-states"
      target="_blank" rel="noopener noreferrer"
      data-apa-author="U.S. Attorney's Office, District of Columbia"
      data-apa-date="2018, July 16"
      data-apa-title="Russian National Charged in Conspiracy to Act as an Agent of the Russian Federation Within the United States"
    >DOJ (USAO-DC) — Charged (Jul 16, 2018)</a>
    |
    <a
      href="https://www.justice.gov/usao-dc/pr/russian-national-sentenced-18-months-prison-conspiring-act-agent-russian-federation"
      target="_blank" rel="noopener noreferrer"
      data-apa-author="U.S. Attorney's Office, District of Columbia"
      data-apa-date="2019, April 26"
      data-apa-title="Russian National Sentenced to 18 Months in Prison for Conspiring to Act as an Agent of the Russian Federation Within the United States"
    >DOJ (USAO-DC) — Sentenced (Apr 26, 2019)</a>
  </td>
</tr>
<tr>
  <td>Maria Katasonova</td>
  <td>Foreign influence intermediaries</td>
  <td>Role: Pro-Kremlin activist, social media influencer, far-right outreach</td>
  <td>
    Russian nationalist activist and media personality described in reporting and research as part of pro-Kremlin political and online influence circles, including work in and around Russia’s State Duma–linked ecosystem.
  </td>
  <td>
    Publicly supported Donald Trump and helped organize pro-Trump events in Moscow around the 2017 inauguration, including hosting an inauguration-viewing party near the Kremlin as described in contemporaneous reporting.
  </td>
  <td>
    Described in research and reporting as engaged in pro-Kremlin propaganda activity and linked to Russian nationalist political figures and online propaganda networks.
  </td>
  <td>
    <a
      href="https://www.theguardian.com/world/2017/jan/22/moscow-trump-inauguration-inspires-russian-new-hopes-era"
      target="_blank" rel="noopener noreferrer"
      data-apa-author="Walker, Shaun"
      data-apa-date="2017, January 21"
      data-apa-title="In Moscow, Trump inauguration inspires Russian hopes of new nationalist era"
    >The Guardian: Moscow inauguration party (Jan 2017)</a>
    |
    <a
      href="https://qz.com/941383/maria-katasonova-the-glamorous-young-russian-nationalist-leading-her-countrys-love-affair-with-trump-and-le-pen"
      target="_blank" rel="noopener noreferrer"
      data-apa-author="de Haldevang, Max"
      data-apa-date="2017, March 24"
      data-apa-title="A glamorous young Russian nationalist is leading her country’s love affair with Trump and Le Pen"
    >Quartz: profile and pro-Trump messaging (Mar 2017)</a>
    |
    <a
      href="https://www.rand.org/content/dam/rand/pubs/research_reports/RR2200/RR2237/RAND_RR2237.pdf"
      target="_blank" rel="noopener noreferrer"
      data-apa-author="Helmus, Todd C.; Bodine-Baron, Elizabeth; Radin, Andrew; Magnuson, Madeline; Mendelsohn, Joshua; Marcellino, William; Bega, Andriy; Winkelman, Zev"
      data-apa-date="2018"
      data-apa-title="Russian Social Media Influence: Understanding Russian Propaganda in Eastern Europe"
    >RAND: Russian propaganda case example (2018)</a>
    |
    <a
      href="https://war-sanctions.gur.gov.ua/en/stolen/persons/29056"
      target="_blank" rel="noopener noreferrer"
      data-apa-author="War &amp; Sanctions (GUR, Ukraine)"
      data-apa-date="n.d."
      data-apa-title="KATASONOVA Maria Volodymyrivna"
    >War &amp; Sanctions: profile entry</a>
  </td>
</tr>

<tr>
<td>Erik Prince</td>
<td>U.S. political operatives / lobbyists / consultants</td>
<td>Role: U.S. operative; Mueller / Senate Intel</td>
<td>American businessman; founder of Blackwater (private security).</td>
<td>Associated with Trump orbit (transition-era contacts); reported to have met Gulf emissaries offering election help (as described in press and investigations).</td>
<td>Reportedly met Kirill Dmitriev in Seychelles in January 2017; discussed in Mueller report and major press. (FLAG: Mueller report section).</td>
<td><a href="https://www.justice.gov/storage/report_volume1.pdf">DOJ: Mueller Report (Vol. I PDF)</a> | <a href="https://www.washingtonpost.com/world/national-security/blackwater-founder-held-secret-seychelles-meeting-to-establish-trump-putin-back-channel/2017/04/03/95908a08-1648-11e7-ada0-1489b735b3a3_story.html">Washington Post: Seychelles meeting</a></td>
</tr>
<tr>
<td>Michael Caputo</td>
<td>Trump campaign / administration</td>
<td>Role: Trump-world official</td>
<td>American political communications consultant; worked in Russia in the 1990s and later advised the Trump campaign.</td>
<td>Trump campaign communications adviser (NY Republican primary period).</td>
<td>Lived/worked in Russia; described in reporting as having done PR work for Gazprom-related entities and later contacted by a Russian national offering information (as reported).</td>
<td><a href="https://abcnews.go.com/Politics/trump-campaign-aide-meets-senate-panel-russia-probe/story?id=54852929">ABC News (Caputo and Senate inquiry)</a></td>
</tr>
<tr>
<td>Eric Trump</td>
<td>Trump family &amp; Trump Organization</td>
<td>Role: Trump Org/family</td>
<td>American businessman; executive in the Trump Organization; son of Donald Trump.</td>
<td>Direct family and executive role in Trump Organization.</td>
<td>No specific Russia connection asserted here beyond Trump Organization&rsquo;s broader Russia-related scrutiny in public reporting.</td>
<td><a href="https://www.trump.com/leadership/eric-trump-biography">Trump Org: Eric Trump official bio</a> | <a href="https://www.biography.com/history-culture/eric-trump">Biography.com: Eric Trump</a></td>
</tr>
<tr>
<td>Donald Trump Jr.</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate; Trump Tower meeting (6/9/2016)</td>
<td>American businessman; executive vice president of the Trump Organization; son of Donald Trump.</td>
<td>Direct family and executive role. FLAG: Appears in Trump Tower meeting documentation (June 9, 2016).</td>
<td>Central participant in June 9, 2016 Trump Tower meeting with Russian-linked visitors; described in investigations and public documentation.</td>
<td><a href="https://www.justice.gov/storage/report_volume1.pdf">DOJ: Mueller Report (Vol. I PDF)</a></td>
</tr>
<tr>
<td>Alex Witkoff</td>
<td>Trump campaign / administration</td>
<td>Role: Trump-world official</td>
<td>Real-estate executive; associated with the Witkoff Group; son of Steve Witkoff.</td>
<td>Connected through Steve Witkoff&rsquo;s close relationship and government role in Trump&rsquo;s second term. Involved in the crypto schemes of World Liberty Financial</td>
<td>No specific Russia-related tie identified in the sources used.</td>
<td><a href="https://www.ushmm.org/information/press/president-trump-appoints-new-council-members2025">USHMM: Trump appointments list (includes Alex Witkoff)</a> | <a href="https://www.jns.org/trump-announces-eight-new-appointees-to-holocaust-memorial-council/">JNS: coverage of Alex Witkoff appointment (2025)</a></td>
</tr>
<tr>
<td>Steve Witkoff</td>
<td>Trump campaign / administration</td>
<td>Role: Trump-world official</td>
<td>American real-estate developer and investor; longtime Trump associate; served as a special envoy in Trump&rsquo;s second term (per reporting).</td>
<td>Close associate; appointed special envoy role in 2025 (per Reuters/Wikipedia).</td>
<td>Any Russia-related contacts appear in an official-diplomatic capacity as envoy (not a documented private business tie in the sources used).</td>
<td><a href="https://www.reuters.com/world/us/trump-names-witkoff-special-envoy-middle-east-2024-11-12/">Reuters: Witkoff envoy appointment</a></td>
</tr>
<tr>
<td>Howard Lutnick</td>
<td>Trump campaign / administration</td>
<td>Role: Trump-world official</td>
<td>American businessman (Cantor Fitzgerald); became U.S. Secretary of Commerce in 2025.</td>
<td>Cabinet member in Trump&rsquo;s second term (Commerce Secretary).</td>
<td>Possible Russian connections through his Crypto platform Tether.</td>
<td><a href="https://www.reuters.com/world/us/us-senate-confirms-cantor-fitzgeralds-lutnick-head-commerce-department-2025-02-18/">Reuters: confirmation coverage</a></td>
</tr>
<tr>
  <td>Susie (Susan) Wiles</td>
  <td>Trump campaign / administration</td>
  <td>Role: Trump-world official; White House Chief of Staff (2025); Brian Ballard; David Yakobashvili; Rosneft; Bryan Lanza; EN+ Group; Oleg Deripaska (indirect)</td>
  <td>U.S. political consultant and longtime Florida Republican strategist; led Trump’s 2024 campaign operation and later became White House Chief of Staff (per widely reported transition coverage).</td>
  <td>Senior Trump campaign aide; became Chief of Staff in Trump’s second-term White House.</td>
  <td>
    Wiles's <em>indirect / network</em> linkage show  Brian Ballard,recommending Wiles to Trump) as Chief of Staff. Ballard represented Russian businessman David Yakobashvili, and it discusses Ballard Partners’ sanctions-related lobbying connected to Rosneft Trading SA/Venezuela-linked issues.  Mercury Public Affairs,where Trump adviser Bryan Lanza is a partner, represented the EN+ chair; EN+ is commonly associated with Oleg Deripaska.
  </td>
  <td>
    <a href="https://bylinetimes.com/2024/11/12/lobbyists-oligarchs-and-power-the-pro-putin-network-raising-fears-of-foreign-influence-in-trumps-team/" target="_blank" rel="noopener noreferrer">Byline Times (Nov 12, 2024)</a>
    | <a href="https://www.reuters.com/article/us-usa-venezuela-sanctions-rosneft-idUSKCN1RY2NL/" target="_blank" rel="noopener noreferrer">Reuters (Apr 22, 2019) – Rosneft/Venezuela payments context</a>
    | <a href="https://www.reuters.com/article/rosneft-usa-sanctions-trading/u-s-sanctions-unit-of-russias-rosneft-over-venezuela-oil-trading-idUSKBN26Y2D1/" target="_blank" rel="noopener noreferrer">Reuters (Oct 13, 2020) – Rosneft Trading sanctions</a>
    | <a href="https://www.mercuryllc.com/team/bryan-lanza/" target="_blank" rel="noopener noreferrer">Mercury Public Affairs – Bryan Lanza bio</a>
  </td>
</tr>
<tr>
<td>Lanny Wiles</td>
<td>Trump campaign / administration</td>
<td>Role: Trump-world official; FEC matter</td>
<td>Political consultant; referenced in FEC materials as Susan Wiles&rsquo;s husband in a 2017 context.</td>
<td>Political consultant connected via spouse&rsquo;s senior role in Trump orbit (indirect).</td>
<td>FLAG: Mentioned in the same FEC MUR 7561 document that references Rinat Akhmetshin (documentary co-appearance).</td>
<td><a href="https://www.fec.gov/files/legal/murs/7561/7561_31.pdf">FEC MUR 7561 (PDF)</a></td>
</tr>
<tr>
<td>Tulsi Gabbard</td>
<td>U.S. politicians &amp; public officials</td>
<td>Role: U.S. public official</td>
<td>American politician and U.S. Army Reserve officer; former U.S. Representative from Hawaii.</td>
<td>Served in Trump&rsquo;s second-term administration per current reporting (role varies by source).</td>
<td>Public debate exists about her foreign-policy stances; no specific financial or operational Russia tie asserted here without stronger sourcing.</td>
<td><a href="https://www.politico.com/live-updates/2024/11/13/trump-transition/trump-tulsi-gabbard-00189057">Politico (transition reporting)</a> | <a href="https://www.cnn.com/2024/11/13/politics/tulsi-gabbard-trump-intelligence/index.html">CNN (transition reporting)</a></td>
</tr>
<tr>
<td>Sergio Gor</td>
<td>Trump campaign / administration</td>
<td>Role: Trump-world official</td>
<td>American businessman and political operative; served as director of the White House Presidential Personnel Office in 2025 and later U.S. ambassador to India (per State Dept/Wikipedia).</td>
<td>Held White House personnel role in 2025 under Trump; later ambassador appointment.</td>
<td>Born in the Uzbek SSR (Soviet Union); no additional Russia-linked ties asserted here in the sources used.</td>
<td><a href="https://www.state.gov/gorsergio-republicofindia-september-2025">U.S. State Dept bio</a></td>
</tr>
<tr>
<td>George Birnbaum</td>
<td>U.S. political operatives / lobbyists / consultants</td>
<td>Role: U.S. operative</td>
<td>American-Israeli political consultant; associated with Republican-aligned consulting and later Mercury Public Affairs (per biography).</td>
<td>Worked with Arthur Finklestein to define George Soros as an enemy</td>
<td>Active in post Soviet Russian "capitalism"</td>
<td><a href="https://bgdlc.com/george-birnbaum/">BGD Legal &amp; Consulting: George Birnbaum bio</a> | <a href="https://www.legistorm.com/person/bio/147825/George_Eli_Birnbaum.html">LegiStorm: George Eli Birnbaum profile</a></td>
</tr>
<tr>
<td>George Nader</td>
<td>Foreign influence intermediaries</td>
<td>Role: Foreign intermediary; Mueller / Senate Intel</td>
<td>Lebanese-American businessman and political fixer associated with UAE-linked influence efforts in reporting; convicted of child sex offenses in U.S. courts (noted here only as background).</td>
<td>Reported intermediary to Trump associates; involved in meetings with Trump Jr. and others in 2016 and in the Seychelles backchannel narrative (as reported).</td>
<td>Associated with the Seychelles meeting involving Kirill Dmitriev per press/investigations; discussed in Mueller reporting and major coverage.</td>
<td><a href="https://www.washingtonpost.com/world/national-security/blackwater-founder-held-secret-seychelles-meeting-to-establish-trump-putin-back-channel/2017/04/03/95908a08-1648-11e7-ada0-1489b735b3a3_story.html">Washington Post: Seychelles meeting</a> | <a href="https://www.justice.gov/storage/report_volume1.pdf">DOJ: Mueller Report (Vol. I PDF)</a></td>
</tr>
<tr>
<td>Steve Bannon</td>
<td>Trump campaign / administration</td>
<td>Role: Trump-world official; Surkov leaks; Cambridge Analytica / SCL</td>
<td>American political strategist and media executive; served as White House Chief Strategist early in Trump&rsquo;s first term; former vice president at Cambridge Analytica (per reporting).</td>
<td>Senior campaign adviser and White House Chief Strategist (2017).</td>
<td>FLAG: Cambridge Analytica/SCL ecosystem included discussions about outreach/foreign data sources per investigative reporting;&ldquo;Surkov leaks&rdquo; mention a conference Bannon was planning in Italy.</td>
<td><a href="https://data.parliament.uk/writtenevidence/committeeevidence.svc/evidencedocument/digital-culture-media-and-sport-committee/fake-news/written/79388.pdf">UK Parliament evidence (Wylie)</a></td>
</tr>
<tr>
<td>Robert Mercer</td>
<td>Data &amp; influence-operations ecosystem</td>
<td>Role: Influence ops; Cambridge Analytica / SCL</td>
<td>American hedge-fund executive and political donor; major funder of Cambridge Analytica and associated political projects.</td>
<td>Financed pro‑Trump political operations; linked to the campaign ecosystem via data/consulting entities in reporting.</td>
<td>FLAG: Cambridge Analytica/SCL/Kogan appearances in investigative reports; Russia ties are indirect (via CA/SCL activities and reported outreach), not personal business dealings in sources used.</td>
<td><a href="https://data.parliament.uk/writtenevidence/committeeevidence.svc/evidencedocument/digital-culture-media-and-sport-committee/fake-news/written/79388.pdf">UK Parliament evidence (Wylie)</a> | <a href="https://www.theguardian.com/news/2018/mar/23/cambridge-analytica-facebook-what-we-know-so-far">The Guardian background</a></td>
</tr>
<tr>
<td>Konstantin Malofeev</td>
<td>Foreign influence intermediaries</td>
<td>Role: Foreign intermediary; OFAC / sanctions; Surkov leaks</td>
<td>Russian businessman often described as an ultraconservative oligarch; sanctioned by the U.S. and others (per reporting/government actions).</td>
<td>No direct, well‑sourced Trump business tie identified in the sources used.</td>
<td>FLAG: &ldquo;Surkov leaks&rdquo; reporting and analyses have described Malofeev in the context of pro‑Russian operations in Ukraine; subject of U.S. legal actions/sanctions.</td>
<td><a href="https://www.atlanticcouncil.org/blogs/ukrainealert/the-surkov-leaks-how-russia-planned-to-seize-ukraine/">Atlantic Council (Surkov leaks analysis)</a> | <a href="https://www.justice.gov/opa/pr/russian-oligarch-konstantin-malofeyev-indicted-sanctions-violations-and">DOJ: Malofeev indictment/press release</a></td>
</tr>
<tr>
<td>Alexei Komov</td>
<td>Foreign influence intermediaries</td>
<td>Role: Foreign intermediary; OFAC / sanctions</td>
<td>Russian national described by DOJ as associated with Malofeev; referenced in World Congress of Families / conservative-network reporting.</td>
<td>No direct, well‑sourced Trump connection identified in the sources used.</td>
<td>Charged/identified in U.S. legal filings related to sanctions evasion networks (per DOJ).</td>
<td><a href="https://www.justice.gov/opa/pr/russian-national-charged-act-co-conspirator-us-sanctions-evasion-scheme">DOJ: Komov charge/press release</a></td>
</tr>
<tr>
<td>Austin Ruse</td>
<td>U.S. political operatives / lobbyists / consultants</td>
<td>Role: U.S. operative</td>
<td>American conservative activist; longtime leader associated with C-Fam/World Congress of Families networks.</td>
<td>No direct, well‑sourced Trump connection identified in the sources used.</td>
<td>Reported participation in/engagement with Russia-focused conservative-network efforts; some reports cite interactions with Russian-linked figures (contextual, varies by source quality).</td>
<td><a href="https://apnews.com/article/4c62248c994b4f038a33b888631992e3">AP: Ruse praises Russian law (2014)</a> | <a href="https://www.opendemocracy.net/en/5050/the-conservative-alliance-between-russia-and-the-us-is-fraying/">openDemocracy (network reporting)</a></td>
</tr>
<tr>
<td>Michael P. Farris</td>
<td>U.S. political operatives / lobbyists / consultants</td>
<td>Role: U.S. operative</td>
<td>American attorney and activist; founding figure in the Home School Legal Defense Association and related organizations; chaired Trump&rsquo;s 1776 Commission (per White House-era documentation).</td>
<td>Appointed to chair the 1776 Commission in 2020 (first term).</td>
<td>No specific Russia-related tie identified in the sources used.</td>
<td><a href="https://trumpwhitehouse.archives.gov/presidential-actions/executive-order-establishing-presidents-advisory-1776-commission/">White House Archives: 1776 Commission EO</a></td>
</tr>
<tr>
  <td>Charles Bausman</td>
  <td>U.S. media / commentary / research</td>
  <td>Role: Pro-Kremlin media; The Russia Insider; RT commentator</td>
  <td>American expatriate media figure associated with pro-Kremlin commentary; founder/editor of <em>The Russia Insider</em> (a pro-Russia/pro-Kremlin outlet in reporting) and a recurring presence in Russia-aligned media ecosystems.</td>
  <td>No direct, well-sourced official Trump campaign/administration role identified; included due to overlap between pro-Kremlin media narratives and U.S. political discourse during the Trump era.</td>
  <td>Based in Russia and identified in reporting as running a pro-Kremlin outlet; reporting has also described his media activity and related controversies (including outreach/associations within pro-Kremlin networks).</td>
  <td>
    <a href="https://www.tabletmag.com/sections/news/articles/charles-bausman-russia-insider-alt-right-propaganda" target="_blank" rel="noopener noreferrer">Tablet (Bausman / Russia Insider profile &amp; controversy)</a>
    |
    <a href="https://interpret.csis.org/the-russian-orthodox-oligarch-meets-the-russia-insider/" target="_blank" rel="noopener noreferrer">Interpreter / CSIS (Russia Insider / network context)</a>
    |
    <a href="https://macdonaldlaurier.ca/files/pdf/20211013_US_media_ROTHMAN_PAPER_FWeb.pdf" target="_blank" rel="noopener noreferrer">Macdonald-Laurier Institute (U.S. media &amp; foreign disinfo context; mentions Bausman/RT appearances)</a>
  </td>
</tr>
<tr>
<td>Aleksandr Kogan</td>
<td>Data &amp; influence-operations ecosystem</td>
<td>Role: Influence ops; Cambridge Analytica / SCL</td>
<td>Academic and data scientist associated with Global Science Research (GSR); developed the Facebook app used to collect data later obtained by Cambridge Analytica (per investigations).</td>
<td>Indirect&mdash;work was tied to Cambridge Analytica/SCL operations that supported political campaigns, including U.S. elections.</td>
<td>Primarily discussed in the context of data/tech and Cambridge Analytica; no separate Russia business tie asserted here beyond CA/SCL reporting.</td>
<td><a href="https://www.ftc.gov/system/files/documents/cases/182_3107_cambanalytica_order_filed_11-28-18.pdf">FTC: Cambridge Analytica complaint/order materials (PDF)</a></td>
</tr>
<tr>
  <td>Bryan Lanza</td>
  <td>Trump campaign / administration</td>
  <td>Role: Trump-world official; Communications strategist; Lobbyist; Mercury Public Affairs; EN+ Group; Oleg Deripaska (indirect)</td>
  <td>Republican communications strategist and Trump-aligned adviser; partner at Mercury Public Affairs (per firm biography).</td>
  <td>Trump-world communications adviser/strategist (campaign/transition ecosystem in public reporting and firm bio).</td>
  <td>
   Mercury Public Affairs represented the chair of EN+ Group in sanctions-related advocacy; EN+ is widely associated with Oleg Deripaska (association/ownership context). This is presented as lobbying/foreign-influence-network context rather than a claim of operational coordination.
  </td>
  <td>
    <a href="https://bylinetimes.com/2024/11/12/lobbyists-oligarchs-and-power-the-pro-putin-network-raising-fears-of-foreign-influence-in-trumps-team/" target="_blank" rel="noopener noreferrer">Byline Times (Nov 12, 2024)</a>
    | <a href="https://www.mercuryllc.com/team/bryan-lanza/" target="_blank" rel="noopener noreferrer">Mercury Public Affairs – Bryan Lanza bio</a>
  </td>
</tr>
<tr>
  <td>Brian Ballard</td>
  <td>U.S. political operatives / lobbyists / consultants</td>
  <td>Role: U.S. lobbyist; Ballard Partners; Trump fundraiser/connector; David Yakobashvili; Rosneft Trading SA; Venezuela sanctions; Reliance Industries</td>
  <td>U.S. lobbyist and founder of Ballard Partners; described in reporting as a prominent pro-Trump influence and fundraising figure in Republican politics.</td>
  <td>BBallard is a key Trump-world lobbyist/connector and reports he recommended Susie Wiles to Donald Trump.</td>
  <td>
   Ballard Partners represented Russian businessman David Yakobashvili and describes Ballard Partners lobbying U.S. Treasury in 2019 on matters tied to Rosneft Trading SA/Venezuela-related sanctions issues. Reuters hasreported on Rosneft’s role in Venezuelan payments and on U.S. sanctions targeting Rosneft Trading SA.
  </td>
  <td>
    <a href="https://bylinetimes.com/2024/11/12/lobbyists-oligarchs-and-power-the-pro-putin-network-raising-fears-of-foreign-influence-in-trumps-team/" target="_blank" rel="noopener noreferrer">Byline Times (Nov 12, 2024)</a>
    | <a href="https://www.reuters.com/article/us-usa-venezuela-sanctions-rosneft-idUSKCN1RY2NL/" target="_blank" rel="noopener noreferrer">Reuters (Apr 22, 2019) – Rosneft/Venezuela payments context</a>
    | <a href="https://www.reuters.com/article/rosneft-usa-sanctions-trading/u-s-sanctions-unit-of-russias-rosneft-over-venezuela-oil-trading-idUSKBN26Y2D1/" target="_blank" rel="noopener noreferrer">Reuters (Oct 13, 2020) – Rosneft Trading sanctions</a>
  </td>
</tr>
<tr>
<td>Dietmar Clodo</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate</td>
<td>German citizen described as a guest at Sergey Mikhailov&rsquo;s 2013 party; the article says he was a former Red Army Faction militant who served time in Hungary.</td>
<td>No direct Trump role; referenced while discussing alleged talks about Trump Towers projects.</td>
<td>Referenced in the context of post‑Soviet organized-crime networks.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://atlatszo.hu/en/2017/06/05/kuhnens-meeting-with-the-russian-mafia/">&Aacute;tl&aacute;tsz&oacute; investigation</a></td>
</tr>
<tr>
<td>Viktor Averin</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate</td>
<td>Described by The Insider as a leader/strategist figure in the Solntsevskaya organized crime group (OCG) (nicknamed &ldquo;Avera&rdquo; ).</td>
<td>Appears in discussion of alleged talks about building Trump Towers projects.</td>
<td>Named by The Insider as part of Solntsevskaya OCG leadership context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://web.stanford.edu/group/sias/cgi-bin/smunc/wp-content/uploads/2014/10/Russia-BG-Final.pdf">Stanford PDF: Russian Organized Crime</a><br /><a href="https://doi.org/10.23943/princeton/9780691128559.003.0004">Princeton/OUP chapter (Solntsevskaya)</a></td>
</tr>
<tr>
<td>Emin Agalarov</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate; Trump Tower meeting (6/9/2016)</td>
<td>Azerbaijani‑Russian singer and businessman; son of Aras/Araz Agalarov (Crocus Group).</td>
<td>Figure &ldquo;behind&rdquo; outreach leading to the June 9, 2016 Trump Tower meeting involving Trump campaign representatives and Natalia Veselnitskaya.</td>
<td>Russia‑based public figure/business family;</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.justice.gov/storage/report.pdf">Mueller Report (DOJ, 2019)</a><br /><a href="https://www.forbes.com/sites/danalexander/2017/07/11/meet-the-billionaire-russian-family-at-the-center-of-the-trump-russia-controversy/">Forbes profile of Agalarovs</a></td>
</tr>
<tr>
<td>Natalya Veselnitskaya</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate; Trump Tower meeting (6/9/2016); Magnitsky / Prevezon</td>
<td>Russian lawyer linked in public reporting to representation of Prevezon Holdings.</td>
<td>Participant in the June 9, 2016 Trump Tower meeting (per widely documented accounts).</td>
<td>Russian attorney; Magnitsky/Prevezon context discussed.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.justice.gov/storage/report.pdf">Mueller Report (DOJ, 2019)</a></td>
</tr>
<tr>
<td>Yakov Bogatin</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>Brother of David Bogatin and listed in Pennsylvania corporate records as director of YBM Magnex after it changed hands.</td>
<td>No direct Trump role; mentioned as part of the Bogatin/YBM Magnex narrative linked to Trump real estate.</td>
<td>Discussed in connection with Mogilevich/YBM Magnex.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a> | <a href="https://opencorporates.com">OpenCorporates (company registry)</a></td>
</tr>
<tr>
<td>Gafur Rakhimov</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate</td>
<td>Uzbek-born businessman appearing in a group photo with Solntsevo figures; the article says he is wanted in the U.S. for heroin trafficking.</td>
<td>No direct Trump role; discussed as part of alleged criminal networks intersecting Trump-branded real estate context.</td>
<td>Linked to organized crime allegations; U.S. designation/coverage exists in public sources.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://sanctionssearch.ofac.treasury.gov/">OFAC Sanctions Search (U.S. Treasury)</a></td>
</tr>
<tr>
<td>Adam Delimkhanov</td>
<td>Russian state officials &amp; diplomats</td>
<td>Role: Russian state; OFAC / sanctions</td>
<td>Russian State Duma deputy sanctioned by the U.S. Treasury in 2014 and called a close associate of Gafur Rakhimov.</td>
<td>No direct Trump role mentioned.</td>
<td>Russian official. Involved in organized-crime context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://sanctionssearch.ofac.treasury.gov/">OFAC Sanctions Search (U.S. Treasury)</a></td>
</tr>
<tr>
<td>Ramzan Kadyrov</td>
<td>Russian state officials &amp; diplomats</td>
<td>Role: Russian state; OFAC / sanctions</td>
<td>Head of the Chechen Republic; referenced as a relative connection (Delimkhanov).</td>
<td>No direct Trump role mentioned.</td>
<td>Russian regional leader; widely covered in Russia politics and sanctions contexts.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://sanctionssearch.ofac.treasury.gov/">OFAC Sanctions Search (U.S. Treasury)</a></td>
</tr>
<tr>
<td>Robert Mueller</td>
<td>Investigations / legal cases</td>
<td>Role: Legal case/inquiry; Mueller / Senate Intel</td>
<td>Former FBI Director and Special Counsel who led the U.S. investigation into Russian interference in the 2016 election.</td>
<td>His investigation is referenced in the context of Trump&ndash;Russia scrutiny.</td>
<td>Led the U.S. investigation into Russian election interference (government role).</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a> | <a href="https://www.justice.gov/storage/report_volume1.pdf">DOJ: Mueller Report (Vol. I PDF)</a></td>
</tr>
<tr>
<td>Ivan Fursin</td>
<td>Ukraine political figures</td>
<td>Role: Ukraine politics</td>
<td>Ukrainian politician/businessman; MP who paid millions to a Cyprus company connected to Manafort in an indictment discussed by the article.</td>
<td>Part of the Manafort-related financial network.</td>
<td>Connected to Firtash/Mogilevich network.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Dmytro Firtash</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business</td>
<td>Ukrainian businessman; discussed in relation to Mogilevich-linked allegations and gas intermediary RosUkrEnergo.</td>
<td>Mentioned as part of the Manafort-related network context.</td>
<td>Ukraine/Russia gas trade and alleged organized-crime links are discussed in reporting;</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Hikmet Mukhtarov</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>Azerbaijani underworld figure shot in 2006. The incident is tied to a vehicle registered to a Crocus co-founder.</td>
<td>No direct Trump role mentioned.</td>
<td>Involved in organized-crime context in Azerbaijan/Russia-linked networks.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://dspace.cuni.cz/bitstream/handle/20.500.11956/99739/120298719.pdf?isAllowed=y&amp;sequence=1">Charles University thesis (PDF)</a></td>
</tr>
<tr>
<td>Rail Zeynalov</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>Co-founder of Crocus Group; mentioned in connection with a vehicle registration in the 2006 Mukhtarov incident.</td>
<td>No direct Trump role beyond Crocus/Agalarov business context described.</td>
<td>Alleged criminal-circle ties around Crocus/Agalarov.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://dspace.cuni.cz/bitstream/handle/20.500.11956/99739/120298719.pdf?isAllowed=y&amp;sequence=1">Charles University thesis (PDF)</a></td>
</tr>
<tr>
<td>Mammad Masallinsky</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>Azerbaijani crime boss noticed at Ivankov&rsquo;s funeral in 2009.</td>
<td>No direct Trump role mentioned.</td>
<td>Referenced by The Insider in organized-crime context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Ilham Aliyev</td>
<td>Other foreign state officials</td>
<td>Role: Foreign state official</td>
<td>President of Azerbaijan; Ex‑police officer filed a claim against President Aliyev at the ECHR.</td>
<td>No direct Trump role mentioned.</td>
<td>Regional head of state; referenced in Azerbaijan context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Alimzhan Tokhtakhunov ("Taiwanchik")</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime; Miss Universe Moscow; Trump Tower gambling ring</td>
<td>Honorary guest at Miss Universe Moscow and at the time on the FBI&rsquo;s Top Ten Most Wanted list; tied to gambling/money laundering cases in reporting.</td>
<td>Connected with events at Trump Tower and Miss Universe Moscow.</td>
<td>Russia-based figure discussed in organized-crime investigations</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.fbi.gov/newyork/press-releases/2013/manhattan-u.s.-attorney-charges-34-members-and-associates-of-two-russian-american-organized-crime-enterprises-with-operating-international-sportsbooks-that-laundered-more-than-100-million">FBI/SDNY press release</a><br /><a href="https://www.rferl.org/a/russia-alimzhan-tokhtakhunov-taiwanchik-indictment/25003328.html">RFE/RL reporting</a></td>
</tr>
<tr>
<td>Helly Nahmad</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate; Trump Tower gambling ring</td>
<td>Art dealer plead guilty in a U.S. illegal gambling/money laundering case (per cited sources ).</td>
<td>Mentioned as part of a Trump Tower-based gambling ring narrative.</td>
<td>No direct Russia tie asserted beyond the ring&rsquo;s post‑Soviet links described.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.fbi.gov/newyork/press-releases/2013/manhattan-u.s.-attorney-charges-34-members-and-associates-of-two-russian-american-organized-crime-enterprises-with-operating-international-sportsbooks-that-laundered-more-than-100-million">FBI/SDNY press release</a></td>
</tr>
<tr>
<td>David Nahmad</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate; Trump Tower gambling ring</td>
<td>Art dealer and billionaire collector; Helly Nahmad&rsquo;s father.</td>
<td>Mentioned as part of the Trump Tower gambling-ring context.</td>
<td>No direct Russia tie asserted beyond article&rsquo;s network context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Vadim Trincher</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime; Trump Tower gambling ring</td>
<td>Defendant in U.S. prosecutions for racketeering/illegal gambling/money laundering.</td>
<td>Ran a Trump Tower-based gambling operation.</td>
<td>Discussed as part of post‑Soviet criminal networks.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.fbi.gov/newyork/press-releases/2013/manhattan-u.s.-attorney-charges-34-members-and-associates-of-two-russian-american-organized-crime-enterprises-with-operating-international-sportsbooks-that-laundered-more-than-100-million">FBI/SDNY press release</a></td>
</tr>
<tr>
<td>Anatoly Golubchik</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime; Trump Tower gambling ring</td>
<td>Defendant in illegal gambling/money laundering case from Trump Tower.</td>
<td>Trump Tower-based gambling operation.</td>
<td>Discussed as part of post‑Soviet criminal networks.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.fbi.gov/newyork/press-releases/2013/manhattan-u.s.-attorney-charges-34-members-and-associates-of-two-russian-american-organized-crime-enterprises-with-operating-international-sportsbooks-that-laundered-more-than-100-million">FBI/SDNY press release</a></td>
</tr>
<tr>
<td>Vladimir Kozhin</td>
<td>Russian state officials &amp; diplomats</td>
<td>Role: Russian state; Miss Universe Moscow</td>
<td>Russian official; Honorary guest at Miss Universe Moscow and as a signatory connected to authorization for the so‑called &ldquo;Putin&rsquo;s Palace.&rdquo;</td>
<td>Miss Universe Moscow context with Trump/Agalarov.</td>
<td>Russia senior official role; discussed in state/elite network context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
  <td>Jürg Wissmann</td>
  <td>Organized crime &amp; underworld figures</td>
  <td>Role: Organized crime</td>
  <td>Lawyer tied to the Tambov organized crime group...</td>
  <td>No direct Trump role mentioned.</td>
  <td>No connections found.</td>
  <td><a href="https://theins.ru/en/politics/98190" rel="noopener noreferrer" target="_blank">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Gennady Petrov</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>Leader of the Tambov OCG and a neighbor of Vladimir Kozhin.</td>
<td>No direct Trump role mentioned.</td>
<td>Spanish investigation of Russian organized crime.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Herman Gref</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business; Miss Universe Moscow</td>
<td>CEO of Sberbank; Co-hosting a gala dinner after Miss Universe Moscow with Agalarov.</td>
<td>Miss Universe Moscow context connected to Trump/Agalarov.</td>
<td>Senior Russian banker; discussed in law‑enforcement wiretap context per the article.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Vladislav Reznik</td>
<td>Russian state officials &amp; diplomats</td>
<td>Role: Russian state</td>
<td>Russian politician; Intercepted calls in a Spanish investigation.</td>
<td>No direct Trump role mentioned.</td>
<td>Referenced via Spanish investigation context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Igor Sechin</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>CEO of Rosneft; Spanish investigators did not understand who the &ldquo;true mafia&rdquo; in Russia is, naming Sechin among &ldquo;much more important&rdquo; people.</td>
<td>No direct Trump role mentioned.</td>
<td>Senior Russian state-company executive.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://sanctionssearch.ofac.treasury.gov/">OFAC Sanctions Search (U.S. Treasury)</a></td>
</tr>
<tr>
<td>Vladimir Vinokur</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>Russian comedian.Attended a 1992 meeting with Solntsevo figures and Mogilevich in Budapest (per the article&rsquo;s cited indictment).</td>
<td>No direct Trump role mentioned.</td>
<td>Russian public figure referenced in organized-crime network context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Mona Elson</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>Attended a 1992 meeting with Solntsevo figures and Ivankov.</td>
<td>No direct Trump role mentioned.</td>
<td>Referenced as part of alleged organized-crime network context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Sergei Polonsky</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate; Trump Tower Moscow</td>
<td>Russian businessman;Felix Sater joined the board of Mirax Group, owned by Polonsky.</td>
<td>Mentioned in the narrative about Sater/Trump Tower Moscow efforts.</td>
<td>Russian businessman; referenced in Moscow real‑estate context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Andrei Rozov</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate; Trump Tower Moscow</td>
<td>Russian real‑estate executive. Mirax top manager who later set up his own company and was tied to the 2015 Trump Tower Moscow letter of intent context.</td>
<td>2015 Trump Tower Moscow.</td>
<td>Russia-based business figure in real‑estate; referenced.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.justice.gov/storage/report.pdf">Mueller Report (DOJ, 2019)</a></td>
</tr>
<tr>
<tr>
  <td>Yevgeny Dvoskin</td>
  <td>Russia-linked business / finance figure</td>
  <td>Role: Reported partner/associate; Trump Tower Moscow effort; Sater-linked network</td>
  <td>
    Business figure discussed in reporting around the attempted Trump Tower Moscow project; has also been described in
    investigative reporting as having a controversial background and connections in Russian/Ukrainian banking circles.
  </td>
  <td>
    Identified in reporting as one of the &ldquo;other partners&rdquo;/participants orbiting the attempted Trump Tower Moscow deal effort
    connected to Felix Sater&rsquo;s outreach and partner network.
  </td>
  <td>
    Reported connections to Russia-linked banking/financial networks (including reporting focused on Crimea-related banking
    interest), and described by investigative outlets as connected to controversial actors in the post-Soviet financial sphere.
  </td>
  <td class="sources">
    <a
      href="https://www.propublica.org/article/trump-inc-podcast-attempted-moscow-tower-other-partners"
      target="_blank"
      rel="noopener noreferrer"
      data-apa-author="Eric Umansky; Heather Vogell"
      data-apa-date="2019, March 21"
      data-apa-title="Meet Trump’s Other Partners on His Attempted Moscow Tower — “Trump, Inc.” Podcast"
    >ProPublica (Trump, Inc.): Meet Trump’s Other Partners on His Attempted Moscow Tower</a><br>
    <a
      href="https://www.occrp.org/en/28-ccwatch/cc-watch-indepth/4001-controversial-russian-bankers-target-crimea"
      target="_blank"
      rel="noopener noreferrer"
      data-apa-author="Evgeny Zhuravlev; Elena Nizovaya"
      data-apa-date="2015, June 2"
      data-apa-title="Controversial Russian Bankers Target Crimea"
    >OCCRP: Controversial Russian Bankers Target Crimea</a>
  </td>
</tr>
<td>Michael Cohen</td>
<td>Trump family &amp; Trump Organization</td>
<td>Role: Trump Org/family; Trump Tower Moscow</td>
<td>Attorney and former executive vice president of the Trump Organization. Corresponded with Dmitry Peskov about Trump Tower Moscow.</td>
<td>Direct: Trump lawyer who pursued Trump Tower Moscow discussions and contacted Peskov (as discussed and widely reported).</td>
<td>Referenced for contacting the Kremlin press secretary during Trump Tower Moscow pursuit.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.justice.gov/storage/report.pdf">Mueller Report (DOJ, 2019)</a></td>
</tr>
<tr>
<td>Dmitry Peskov</td>
<td>Russian state officials &amp; diplomats</td>
<td>Role: Russian state; Trump Tower Moscow</td>
<td>Kremlin spokesman (press secretary to the President of Russia); Received Cohen&rsquo;s letter about Trump Tower Moscow.</td>
<td>Indirect: contacted by Trump&rsquo;s lawyer (Cohen) per the Trump Tower Moscow story.</td>
<td>Senior Russian government spokesperson.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.justice.gov/storage/report.pdf">Mueller Report (DOJ, 2019)</a></td>
</tr>
<tr>
<td>Alexander Torshin</td>
<td>Russian state officials &amp; diplomats</td>
<td>Role: Russian state; NRA outreach</td>
<td>Russian politician/banker; Deputy chairman of the Bank of Russia and links him to NRA-related reporting.</td>
<td>Trump Jr. spoke with him at an NRA event (2016 context).</td>
<td>Discussed in Spanish law-enforcement investigations. Russia official.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Alexander Romanov</td>
<td>Foreign influence intermediaries</td>
<td>Role: Foreign intermediary; NRA outreach</td>
<td>Torshin&rsquo;s representative who owned the Mallorca hotel Mar y Pins and was sentenced in Spain for money laundering.</td>
<td>No direct Trump role mentioned.</td>
<td>Spain case context tied to Torshin.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Evgeny Dvoskin (Slusker)</td>
<td>Foreign influence intermediaries</td>
<td>Role: Foreign intermediary; Crimea/DPR conflict</td>
<td>Banker arrested in Monaco at FBI request (2008) and as having met Ivankov in jail.</td>
<td>No direct Trump role mentioned.</td>
<td>Discussed as a post‑Soviet &eacute;migr&eacute; involved in alleged criminal networks; later banking activity in Crimea (per article).</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Rudy Giuliani</td>
<td>U.S. politicians &amp; public officials</td>
<td>Role: U.S. public official</td>
<td>American politician and attorney; former mayor of New York City.</td>
<td>Trump&rsquo;s personal attorney and adviser (2018&ndash;2019 period); Fundraising support from Kislin for Giuliani&rsquo;s Senate ambitions.</td>
<td>No direct Russia tie asserted beyond proximity to Kislin and broader Russia-related narratives in reporting.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://publicintegrity.org/politics/elections/fbi-tracked-alleged-russian-mob-ties-of-giuliani-campaign-supporter/">Center for Public Integrity reporting</a></td>
</tr>
<tr>
<td>Rotem Rosen</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate</td>
<td>Israeli businessman; CEO of the U.S. branch of Africa Israel and mentions him at a wedding hosted by Trump.</td>
<td>Trump hosted the wedding of Sapir&rsquo;s daughter and Rotem Rosen at Mar‑a‑Lago (2007).</td>
<td>Mentioned in connection with Lev Leviev / Moscow-deal discussions.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Lev Leviev</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business; Magnitsky / Prevezon</td>
<td>Israeli diamond and real‑estate businessman; linked to Africa Israel in reporting.</td>
<td>Trump meeting with Leviev to discuss potential Moscow deals and notes Kushner&rsquo;s presence at the 2007 wedding.</td>
<td>Police dossier claims to Mikhail Cherny and in transactions involving Grigory Luchansky and Prevezon/Katsyv references.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Grigory Luchansky</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business</td>
<td>Soviet-born businessman; Nordex and money laundering accusations in multiple countries.</td>
<td>No direct Trump role mentioned.</td>
<td>Post‑Soviet finance/organized-crime allegation context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.occrp.org/en/investigation/ex-spy-turned-humanitarian-helps-himself">OCCRP investigation</a></td>
</tr>
<tr>
<td>Denis Katsyv</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business; Trump Tower meeting (6/9/2016); Magnitsky / Prevezon</td>
<td>Russian businessman; Owner of Prevezon Holdings and references money-laundering accusations in the Magnitsky context.</td>
<td>Linked via the Trump Tower meeting narrative insofar as Veselnitskaya represented Prevezon (as referenced ).</td>
<td>Russian figure tied to Magnitsky/Prevezon litigation context described.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Petr Katsyv</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business; Magnitsky / Prevezon</td>
<td>Russian figure having accounts for offshore companies and linked to the Prevezon/Katsyv context.</td>
<td>No direct Trump role mentioned.</td>
<td>Referenced as part of Prevezon/Magnitsky context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Jared Kushner</td>
<td>Trump family &amp; Trump Organization</td>
<td>Role: Trump Org/family; Trump Tower meeting (6/9/2016)</td>
<td>American investor and former senior White House adviser; married to Ivanka Trump.</td>
<td>Kushner was present at a 2007 wedding hosted by Trump; also attended the June 9, 2016 Trump Tower meeting (widely documented).</td>
<td>No direct Russia tie asserted here beyond his presence at the Trump Tower meeting and related contacts described in investigations.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.justice.gov/storage/report.pdf">Mueller Report (DOJ, 2019)</a></td>
</tr>
<tr>
<td>Ivanka Trump</td>
<td>Trump family &amp; Trump Organization</td>
<td>Role: Trump Org/family</td>
<td>American businesswoman; daughter of Donald Trump.</td>
<td>Prior meeting with Ivanka about alleged business talks concerning Trump Towers projects.</td>
<td>No direct Russia tie asserted beyond being referenced &rsquo;s Moscow/Trump Towers context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.justice.gov/storage/report.pdf">Mueller Report (DOJ, 2019)</a></td>
</tr>
<tr>
<td>Anton Malevsky</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>Leader of the Izmaylovskaya OCG; the article says Kislin-sponsored companies helped with a U.S. visa invitation for him.</td>
<td>No direct Trump role mentioned.</td>
<td>Organized-crime figure.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://publicintegrity.org/politics/elections/fbi-tracked-alleged-russian-mob-ties-of-giuliani-campaign-supporter/">Center for Public Integrity reporting</a></td>
</tr>
<tr>
<td>Lev (Leo) Cherny</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business</td>
<td>Brother of Mikhail Cherny, involved alongside Mikhail Cherny in the Izmailovo OCG context.</td>
<td>No direct Trump role found.</td>
<td>Linked to organized-crime circles and business networks.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://publicintegrity.org/politics/elections/fbi-tracked-alleged-russian-mob-ties-of-giuliani-campaign-supporter/">Center for Public Integrity reporting</a></td>
</tr>
<tr>
<td>Michael Sheferovsky</td>
<td>Organized crime &amp; underworld figures</td>
<td>Role: Organized crime</td>
<td>Felix Sater&rsquo;s father and as head of a New York criminal group &rsquo;s narrative.</td>
<td>No direct Trump role mentioned aside from Sater&rsquo;s work with Trump projects.</td>
<td>Organized-crime network.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Joseph Grill</td>
<td>Trump-linked real estate / deal facilitators</td>
<td>Role: Deal/real estate</td>
<td>Aras Agalarov&rsquo;s father‑in‑law and as a Jewish activist / founder of the Jewish Encyclopedia &rsquo;s summary of Agalarov biography.</td>
<td>No direct Trump role beyond being part of the Agalarov family narrative.</td>
<td>Referenced in the context of a Soviet‑American joint venture (Crocus International).</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.forbes.com/sites/danalexander/2017/07/11/meet-the-billionaire-russian-family-at-the-center-of-the-trump-russia-controversy/">Forbes profile of Agalarovs</a></td>
</tr>
<tr>
<td>Yuri Shvets</td>
<td>Russian intelligence / security services</td>
<td>Role: Russian intel/security</td>
<td>Former KGB officer and author/commentator; Had joint ventures in 1989.</td>
<td>No direct Trump role mentioned.</td>
<td>Former Soviet intelligence officer.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a></td>
</tr>
<tr>
<td>Viktor Orb&aacute;n</td>
<td>Russian state officials &amp; diplomats</td>
<td>Role: Russian state</td>
<td>Prime Minister of Hungary.</td>
<td>No direct Trump role beyond broader political context.</td>
<td>Referenced in connection with Kremlin influence narrative.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://www.reuters.com/world/why-budapest-kremlin-says-orban-has-good-ties-with-both-trump-putin-2025-10-20/">Reuters (Oct 20, 2025)</a><br /><a href="https://www.reuters.com/article/world/hungary-s-orban-we-ll-choose-our-own-path-in-ties-with-russia-idUSKCN0J4167/">Reuters (Nov 21, 2014)</a></td>
</tr>
<tr>
<td>Oleksandr Turchynov</td>
<td>Ukraine political figures</td>
<td>Role: Ukraine politics</td>
<td>Ukrainian politician; Confirmed that, in his view, Mogilevich was behind RosUkrEnergo.</td>
<td>No direct Trump role mentioned.</td>
<td>Referenced in Ukraine/Russia gas intermediary context.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://jamestown.org/tangled-russian-ukrainian-gas-deals-provide-opportunities-for-corruption-influence/">Jamestown Foundation analysis</a><br /><a href="https://www.kyivpost.com/post/9173">Kyiv Post reporting</a></td>
</tr>
<tr>
<td>Yevgeny Prigozhin</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business</td>
<td>Russian businessman; Past criminal conviction and as connected to funding Wagner and &ldquo;trolls&rdquo; (as stated ).</td>
<td>No direct Trump role mentioned.</td>
<td>Russian figure central to Wagner/Internet Research Agency narratives.</td>
<td><a href="https://theins.ru/en/politics/98190">The Insider (Apr 6, 2018)</a><br /><a href="https://sanctionssearch.ofac.treasury.gov/">OFAC Sanctions Search (U.S. Treasury)</a></td>
</tr>
<tr>
<td>Vladimir Alekseyevin</td>
<td>Russian intelligence / security services</td>
<td>Role: Russian intel/security</td>
<td>Russian lieutenant general and senior officer in Russia&rsquo;s military intelligence directorate (GRU), frequently described in reporting as the GRU&rsquo;s first deputy head.</td>
<td>No connection found.</td>
<td>Senior GRU (Russian military intelligence) official.</td>
<td><a href="https://www.themoscowtimes.com/2022/05/12/putin-pulls-russian-spy-agency-out-of-ukraine-a77642">The Moscow Times (May 12, 2022) &ndash; Alekseyev as GRU first deputy head</a></td>
</tr>
<tr>
<td>Oleksiy Savin</td>
<td>Russian intelligence / security services</td>
<td>Role: Russian intel/security</td>
<td>Russian military intelligence (GRU) officer named by Ukrainian authorities as a senior GRU official involved in operations tied to Andrii Derkach&rsquo;s network.</td>
<td>No connection found.</td>
<td>GRU officer (Russian military intelligence).</td>
<td><a href="https://euromaidanpress.com/2023/11/13/ukrainian-lawmaker-charged-with-high-treason/">Euromaidan Press (Nov 13, 2023) &ndash; SBU description of GRU officials, incl. Savin</a><br /><a href="https://www.kyivpost.com/post/24064">Kyiv Post (Nov 13, 2023) &ndash; SBU statement naming Savin</a></td>
</tr>
<tr>
<td>Ihor Kolesnikov</td>
<td>Ukraine political figures</td>
<td>Role: Ukraine politics</td>
<td>Former assistant to Ukrainian politician Andrii Derkach; Ukrainian authorities have described him as coordinating a pro-Russian influence network and he has been reported as convicted/sentenced for treason in Ukraine.</td>
<td>No connection found.</td>
<td>Linked by Ukrainian authorities to a GRU-directed network associated with Andrii Derkach.</td>
<td><a href="https://euromaidanpress.com/2023/11/13/ukrainian-lawmaker-charged-with-high-treason/">Euromaidan Press (Nov 13, 2023) &ndash; Kolesnikov described as coordinator</a><br /><a href="https://www.kyivpost.com/post/24064">Kyiv Post (Nov 13, 2023) &ndash; Kolesnikov as Derkach ex-assistant</a></td>
</tr>
<tr>
<td>Oleksandr Dubinsky</td>
<td>Ukraine political figures</td>
<td>Role: Ukraine politics; OFAC / sanctions; Ukraine/Biden narrative</td>
<td>Ukrainian member of parliament; sanctioned by the U.S. Treasury in January 2021 as part of a Russia-linked foreign influence network associated with Andrii Derkach. Reuters reported he was later suspected of treason by Ukrainian authorities.</td>
<td>Connected to Trump-world via Rudy Giuliani&rsquo;s Ukraine/Biden efforts; U.S. reporting described sanctioned figures like Dubinsky as sources of &ldquo;Biden dirt&rdquo; for Giuliani.</td>
<td>U.S. Treasury sanctioned him as part of a Russia-linked influence network associated with Andrii Derkach.</td>
<td><a href="https://home.treasury.gov/news/press-releases/sm1232">U.S. Treasury (Jan 11, 2021) &ndash; sanctions action incl. Dubinsky</a><br /><a href="https://www.reuters.com/world/europe/ukrainian-politician-us-sanctions-list-suspected-state-treason-lawmakers-2023-11-13/">Reuters (Nov 13, 2023) &ndash; Dubinsky suspected of treason</a><br /><a href="https://time.com/5928781/u-s-sanctions-giulianis-sources-of-biden-dirt-labels-them-part-of-a-russia-linked-influence-network/">TIME (Jan 11, 2021) &ndash; Giuliani sources sanctioned (mentions Dubinsky)</a></td>
</tr>
<tr>
<td>Andrii Derkach</td>
<td>Ukraine political figures</td>
<td>Role: Ukraine politics; OFAC / sanctions; Ukraine/Biden narrative</td>
<td>Former Ukrainian lawmaker; the U.S. Treasury designated him in 2020 as an &ldquo;active Russian agent&rdquo; and sanctioned him for election-related influence activity. U.S. prosecutors later unsealed an indictment alleging sanctions violations and money laundering tied to U.S. real estate purchases.</td>
<td>Linked to Trump-world through interactions with Rudy Giuliani and dissemination of materials attacking Joe Biden during the 2020 election period.</td>
<td>U.S. Treasury described him as an active Russian agent; the U.S. Justice Department described him as a Russian intelligence agent in charging documents.</td>
<td><a href="https://home.treasury.gov/news/press-releases/sm1118">U.S. Treasury (Sep 10, 2020) &ndash; Derkach sanctioned as Russian agent</a><br /><a href="https://www.justice.gov/archives/opa/pr/active-russian-agent-andrii-derkach-indicted-scheme-violate-sanctions-united-states">U.S. DOJ (Dec 7, 2022) &ndash; Derkach indictment (sanctions/money laundering)</a><br /><a href="https://www.axios.com/2020/10/19/facebook-suspends-andrii-derkach-giuliani">Axios (Oct 19, 2020) &ndash; Derkach ties to Giuliani and sanctions context</a></td>
</tr>
<tr>
<td>Kostiantyn Kulyk</td>
<td>Ukraine political figures</td>
<td>Role: Ukraine politics; OFAC / sanctions; Ukraine/Biden narrative</td>
<td>Former Ukrainian prosecutor official; sanctioned by the U.S. Treasury in January 2021 as part of a Russia-linked influence network associated with Andrii Derkach.</td>
<td>Appears in reporting around Trump-era Ukraine/Biden controversy: the New Yorker described Giuliani shifting attention to Kulyk for information; U.S. Treasury action tied him to election influence allegations associated with Derkach.</td>
<td>U.S. Treasury sanctioned him as part of a Russia-linked foreign influence network associated with Andrii Derkach.</td>
<td><a href="https://home.treasury.gov/news/press-releases/sm1232">U.S. Treasury (Jan 11, 2021) &ndash; sanctions action incl. Kulyk</a><br /><a href="https://www.newyorker.com/magazine/2019/12/23/the-ukrainian-prosecutor-behind-trumps-impeachment">The New Yorker (Dec 23, 2019) &ndash; Giuliani attention to Kulyk</a></td>
</tr>
<tr>
<td>Konstantin Kilimnik</td>
<td>Foreign influence intermediaries</td>
<td>Role: Foreign intermediary; Mueller / Senate Intel</td>
<td>Political consultant and longtime associate of Paul Manafort; the U.S. Senate Intelligence Committee described Manafort&rsquo;s relationship with Kilimnik and highlighted information-sharing and contacts during the 2016 election period.</td>
<td>Connected through Paul Manafort&rsquo;s role as Trump&rsquo;s 2016 campaign chairman and Manafort&rsquo;s interactions with Kilimnik.</td>
<td>U.S. Senate Intelligence Committee reporting described Kilimnik as having ties to Russian intelligence.</td>
<td><a href="https://www.intelligence.senate.gov/sites/default/files/documents/report_volume5.pdf">U.S. Senate Intelligence Committee (Aug 2020) &ndash; Russia report (Vol. 5)</a><br /><a href="https://www.pbs.org/newshour/politics/manafort-shared-trump-polling-data-with-russia-linked-kilimnik-senate-report-says">PBS NewsHour (Aug 2020) &ndash; summary of Senate report and Manafort/Kilimnik</a></td>
</tr>
<tr>
<td>Peter Schweizer</td>
<td>U.S. media / commentary / research</td>
<td>Role: Media/research</td>
<td>Conservative author and researcher; president of the Government Accountability Institute (GAI) and author of books including &ldquo;Secret Empires.&rdquo; He has worked closely with Steve Bannon and operated within Mercer-funded conservative media/research networks.</td>
<td>Connected through close association with Steve Bannon (a senior Trump adviser in 2016&ndash;2017) and Mercer-backed political/media infrastructure that supported Trump.</td>
<td>No connections found.</td>
<td><a href="https://www.newyorker.com/magazine/2019/12/23/the-ukrainian-prosecutor-behind-trumps-impeachment">The New Yorker (Dec 23, 2019) &ndash; Schweizer, &ldquo;Secret Empires,&rdquo; and Ukraine/Biden narrative</a><br /><a href="https://www.washingtonpost.com/graphics/politics/mercer-bannon/">Washington Post (Mar 17, 2017) &ndash; Mercer funding for GAI</a><br /><a href="https://www.britannica.com/biography/Steve-Bannon">Britannica &ndash; Steve Bannon bio (mentions GAI co-founded with Schweizer)</a></td>
</tr>
<tr>
<td>Alexander Smirnov</td>
<td>Investigations / legal cases</td>
<td>Role: Legal case/inquiry; Ukraine/Biden narrative</td>
<td>Former FBI confidential human source charged in 2024 with making false statements and creating false records in connection with allegations about Burisma and the Bidens; later reporting and filings discussed alleged contacts with Russian officials.</td>
<td>No connection found.</td>
<td>Prosecutors alleged he had contacts with Russian intelligence officials; these are allegations in court filings, not a conviction.</td>
<td><a href="https://www.justice.gov/archives/sco-weiss/pr/grand-jury-returns-indictment-charging-fbi-confidential-human-source-felony-false">U.S. DOJ (Feb 15, 2024) &ndash; indictment announcement</a><br /><a href="https://www.pbs.org/newshour/show/informant-in-gops-biden-investigation-accused-of-lying-and-having-ties-to-russia">PBS NewsHour (Feb 21, 2024) &ndash; reporting on alleged Russia ties</a></td>
</tr>
<tr>
<td>John Solomon</td>
<td>U.S. media / commentary / research</td>
<td>Role: Media/research; Ukraine/Biden narrative</td>
<td>U.S. journalist and founder of Just the News; previously wrote columns for The Hill and appeared as a commentator. ProPublica reported on his coordination with Rudy Giuliani&rsquo;s associates in advancing Ukraine-related allegations in 2019.</td>
<td>Worked with Giuliani-linked figures and published material supportive of Trump&rsquo;s Ukraine/Biden narrative during the first impeachment era.</td>
<td>No connections found.</td>
<td><a href="https://www.propublica.org/article/how-a-veteran-reporter-worked-with-giuliani-associates-to-launch-the-ukraine-conspiracy">ProPublica (Oct 25, 2019) &ndash; Solomon and Giuliani associates</a><br /><a href="https://democracyforward.org/wp-content/uploads/2019/11/solomon-foia-complaint-filed.pdf">FOIA complaint (Nov 20, 2019 PDF) &ndash; Solomon/State Dept communications</a><br /><a href="https://www.newyorker.com/magazine/2019/12/23/the-ukrainian-prosecutor-behind-trumps-impeachment">The New Yorker (Dec 23, 2019) &ndash; Solomon described in impeachment-era reporting</a></td>
</tr>
<tr>
<td>Robert Herring Sr</td>
<td>U.S. media / commentary / research</td>
<td>Role: Media/research</td>
<td>American businessman; founder of Herring Networks and the owner of One America News Network (OAN), which became a prominent pro-Trump cable/satellite outlet.</td>
<td>Reuters described OAN as a network Donald Trump repeatedly praised and amplified, calling it the &ldquo;hottest&rdquo; on television.</td>
<td>Reuters reported that Herring lives with his third wife, described as a Russian immigrant/national.</td>
<td><a href="https://www.reuters.com/investigates/special-report/usa-oneamerica-founder/">Reuters Special Report (Oct 7, 2021) &ndash; profile of Herring and OAN</a></td>
</tr>
<tr>
<td>Ihor Kolomoyskyi</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business; Ukraine/Biden narrative</td>
<td>Ukrainian billionaire and media owner; former co-owner of PrivatBank and former governor of Dnipropetrovsk Oblast.</td>
<td>Reportedly approached by Rudy Giuliani during 2019 efforts to obtain Ukraine-related allegations about Joe Biden, per Reuters.</td>
<td>No connections found.</td>
<td><a href="https://2021-2025.state.gov/public-designation-of-oligarch-and-former-ukrainian-public-official-ihor-kolomoyskyy-due-to-involvement-in-significant-corruption/">U.S. State Dept (Mar 5, 2021) &ndash; public designation for significant corruption</a><br /><a href="https://www.justice.gov/archives/opa/pr/united-states-files-civil-forfeiture-complaint-proceeds-alleged-fraud-and-theft-privatbank">DOJ (Jan 20, 2022) &ndash; civil forfeiture complaint re PrivatBank proceeds</a><br /><a href="https://www.reuters.com/world/europe/us-designates-ukraines-kolomoyskyy-over-alleged-corruption-state-dept-2021-03-05/">Reuters (Mar 5, 2021) &ndash; U.S. designates Kolomoyskyy; notes Giuliani approach</a></td>
</tr>
<tr>
<td>Bruce Marks</td>
<td>U.S. political operatives / lobbyists / consultants</td>
<td>Role: U.S. operative; OFAC / sanctions</td>
<td>American attorney and former Pennsylvania Republican lawmaker; leads the law firm Marks &amp; Sokolov and has represented Russian and Ukrainian clients in U.S. courts.</td>
<td>Appeared as counsel with Trump ally John Eastman in a 2020 U.S. Supreme Court election-related filing for the Trump campaign, per Reuters.</td>
<td>Represents Russian interests in U.S. litigation; also reported as counsel for sanctioned Ukrainian businessman Serhiy (Sergey) Kurchenko, per Al Jazeera.</td>
<td><a href="https://www.reuters.com/legal/government/russia-returns-court-fight-us-lawsuit-over-jewish-manuscripts-2023-11-27/">Reuters (Nov 27, 2023) &ndash; Marks as counsel with John Eastman in Trump campaign case</a><br /><a href="https://www.aljazeera.com/features/2018/2/8/is-president-poroshenko-linked-to-a-dodgy-500m-deal">Al Jazeera (Feb 8, 2018) &ndash; Kurchenko represented by Bruce Marks</a></td>
</tr>
<tr>
<td>Serhiy (Sergey) Kurchenko</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business; OFAC / sanctions</td>
<td>Ukrainian businessman who rose rapidly in the early 2010s; later linked by U.S. authorities to sanctions-related conduct and misappropriation of Ukrainian state assets.</td>
<td>No connection found.</td>
<td>Sanctioned by the U.S. Treasury (OFAC) in 2015; U.S. DOJ filings describe him as sanctioned for misappropriating Ukrainian state assets/economically significant entities and relevant sanctions-evasion activity.</td>
<td><a href="https://home.treasury.gov/news/press-releases/jl0133">U.S. Treasury (Jul 30, 2015) &ndash; OFAC action (press release JL0133)</a><br /><a href="https://www.justice.gov/archives/opa/pr/second-conspirator-russia-ukraine-sanctions-violation-case-arrested">U.S. DOJ (Apr 19, 2023) &ndash; sanctions violation case notes Kurchenko sanctioned in 2015</a><br /><a href="https://www.justice.gov/archives/opa/pr/two-florida-steel-traders-sentenced-money-laundering-and-russia-ukraine-sanctions-violations">U.S. DOJ (Apr 19, 2024) &ndash; sentencing press release reiterating Kurchenko 2015 OFAC sanctions</a></td>
</tr>
<tr>
<td>Viktor Vekselberg</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business; OFAC / sanctions</td>
<td>Russian billionaire and founder of the Renova Group (a holding company with assets in energy, metals, and other sectors). The U.S. Treasury sanctioned Vekselberg and Renova in 2018 under Russia-related authorities.</td>
<td>A U.S. affiliate linked to Vekselberg&rsquo;s Renova (Columbus Nova) paid Michael Cohen for consulting in 2017; Reuters also reported Cohen met Vekselberg&rsquo;s cousin/associate shortly before Trump&rsquo;s inauguration.</td>
<td>Russian oligarch; sanctioned by the U.S. Treasury in 2018 and again targeted under later Russia-related actions.</td>
<td><a href="https://home.treasury.gov/news/press-releases/sm0338">U.S. Treasury (Apr 6, 2018) &ndash; Russia-related designations incl. Renova/Vekselberg</a><br /><a href="https://www.propublica.org/article/columbus-nova-russian-oligarch-michael-cohen-trump-lawyer-marc-kasowitz">ProPublica (May 9, 2018) &ndash; Columbus Nova payment to Cohen; Vekselberg link</a><br /><a href="https://www.reuters.com/article/world/trump-lawyer-met-russian-oligarch-shortly-before-inauguration-source-idUSKCN1IQ2IS/">Reuters (May 25, 2018) &ndash; Cohen met Vekselberg associate before inauguration</a></td>
</tr>
<tr>
<td>Simon Kukes</td>
<td>Oligarchs &amp; major business magnates</td>
<td>Role: Oligarch/business</td>
<td>Russian-born American oil executive and investor; served as CEO/Chairman of Yukos (2003&ndash;2004) and later led Samara-Nafta (a joint venture involving Hess), per executive biography and contemporaneous reporting.</td>
<td>Reporting described Kukes donating to pro-Trump committees in 2016 and being examined in reporting about Russia-linked money flows into Trump-aligned political funds.</td>
<td>Long career in the Russian oil sector (including Yukos/TNK-era roles) and reported contacts with Kremlin-linked figures in the context of political donations.</td>
<td><a href="https://people.equilar.com/bio/person/simon-kukes-pedevco-corp/22034333">Equilar executive bio &ndash; Kukes career (Yukos; Samara-Nafta/Hess JV)</a><br /><a href="https://archive-yaleglobal.yale.edu/content/yukos-names-kukes-new-ceo">YaleGlobal (Nov 4, 2003) &ndash; Yukos names Kukes CEO</a><br /><a href="https://abcnews.go.com/Politics/investigators-follow-flow-money-trump-wealthy-donors-russian/story?id=50100024">ABC News (Sep 26, 2017) &ndash; Mueller team questions Russia-linked money to Trump funds (incl. Kukes)</a><br /><a href="https://www.theguardian.com/us-news/2018/sep/28/russian-us-tycoon-boasted-of-active-involvement-in-trump-election-campaign-simon-kukes">The Guardian (Sep 28, 2018) &ndash; Kukes donations and claimed involvement in Trump campaign strategy</a></td>
</tr>
<tr>
<td>Sergei Askynov</td>
<td>Crimea/DPR/separatist officials</td>
<td>Role: Crimea/DPR; OFAC / sanctions; Crimea/DPR conflict</td>
<td>Name appears to refer to Sergey (Sergei) Aksyonov, a Russia-installed Crimean leader designated by the U.S. Treasury in 2014 under Ukraine-related sanctions authorities.</td>
<td>No connection found.</td>
<td>Designated by OFAC as a Crimea-based separatist leader (sanctioned under Ukraine-related authorities).</td>
<td><a href="https://home.treasury.gov/news/press-releases/jl2326">U.S. Treasury (Mar 17, 2014) &ndash; Aksyonov designated under E.O. 13660</a><br /><a href="https://sanctionssearch.ofac.treas.gov/Details.aspx?id=16642">OFAC Sanctions List Search &ndash; AKSYONOV entry</a></td>
</tr>
<tr>
<td>Anna Vladimirovna Anyukhin</td>
<td>Crimea/DPR/separatist officials</td>
<td>Role: Crimea/DPR; OFAC / sanctions; Crimea/DPR conflict</td>
<td>Name appears to refer to Anna Vladimirovna Anyukhina, a Crimean occupation official described by the U.S. Treasury as the so-called Minister for Property and Land Relations of Crimea and added to the SDN list in 2016.</td>
<td>No connection found.</td>
<td>Designated by OFAC in connection with Russia&rsquo;s occupation/annexation of Crimea (Ukraine-related sanctions).</td>
<td><a href="https://home.treasury.gov/news/press-releases/jl5048">U.S. Treasury (Sep 1, 2016) &ndash; designation incl. Anyukhina</a><br /><a href="https://ofac.treasury.gov/recent-actions/20160901">OFAC Recent Actions (Sep 1, 2016) &ndash; SDN additions incl. ANYUKHINA</a></td>
</tr>
<tr>
<td>Anatoly Antanov</td>
<td>Russian state officials &amp; diplomats</td>
<td>Role: Russian state</td>
<td>Name appears to refer to Anatoly Antonov, a Russian diplomat who served as Russia&rsquo;s ambassador to the United States (2017&ndash;2024) and previously held senior defense/foreign ministry roles.</td>
<td>Served as Russia&rsquo;s ambassador to the United States during the Trump administration (appointed 2017).</td>
<td>Senior Russian diplomat and former deputy defense minister/foreign ministry official; represented Russia in Washington during a period of intense U.S.&ndash;Russia tensions.</td>
<td><a href="https://www.wilsoncenter.org/person/amb-anatoly-antonov">Wilson Center &ndash; Anatoly Antonov bio</a><br /><a href="https://www.reuters.com/world/russian-ambassador-us-concludes-term-russian-agencies-report-2024-10-05/">Reuters (Oct 5, 2024) &ndash; Antonov concludes term as ambassador</a><br /><a href="https://pircenter.org/en/experts/antonov-anatoly-i/">PIR Center &ndash; Antonov career summary</a></td>
</tr>
<tr>
<td>Serhiy Arbuzov</td>
<td>Ukraine political figures</td>
<td>Role: Ukraine politics; OFAC / sanctions</td>
<td>Former head of Ukraine&rsquo;s National Bank and a senior Yanukovych-era official who briefly served as acting prime minister in 2014; Ukrainian reporting says he fled to Russia and later faced Ukrainian sanctions.</td>
<td>No connection found.</td>
<td>Reported by Ukrainian outlets as having fled to Russia after the 2014 Revolution of Dignity; later targeted by Ukrainian sanctions as a pro-Russian figure.</td>
<td><a href="https://kyivindependent.com/zelensky-sanctions-four-politicians-and-businessmen-including-former-national-bank-chief/">Kyiv Independent (Apr 12, 2025) &ndash; Arbuzov sanctioned; believed to have fled to Russia</a><br /><a href="https://english.nv.ua/nation/klyuyev-arbuzov-and-polishchuk-come-under-nsdc-sanctions-50505779.html">NV English (Apr 12, 2025) &ndash; Arbuzov among sanctioned Yanukovych-era officials</a></td>
</tr>
<tr>
<td>Eduard Basurin</td>
<td>Crimea/DPR/separatist officials</td>
<td>Role: Crimea/DPR; OFAC / sanctions; Crimea/DPR conflict</td>
<td>Senior spokesman/official associated with the Russia-backed Donetsk People&rsquo;s Republic (DPR) armed formations during the war in eastern Ukraine; designated by OFAC in 2016 under Ukraine-related authorities.</td>
<td>No connection found.</td>
<td>Sanctioned by the U.S. Treasury for separatist-related activities connected to Russia&rsquo;s destabilization of Ukraine.</td>
<td><a href="https://ofac.treasury.gov/recent-actions/20160901">OFAC Recent Actions (Sep 1, 2016) &ndash; SDN additions incl. BASURIN</a><br /><a href="https://www.federalregister.gov/documents/2016/09/08/2016-21590/sanctions-actions-pursuant-to-executive-orders-13660-13661-13662-and-13685">Federal Register (Sep 8, 2016) &ndash; notice listing BASURIN under E.O. 13660</a><br /><a href="https://data.europa.eu/apps/eusanctionstracker/individuals/">EU sanctions tracker &ndash; Basurin listed</a></td>
</tr>
<tr>
  <td>Darren (“Dan”) Beattie</td>
  <td>Trump campaign / administration</td>
  <td>Role: Trump-world official; State Dept public diplomacy; Revolver News</td>
  <td>American political operative and media publisher; former Trump White House speechwriter and founder of the pro-Trump news site <em>Revolver</em>. Reported to have served in a senior U.S. State Department public-diplomacy role during Trump’s second term.</td>
  <td>Former Trump White House staffer; later held a senior public-diplomacy role at the U.S. State Department in Trump’s second term (per reporting).</td>
  <td>Married to russian Yulia Kirillova whose, Russian businessman Sergei Chernikov as deep connections. Beattie’s public commentary is often anti-NATO and pro-russia.</td>
  <td>
    <a href="https://www.thetimes.com/us/american-politics/article/darren-beattie-wife-russia-putin-government-bnj50czm2" target="_blank" rel="noopener noreferrer">The Times (</a>
    |
    <a href="https://apnews.com/article/trump-russia-darren-beattie-state-department-disinformation-0f4a2db0fa4e1cb63a302d251f595a8d" target="_blank" rel="noopener noreferrer">AP News</a>
  </td>
</tr>
<tr>
<td>Dmitry Belik</td>
<td>Crimea/DPR/separatist officials</td>
<td>Role: Crimea/DPR; OFAC / sanctions; Crimea/DPR conflict</td>
<td>Russian politician and State Duma deputy representing Crimea/Sevastopol; sanctioned by the U.S. Treasury in 2016 for activities related to Russia&rsquo;s annexation of Crimea and the situation in Ukraine.</td>
<td>No connection found.</td>
<td>Designated by OFAC under Ukraine-related sanctions authorities; listed on the SDN list.</td>
<td><a href="https://home.treasury.gov/news/press-releases/jl0609">U.S. Treasury (Nov 14, 2016) &ndash; sanctions incl. Dmitry Belik</a><br /><a href="https://sanctionssearch.ofac.treas.gov/Details.aspx?id=20920">OFAC Sanctions List Search &ndash; BELIK entry</a></td>
</tr>
<tr>
<td>Denis Berezovsky</td>
<td>Crimea/DPR/separatist officials</td>
<td>Role: Crimea/DPR; Crimea/DPR conflict</td>
<td>Former Ukrainian navy commander who defected to Russia-backed Crimean authorities in March 2014 and was subsequently appointed to a senior post in Russia&rsquo;s Black Sea Fleet, according to contemporaneous reporting.</td>
<td>No connection found.</td>
<td>Defected to Russia-backed authorities during Crimea&rsquo;s 2014 seizure and entered Russian military service; appointed to a Black Sea Fleet command role.</td>
<td><a href="https://www.theguardian.com/world/2014/mar/03/ukraine-navy-officers-defect-russian-crimea-berezovsky">The Guardian (Mar 3, 2014) &ndash; Berezovsky defection and treason case context</a><br /><a href="https://www.kyivpost.com/content/ukraine/shoigu-appoints-ex-ukrainian-navy-commander-russian-black-sea-fleet-deputy-commander-340610.html">Kyiv Post (Mar 24, 2014) &ndash; Shoigu appoints Berezovsky to Black Sea Fleet role</a><br /><a href="https://tass.com/russia/725041">TASS (Mar 24, 2014) &ndash; Shoigu appointment announcement</a></td>
</tr>
</tbody>
</table>
<section
  id="works-cited"
  class="works-cited"
  data-works-cited-scope="#connectionsTable"
>
  <h2>Works Cited</h2>

  <h3>Books</h3>
  <ol class="apa-list">
    <li>
      Browder, B. (2015).
      <em>Red Notice: A True Story of High Finance, Murder, and One Man’s Fight for Justice</em>.
      Simon &amp; Schuster.
    </li>
    <li>
      Browder, B. (2023).
      <em>Freezing Order: A True Story of Russian Money Laundering, Murder, and Surviving Vladimir Putin’s Wrath</em>.
      Simon &amp; Schuster.
    </li>
    <li>
      Unger, C. (2018).
      <em>House of Trump, House of Putin: The Untold Story of Donald Trump and the Russian Mafia</em>.
      Dutton.
    </li>
    <li>
      Unger, C. (2021).
      <em>American Kompromat: How the KGB Cultivated Donald Trump, and Related Tales of Sex, Greed, Power, and Treachery</em>.
      Dutton.
    </li>
    <li>
      Grant, P. (n.d.).
      <em>While We Slept: Vladimir Putin, Donald Trump, and the Corruption of American Democracy</em>.
      [Publisher].
    </li>
    <li>
      Friedman, R. I. (n.d.).
      <em>Red Mafiya</em>.
      [Publisher].
    </li>
    <li>
      Hoffman, D. E. (n.d.).
      <em>The Oligarchs: Wealth and Power in the New Russia</em>.
      [Publisher].
    </li>
  </ol>

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