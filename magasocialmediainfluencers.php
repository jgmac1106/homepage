<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Companies connected to election interference &amp; influence campaigns</title>
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

<h1>Companies connected to election interference &amp; influence campaigns</h1>
<p class="note">
  Use the search, category filter, and tag chips to explore. Click a column header to sort.
</p>

<div id="tableControls">
  <input id="searchBox" type="search" placeholder="Search all columns…" />

  <select id="categoryFilter">
    <option value="">All categories</option>
  </select>

  <input id="tagsFilter" type="text" placeholder="Tags (comma-separated), e.g. disinformation, microtargeting" />

  <button id="clearFilters" type="button">Clear</button>

  <div id="resultCount"></div>
</div>

<table id="connectionsTable" border="1">
  <thead>
    <tr>
      <th>Company</th>
      <th>Category</th>
      <th>Tags</th>
      <th>Company description</th>
      <th>Role in 2016 election</th>
      <th>Role in 2020 election</th>
      <th>Primary people involved</th>
      <th>Sources / evidence links</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><div class="person-name">SCL Group / Cambridge Analytica</div></td>
      <td>Political data and influence firm</td>
      <td>psychographics, voter targeting, Facebook data scandal, Trump vendor</td>
      <td>
        SCL Group was the parent of Cambridge Analytica, which offered political data modeling and targeting services and became
        central to investigations into misuse of Facebook user data and political microtargeting practices.
      </td>
      <td>
        Worked with the Trump campaign as a data and targeting vendor during the 2016 cycle, with disputed claims about its
        real impact and extensive scrutiny after the Facebook data scandal.
      </td>
      <td>None</td>
      <td>Alexander Nix, Robert Mercer, Rebekah Mercer, Steve Bannon, Christopher Wylie, Brittany Kaiser</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.wired.com/story/what-did-cambridge-analytica-really-do-for-trumps-campaign/" target="_blank" rel="noopener">Wired: What Did Cambridge Analytica Really Do for Trump’s Campaign</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://en.wikipedia.org/wiki/Cambridge_Analytica" target="_blank" rel="noopener">Wikipedia: Cambridge Analytica</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">Palantir</div></td>
      <td>Data analytics and software company</td>
      <td>data platforms, Thiel-linked, reported CA contact</td>
      <td>
        U.S. data analytics firm and major government contractor. Reporting described at least one Palantir employee’s contact
        with Cambridge Analytica, while Palantir denied any formal relationship with CA or Facebook data harvesting.
      </td>
      <td>
        Indirect (reported): linked via reporting about an employee’s prior work or outreach connected to Cambridge Analytica,
        which later worked with the Trump campaign. Palantir disputes an official role.
      </td>
      <td>None (no public reporting found tying Palantir as a company to 2020 presidential election operations).</td>
      <td>Peter Thiel, Alex Karp</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.theguardian.com/uk-news/2018/mar/28/palantir-employee-cambridge-analytica" target="_blank" rel="noopener">The Guardian: Palantir employee and Cambridge Analytica reporting</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://money.cnn.com/2018/03/27/technology/palantir-cambridge-analytica-facebook-peter-thiel/index.html" target="_blank" rel="noopener">CNN: Palantir response and Cambridge Analytica links reporting</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.cnbc.com/2018/03/28/new-york-times-digital-peter-thiel-employee-helped-cambridge-analytica-before-it-harvested-data.html" target="_blank" rel="noopener">CNBC: NYT-based reporting on Palantir employee and CA</a>
      </td>
    </tr>

    <tr>
  <td><div class="person-name">AggregateIQ (AIQ)</div></td>

  <td>Political tech and digital campaigning vendor</td>

  <td>
      microtargeting,CA/SCL ecosystem
    </div>
  </td>

  <td>
    Canadian political technology firm based in British Columbia that built campaign tools and data-driven targeting systems.
    UpGuard reported in 2018 that a misconfigured AggregateIQ GitLab repository was publicly accessible and contained code and
    assets described as customized for the 2016 Ted Cruz presidential campaign and other political clients, raising questions
    about AIQ’s relationship to Cambridge Analytica and SCL.
  </td>

  <td>
    Reported role in the 2016 cycle via campaign technology used in the Ted Cruz primary effort (as described in the 2018 UpGuard
    leak analysis) and discussed in broader investigations and reporting about the Cambridge Analytica ecosystem.
  </td>

  <td>None</td>

  <td>Zack Massingham, Jeff Silvester</td>

  <td>
    <ul class="sourceList">
      <li>
        <a data-apa-author="UpGuard Team"
           data-apa-date="2018-03-26"
           data-apa-title="The Aggregate IQ Files, Part One: How a Political Engineering Firm Exposed Their Code Base"
           href="https://www.upguard.com/breaches/aggregate-iq-part-one"
           target="_blank" rel="noopener">UpGuard: The Aggregate IQ Files, Part One</a>
      </li>
      <li>
        <a data-apa-author="House of Commons Digital, Culture, Media and Sport Committee"
           data-apa-date="2019-02-18"
           data-apa-title="Disinformation and ‘fake news’: Final Report (HC 1791)"
           href="https://publications.parliament.uk/pa/cm201719/cmselect/cmcumeds/1791/1791.pdf"
           target="_blank" rel="noopener">UK Parliament DCMS: Disinformation and ‘fake news’ (Final Report)</a>
      </li>
      <li>
        <a data-apa-author="Wikipedia contributors"
           data-apa-date=""
           data-apa-title="AggregateIQ"
           href="https://en.wikipedia.org/wiki/AggregateIQ"
           target="_blank" rel="noopener">Wikipedia: AggregateIQ</a>
      </li>
    </ul>
  </td>
</tr>

    <tr>
      <td><div class="person-name">Concord Management and Consulting</div></td>
      <td>Russia-linked corporate entity tied to IRA financing</td>
      <td>IRA indictment, Prigozhin-linked, sanctions</td>
      <td>
        Russian entity identified by U.S. authorities as associated with financing or supporting Internet Research Agency
        operations that targeted U.S. political audiences.
      </td>
      <td>
        Indicted and sanctioned in connection with financing or supporting the IRA influence operation targeting the 2016 U.S.
        election.
      </td>
      <td>None (no specific 2020 role attributed publicly to Concord Management itself).</td>
      <td>Yevgeny Prigozhin (linked in U.S. government actions), related IRA leadership</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://home.treasury.gov/news/press-releases/sm577" target="_blank" rel="noopener">U.S. Treasury: sanctions action describing IRA-linked entities</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://en.wikipedia.org/wiki/Concord_Management_and_Consulting" target="_blank" rel="noopener">Wikipedia: Concord Management and Consulting</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">Philometrics</div></td>
      <td>Data analytics and surveying startup</td>
      <td>Aleksandr Kogan, Facebook data scandal link, psychometrics</td>
      <td>
        Company founded by Aleksandr Kogan (also reported as “Alex Spectre”), the academic connected to the Facebook app used
        to collect data later used by Cambridge Analytica, according to major reporting.
      </td>
      <td>None (no public reporting found tying Philometrics itself to the 2016 presidential campaign).</td>
      <td>None</td>
      <td>Aleksandr Kogan (Alex “Spectre” Kogan)</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.theguardian.com/news/2018/apr/24/aleksandr-kogan-cambridge-analytica-facebook-data-business-ventures" target="_blank" rel="noopener">The Guardian: Kogan and post-scandal business ventures</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.washingtonpost.com/business/economy/facebook-had-a-closer-relationship-than-it-disclosed-with-the-academic-it-called-a-liar/2018/03/22/ca0570cc-2df9-11e8-8688-e053ba58f1e4_story.html" target="_blank" rel="noopener">Washington Post: Facebook and Kogan reporting</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">Begemont Ventures (Begemot Ventures International)</div></td>
      <td>Political consulting and foreign influence advisory</td>
      <td>Sam Patten, Kilimnik-linked, FARA / illegal donation case</td>
      <td>
        Political consulting firm reported as formed by lobbyist Sam Patten and Konstantin Kilimnik, tied in reporting to
        foreign lobbying and an illegal foreign donation to the Trump inauguration in related court reporting.
      </td>
      <td>None.</td>
      <td>None</td>
      <td>Sam Patten, Konstantin Kilimnik</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.washingtonpost.com/local/public-safety/washington-consultant-for-ukraine-party-set-to-plead-guilty-to-violating-lobbyist-disclosure-law/2018/08/31/172cf2c8-ad23-11e8-a8d7-0f63ab8b1370_story.html" target="_blank" rel="noopener">Washington Post: Patten plea reporting and Begemot</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.pressherald.com/2018/08/31/maine-native-and-former-aide-to-sens-snowe-collins-pleads-guilty-to-violating-lobbyist-disclosure-law/" target="_blank" rel="noopener">Press Herald: Patten case reporting and Begemot</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">CloudCommerce</div></td>
      <td>Digital marketing and data analytics holding company</td>
      <td>Data Propria, Brad Parscale, Trump reelection reporting</td>
      <td>
        Public company described in reporting and SEC filings as owning subsidiaries including Parscale Digital and Data Propria,
        and connected to Brad Parscale through board and business relationships.
      </td>
      <td>None</td>
      <td>
        Reported parent company of Data Propria, which reporting described as working on Trump’s 2020 reelection effort and staffed
        by former Cambridge Analytica personnel.
      </td>
      <td>Brad Parscale, Matt Oczkowski, David Wilkinson</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.wired.com/story/data-propria-data-cambridge-analytica/" target="_blank" rel="noopener">Wired: Data Propria and CloudCommerce relationship</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://toronto.citynews.ca/2018/06/15/ap-trump-2020-working-with-ex-cambridge-analytica-staffers/" target="_blank" rel="noopener">AP (via CityNews): ex Cambridge Analytica staff on Trump 2020 effort</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.sec.gov/Archives/edgar/data/743758/000121390019017046/f1a2019_cloudcommerceinc.htm" target="_blank" rel="noopener">SEC filing: CloudCommerce description</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">Harris Media</div></td>
      <td>Political digital consulting and advertising</td>
      <td>issue ads, microtargeting, Secure America Now</td>
      <td>
        Conservative digital advertising firm reported to have run major ad campaigns for clients during the 2016 cycle, including
        anti Clinton and anti refugee messaging for the group Secure America Now.
      </td>
      <td>
        Ran digital ad campaigns during the 2016 election cycle for advocacy clients, including campaigns described as combining
        anti Hillary and anti Islam messaging.
      </td>
      <td>None (no public reporting found tying Harris Media directly to 2020 presidential election interference campaigns).</td>
      <td>Vincent Harris</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://fortune.com/2017/10/18/facebook-google-helped-conservative-group-during-2016-election/" target="_blank" rel="noopener">Fortune: Harris Media ads for Secure America Now</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">Flynn Intel Group</div></td>
      <td>Consulting and lobbying firm</td>
      <td>foreign lobbying scrutiny, Michael Flynn, FARA issues</td>
      <td>
        Consulting firm led by Michael Flynn that later faced scrutiny over foreign lobbying work, including work connected to
        Turkish interests reported widely in U.S. coverage.
      </td>
      <td>None (no public reporting found tying the company as a vendor to the 2016 campaign, apart from Flynn’s personal role).</td>
      <td>None</td>
      <td>Michael Flynn, Bijan Kian</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://en.wikipedia.org/wiki/Flynn_Intel_Group" target="_blank" rel="noopener">Wikipedia: Flynn Intel Group</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">White Canvas Group</div></td>
      <td>Defense and intelligence consulting contractor</td>
      <td>Pentagon contracts, Flynn associate reporting, social media project</td>
      <td>
        Consulting firm described in reporting as tied to VizSense and to individuals connected to Michael Flynn, with defense
        contracting history.
      </td>
      <td>
        Reported connection to Trump campaign work through individuals and related entities described in reporting on campaign
        spending and a social media project.
      </td>
      <td>None</td>
      <td>Jon Iadonisi, Tim Newberry</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.washingtonpost.com/politics/the-mystery-behind-a-flynn-associates-quiet-work-for-the-trump-campaign/2017/05/04/fc86980e-3044-11e7-9534-00e4656c22aa_story.html" target="_blank" rel="noopener">Washington Post: Colt Ventures / VizSense / White Canvas reporting</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">VizSense</div></td>
      <td>Social media and influencer analytics firm</td>
      <td>influencer analytics, Iadonisi, campaign spend reporting</td>
      <td>
        Social media company reported as co founded by Jon Iadonisi and linked in reporting to a network of firms discussed in
        coverage of Trump campaign expenditures.
      </td>
      <td>
        Linked in reporting to Trump campaign spending through a payment to Colt Ventures described as supporting a social media
        project in the final month of the campaign.
      </td>
      <td>None</td>
      <td>Jon Iadonisi, Tim Newberry</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.washingtonpost.com/politics/the-mystery-behind-a-flynn-associates-quiet-work-for-the-trump-campaign/2017/05/04/fc86980e-3044-11e7-9534-00e4656c22aa_story.html" target="_blank" rel="noopener">Washington Post: Colt Ventures payment and VizSense link</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://vizsense.com/" target="_blank" rel="noopener">VizSense official site</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">Colt Ventures</div></td>
      <td>Venture capital firm linked to campaign spending reporting</td>
      <td>FEC spending, data management services, Bannon orbit reporting</td>
      <td>
        Venture capital firm identified in reporting as receiving a Trump campaign payment for “data management services” and
        described as an investor in VizSense.
      </td>
      <td>
        Trump campaign reported paying $200,000 (Dec 2016) to Colt Ventures for “data management services” tied to a social media
        project, per reporting on campaign invoices.
      </td>
      <td>None</td>
      <td>Darren Blanton</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.washingtonpost.com/politics/the-mystery-behind-a-flynn-associates-quiet-work-for-the-trump-campaign/2017/05/04/fc86980e-3044-11e7-9534-00e4656c22aa_story.html" target="_blank" rel="noopener">Washington Post: Colt Ventures payment and context</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.cnbc.com/2017/07/06/martin-shkreli-lawyer-and-cowboy-venture-capitalist-duel-over-horses.html" target="_blank" rel="noopener">CNBC: references the Washington Post reporting on Colt Ventures</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">Narya Capital</div></td>
      <td>Venture capital firm</td>
      <td>JD Vance, Peter Thiel, Rumble investment</td>
      <td>
        Venture capital firm co founded by J D Vance and Colin Greenspon. Public releases and reporting describe Narya and partners
        investing in Rumble, including a board seat associated with the investment.
      </td>
      <td>None</td>
      <td>None</td>
      <td>J D Vance, Colin Greenspon, Ethan Fallang</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.prnewswire.com/news-releases/narya-and-peter-thiel-lead-investment-in-rumble-301295309.html" target="_blank" rel="noopener">PRNewswire: Narya and Peter Thiel lead investment in Rumble</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://en.wikipedia.org/wiki/JD_Vance" target="_blank" rel="noopener">Wikipedia: JD Vance (Narya background)</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">Rumble</div></td>
      <td>Online video platform and cloud services provider</td>
      <td>platformed political content, election misinformation, Thiel and Vance investors</td>
      <td>
        Video platform popular with parts of the political right. Coverage has described Rumble as a significant distribution
        venue for election misinformation and extremist content, with business ties to prominent conservative investors.
      </td>
      <td>None</td>
      <td>
        Platform role: widely used to distribute and amplify election misinformation narratives. This is a hosting and distribution
        role, not a documented coordinated campaign operation.
      </td>
      <td>Chris Pavlovski, J D Vance (investor), Peter Thiel (investor)</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://apnews.com/article/a6e627ac88463f9f83ada062ea83c6db" target="_blank" rel="noopener">AP: Rumble described as a haven for disinformation and extremism</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.prnewswire.com/news-releases/narya-and-peter-thiel-lead-investment-in-rumble-301295309.html" target="_blank" rel="noopener">PRNewswire: Narya and Thiel investment in Rumble</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">Locals</div></td>
      <td>Creator subscription and community platform</td>
      <td>creator monetization, political creators, acquired by Rumble</td>
      <td>
        Subscription platform used by independent creators, including political commentators. Acquired by Rumble in 2021.
      </td>
      <td>None</td>
      <td>None</td>
      <td>Dave Rubin (founder), Chris Pavlovski (Rumble)</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.prnewswire.com/news-releases/rumble-acquires-locals-to-help-build-a-bigger-creator-economy-301408700.html" target="_blank" rel="noopener">PRNewswire: Rumble acquires Locals (Oct 2021)</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://en.wikipedia.org/wiki/Locals" target="_blank" rel="noopener">Wikipedia: Locals</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">Psy-Group</div></td>
      <td>Private intelligence and influence operations firm</td>
      <td>social media manipulation, foreign influence scrutiny, Zamel</td>
      <td>
        Israeli private intelligence firm reported to offer online influence capabilities. Major reporting described a 2016 Trump
        Tower meeting involving a proposal connected to Joel Zamel and interest from investigators.
      </td>
      <td>
        Reported proposal stage: coverage described a meeting (Aug 3, 2016) where a pro Trump social media manipulation proposal
        was discussed. Public reporting conflicts on whether anything was executed.
      </td>
      <td>None</td>
      <td>Joel Zamel, George Nader (reported intermediary), Erik Prince (meeting arranger per reporting)</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.euronews.com/2018/05/19/trump-jr-met-gulf-princes-emissary-in-2016-who-offered-campaign-help-ny-times" target="_blank" rel="noopener">Reuters via Euronews: Aug 3, 2016 meeting and proposal reporting</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.newyorker.com/magazine/2019/02/18/private-mossad-for-hire" target="_blank" rel="noopener">The New Yorker: Psy-Group influence ops background</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">Black Cube</div></td>
      <td>Private intelligence firm</td>
      <td>private intelligence, investigations</td>
      <td>Israeli private intelligence firm known for corporate and litigation related investigations.</td>
      <td>None</td>
      <td>None</td>
      <td>Dan Zorella, Avi Janus</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://en.wikipedia.org/wiki/Black_Cube" target="_blank" rel="noopener">Wikipedia: Black Cube</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">Wikistrat</div></td>
      <td>Geopolitical consulting and strategic analysis</td>
      <td>Joel Zamel, scenario exercises, Mueller interest reporting</td>
      <td>
        Geopolitical consulting firm founded by Joel Zamel. Mentioned in reporting and summaries about Zamel’s activities and
        investigators’ interest in his relationships.
      </td>
      <td>
        Indirect: founder Joel Zamel involved in reported 2016 meeting about possible campaign assistance. No public reporting
        confirms Wikistrat itself was contracted by the Trump campaign.
      </td>
      <td>None</td>
      <td>Joel Zamel</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://en.wikipedia.org/wiki/Wikistrat" target="_blank" rel="noopener">Wikipedia: Wikistrat</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.euronews.com/2018/05/19/trump-jr-met-gulf-princes-emissary-in-2016-who-offered-campaign-help-ny-times" target="_blank" rel="noopener">Reuters via Euronews: Aug 3, 2016 meeting reporting</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">The Wellness Company</div></td>
      <td>Telehealth and wellness products</td>
      <td>telehealth, supplements</td>
      <td>
        Wellness and telehealth brand focused on direct to consumer services and products. No specific election interference or
        influence campaign role is publicly documented in major reporting.
      </td>
      <td>None</td>
      <td>None</td>
      <td>Not consistently identified in major reporting (varies by promotional materials and interviews)</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://twc.health/" target="_blank" rel="noopener">Official site: The Wellness Company</a>
      </td>
    </tr>

    <tr>
      <td><div class="person-name">Skyhorse Publishing</div></td>
      <td>Book publisher</td>
      <td>publishing, political books</td>
      <td>
        Independent publisher known for publishing political and current affairs titles, including works by controversial or
        politically prominent figures across cycles.
      </td>
      <td>None</td>
      <td>None</td>
      <td>Tony Lyons</td>
      <td>
        <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.skyhorsepublishing.com/about/" target="_blank" rel="noopener">Skyhorse Publishing: About</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="" href="https://www.vanityfair.com/news/2019/04/skyhorse-publishing-and-trump-world" target="_blank" rel="noopener">Vanity Fair: Skyhorse and Trump world coverage</a>
      </td>
    </tr>

      <tr>
      <td><div class="person-name">Explore Talent</div></td>
      <td>Online talent listing / casting platform</td>
      <td>casting, talent listings, influencer pipeline, consumer complaints</td>
      <td>
        Explore Talent is an online “talent listing” / casting-call platform that lets users create profiles and browse auditions.
        Mainstream coverage has described the business model as a listing service (not a traditional talent agency) and has noted
        industry criticism and consumer complaints about similar services. In 2021, the site National Justice claimed that multiple
        prominent conservative media and political figures previously maintained acting/modeling profiles on Explore Talent.
      </td>
      <td>
        None 
      </td>
      <td>
        Mellissa Carone—who appeared in Rudy Giuliani’s post‑election fraud claims—had a prior profile on the platform.
      </td>
      <td>
        Ami (Amiram Moshe) Shafrir (owner/CEO, per press releases and LA Times); (per National Justice) Candace Owens, Lauren Boebert,
        Tomi Lahren, Mellissa Carone, Scott Presler, Emma DiGiovine, Anna Khait, Tarah Price
      </td>
      <td>
        <a data-apa-author="Eric Striker" data-apa-date="2021-07-30" data-apa-title="National Justice Investigates: Rising Republican Party Influencers Got Their Start At Talent Agency Run By Israeli Pornographer"
           href="https://web.archive.org/web/20210730110606/https://national-justice.com/national-justice-investigates-rising-republican-party-influencers-got-their-start-talent-agency-run"
           target="_blank" rel="noopener">Wayback: National Justice (July 2021) on influencers’ Explore Talent profiles</a>
        | <a data-apa-author="Los Angeles Times" data-apa-date="2015-12-10" data-apa-title="Selling Stardom: Aspiring actors are reeled in by talent listing firms"
             href="https://www.latimes.com/business/la-et-selling-stardom-one-source-talent-explore-talent-firms-20151210-story.html"
             target="_blank" rel="noopener">LA Times: reporting on talent listing firms and Explore Talent</a>
        | <a data-apa-author="Better Business Bureau" data-apa-date="" data-apa-title="Explore Talent complaints"
             href="https://www.bbb.org/us/nv/las-vegas/profile/talent-listing/explore-talent-1086-75944/complaints"
             target="_blank" rel="noopener">BBB: Explore Talent complaints summary</a>
        | <a data-apa-author="PR Newswire" data-apa-date="2011-01-27" data-apa-title="Explore Talent Reaches 5 Million Members"
             href="https://www.prnewswire.com/news-releases/explore-talent-reaches-5-million-members-114732334.html"
             target="_blank" rel="noopener">PRNewswire: press release quoting Explore Talent CEO</a>
        | <a data-apa-author="" data-apa-date="" data-apa-title="Explore Talent"
             href="https://www.exploretalent.com/"
             target="_blank" rel="noopener">Official site: Explore Talent</a>
      </td>
      <tr>
  <td><div class="person-name">Tenet Media</div></td>

  <td>Media company / alleged covert foreign influence operation</td>

  <td>
russian funding,RT-linked,influence operation
  </td>

  <td>
    Tennessee-based online content company founded by Lauren Chen and Liam Donovan. DOJ alleges RT employees covertly funded
    and directed an unnamed “U.S. Company-1” via shell entities and fake personas to publish RT-curated political videos across
    major platforms; reporting identified U.S. Company-1 as Tenet Media.
  </td>

  <td>None (founded in 2022; allegations concern later activity).</td>

  <td>None (operations launched in/around late 2023; allegations primarily concern 2024).</td>

  <td>
    Lauren Chen, Liam Donovan; (alleged RT handlers) Kostiantyn Kalashnikov, Elena Afanasyeva;
    featured commentators reported to include Tim Pool, Dave Rubin, Benny Johnson, Lauren Southern, Tayler Hansen, Matt Christiansen
  </td>

  <td>
    <ul class="sourceList">
      <li>
        <a data-apa-author="U.S. Department of Justice (Office of Public Affairs)"
           data-apa-date="2024-09-04"
           data-apa-title="Two RT Employees Indicted for Covertly Funding and Directing U.S. Company that Published Thousands of Videos in Furtherance of Russian Interests"
           href="https://www.justice.gov/opa/pr/two-rt-employees-indicted-covertly-funding-and-directing-us-company-published-thousands"
           target="_blank" rel="noopener">DOJ press release (Sep. 4, 2024)</a>
      </li>
      <li>
        <a data-apa-author="United States District Court (Southern District of New York)"
           data-apa-date="2024-09-04"
           data-apa-title="United States v. Kalashnikov and Afanasyeva — Indictment (PDF)"
           href="https://www.justice.gov/d9/2024-09/u.s._v._kalashnikov_and_afanasyeva_indictment_0.pdf"
           target="_blank" rel="noopener">SDNY indictment (PDF)</a>
      </li>
      <li>
        <a data-apa-author="Reuters"
           data-apa-date="2024-09-06"
           data-apa-title="YouTube terminating Tenet Media channel after US indictment"
           href="https://www.reuters.com/technology/youtube-terminating-tenet-media-channel-after-us-indictment-2024-09-06/"
           target="_blank" rel="noopener">Reuters: identification/reporting and platform response (Sep. 6, 2024)</a>
      </li>
    </ul>
  </td>
</tr>


  </tbody>
</table>

<section id="works-cited" class="works-cited" data-works-cited-scope="#connectionsTable" data-works-cited-endpoint="/works_cited_meta.php">
  <h2>Works Cited (auto-generated)</h2>
  <ol id="works-cited-auto" class="apa-list"></ol>
  <p class="apa-note">Entries are generated from links in the table. Add <code>data-apa-author</code>, <code>data-apa-date</code>, and <code>data-apa-title</code> to any link to override metadata.</p>
</section>

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
    try {
      const resp = await fetch(endpoint, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ urls })
      });
      const json = await resp.json();
      metaByUrl = (json && json.items) ? json.items : {};
    } catch {
      metaByUrl = {};
    }

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

</body>
</html>
