<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<title>Epstein's Money Laundering Empire</title>

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
    min-width: 1100px; /* People table is wider now (Category/Role/Tags) */
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

.works-cited h2 { margin: 0 0 1rem 0; }
.works-cited h3 { margin: 1.5rem 0 0.75rem 0; }

.apa-list { margin: 0; padding-left: 2rem; }
.apa-list li {
  margin: 0 0 0.85rem 0;
  padding-left: 1.5rem;
  text-indent: -1.5rem;
  line-height: 1.5;
}
.apa-list a { word-break: break-word; overflow-wrap: anywhere; }
.apa-note { margin-top: 1rem; font-size: 0.95rem; opacity: 0.85; }
</style>
</head>

<body>
<h1>Jeffrey Epstein's Possible Money Laundering Connections</h1>

<div id="tableControls">
  <input id="searchBox" type="search" placeholder="Search all columns…" />
  <select id="categoryFilter">
    <option value="">All categories</option>
  </select>
  <input id="tagsFilter" type="text" placeholder="Tags (comma-separated), e.g. OFAC, grand jury subpoena" />
  <button id="clearFilters" type="button">Clear</button>
  <div id="resultCount"></div>
</div>
<!-- REPLACE your entire existing People/Entities table with this block -->
<h2>People / Entities (Epstein + Financial Crime Context)</h2>

<table id="connectionsTable" class="connections-table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Role</th>
      <th>Tags</th>
      <th>Brief biographical details</th>
      <th>Known connections to Jeffrey Epstein</th>
      <th>Known links to money laundering / financial crime</th>
      <th>Sources (excerpt / page)</th>
    </tr>
  </thead>

  <tbody>
    <!-- Jeffrey Epstein -->
    <tr>
      <td><div class="person-name">Jeffrey Epstein</div></td>
      <td>Individual</td>
      <td>Financier; convicted sex offender; subject of trafficking litigation</td>
      <td>Epstein, trafficking, financial-crimes probe, Towers Financial, subpoenas, cooperation</td>
      <td>
        Financier whose wealth/client base and alleged criminal enterprise have been the subject of extensive reporting and litigation;
        died in 2019 while in federal custody (death ruled suicide by medical examiner/DOJ reports).
      </td>
      <td>
        Reported long-term relationship with Les Wexner (as a major client/patron, in multiple reporting). Reported 1980s work alongside
        Steven Hoffenberg at Towers Financial (as a paid consultant, per Vicky Ward’s Rolling Stone text).
      </td>
      <td>
        <ul>
          <li><strong>Towers Financial allegations:</strong> Quartz reports Hoffenberg’s claim that Epstein was involved in Towers-era fraud, and that
              a later investor lawsuit alleged Epstein was an “uncharged co-conspirator” (Quartz notes Epstein was not charged in the Towers case).</li>
          <li><strong>Cooperation reporting:</strong> Vicky Ward reports she confirmed Epstein secretly cooperated against Hoffenberg and gave prosecutors
              at least three interviews.</li>
          <li><strong>Money-laundering probe reporting:</strong> Bloomberg reports prosecutors expanded the 2007 investigation to include potential money-laundering charges,
              sought subpoenas for Epstein’s financial transactions dating to 2003, and contacted a key client, per documents/emails Bloomberg reviewed.</li>
        </ul>
      </td>
      <td>
        <ul>
          <li>
            <a href="https://vickyward.com/article/was-jeffrey-epstein-a-spy/">Vicky Ward (text of Rolling Stone feature) — “Was Jeffrey Epstein a Spy?” (Jul 15, 2021)</a><br/>
            <em>Source excerpt / page:</em> Towers consultant role; Ward-confirmed cooperation/interviews; disputed/unprovable caveats on “spy/intelligence” claims.
          </li>
          <li>
            <a href="https://qz.com/1661999/jeffrey-epsteins-ex-mentor-accuses-him-of-fraud">Quartz — “Jeffrey Epstein’s ex-mentor accuses him of fraud”</a><br/>
            <em>Source excerpt / page:</em> “uncharged co-conspirator” allegation; Towers fraud context; “Epstein was never charged” in that case (per Quartz).
          </li>
          <li>
            <a href="https://www.bloomberg.com/features/2025-jeffrey-epstein-emails-money-laundering-charges/">Bloomberg — “Following Epstein’s Money” (Oct 31, 2025)</a><br/>
            <em>Source excerpt / page:</em> prosecutors expanded probe to include money laundering; broad subpoenas dating to 2003; outreach to key client.
          </li>
          <li>
            <a href="https://www.bloomberg.com/news/newsletters/2025-10-31/jeffrey-epstein-was-subject-of-money-laundering-probe">Bloomberg newsletter — “Jeffrey Epstein Was Subject of Money Laundering Probe” (Oct 31, 2025)</a><br/>
            <em>Source excerpt / page:</em> grand jury subpoena request for “every financial transaction” by Epstein and businesses dating to 2003.
          </li>
        </ul>
      </td>
    </tr>

    <!-- Les Wexner -->
    <tr>
      <td><div class="person-name">Leslie H. “Les” Wexner</div></td>
      <td>Individual</td>
      <td>Retail executive; founder of The Limited; former head of Limited Brands (L Brands)</td>
      <td>Wexner, client, philanthropy, Mega Group, prosecutor outreach</td>
      <td>
        Built The Limited into a major retail group. Co-founded (with Charles Bronfman) a private philanthropic network described by WSJ as the “Study Group”
        (informally the “Mega Group”), meeting privately and funding initiatives.
      </td>
      <td>
        Widely reported as a longtime financial client/patron of Jeffrey Epstein. Quartz notes Epstein became known in the early 2000s for managing money for Wexner.
        Bloomberg reports a federal prosecutor contacted Wexner during a 2007 financial-crimes inquiry into Epstein (per emails/documents Bloomberg reviewed).
      </td>
      <td>
        No public AML penalty against Wexner identified in the sources listed here; relevance is as a key Epstein client in reporting about financial scrutiny.
      </td>
      <td>
        <ul>
          <li>
            <a href="https://archive.ph/AFsGW">WSJ (archived) — “Titans of Industry Join Forces To Work for Jewish Philanthropy” (May 4, 1998)</a><br/>
            <em>Source excerpt / page:</em> “Study Group… ‘Mega Group’… formed… by Leslie Wexner… and Charles Bronfman… meets twice a year…”
          </li>
          <li>
            <a href="https://qz.com/1661999/jeffrey-epsteins-ex-mentor-accuses-him-of-fraud">Quartz</a><br/>
            <em>Source excerpt / page:</em> Epstein “became known… for managing money for Les Wexner…” (per Quartz).
          </li>
          <li>
            <a href="https://www.bloomberg.com/features/2025-jeffrey-epstein-emails-money-laundering-charges/">Bloomberg — “Following Epstein’s Money” (Oct 31, 2025)</a><br/>
            <em>Source excerpt / page:</em> prosecutor outreach to a key Epstein client (Wexner) described in documents/emails.
          </li>
        </ul>
      </td>
    </tr>

    <!-- Limited Brands / L Brands -->
    <tr>
      <td><div class="person-name">Limited Brands (L Brands) / The Limited (corporate lineage)</div></td>
      <td>Company</td>
      <td>Retail conglomerate (historical structure associated with Wexner)</td>
      <td>L Brands, Limited, retail, Wexner context</td>
      <td>
        Retail corporate group historically tied to The Limited and other brands (structure evolved over time).
      </td>
      <td>
        No direct enforcement action in the listed sources linking the company itself to Epstein; relevance is primarily contextual via Wexner.
      </td>
      <td>
        No Epstein-linked AML penalty identified for the company in the sources listed here.
      </td>
      <td>
        <ul>
          <li>
            <a href="https://archive.ph/AFsGW">WSJ (archived) — Mega Group context</a><br/>
            <em>Source excerpt / page:</em> Context for Wexner-linked network; company appears here only as background context.
          </li>
        </ul>
      </td>
    </tr>

    <!-- Bear Stearns -->
    <tr>
      <td><div class="person-name">Bear Stearns</div></td>
      <td>Company</td>
      <td>Investment bank; former employer of Jeffrey Epstein; offshore-vehicle tie via Paradise Papers reporting</td>
      <td>Bear Stearns, employment, Liquid Funding, Bermuda, Paradise Papers, hedge fund case</td>
      <td>
        Wall Street investment bank that employed Jeffrey Epstein in the late 1970s/early 1980s and later became associated with the 2007 Bear Stearns hedge fund collapse
        and the firm’s 2008 failure/acquisition.
      </td>
      <td>
        <ul>
          <li><strong>Employment / exit documents:</strong> SEC-hosted exhibits include Bear Stearns internal/letterhead documents around Epstein’s 1981 departure.</li>
          <li><strong>Offshore structure tie-in:</strong> ICIJ reports that from at least 2000–2007 Epstein chaired a Bermuda company (Liquid Funding Ltd) that was “partially owned” by Bear Stearns.</li>
        </ul>
      </td>
      <td>
        <ul>
          <li><strong>No finding in the cited materials that Bear Stearns “money laundered” for Epstein.</strong> Financial-crime relevance here is (a) the offshore structure context described by ICIJ and (b) separate Bear Stearns hedge fund fraud prosecutions (institutional context, not Epstein-specific).</li>
        </ul>
      </td>
      <td>
        <ul>
          <li>
            <a href="https://www.sec.gov/files/epstein-deposition-and-exhibits.pdf">SEC — “Jeffrey Epstein Transcript and Exhibits” (PDF)</a><br/>
            <em>Source excerpt / page:</em> Bear Stearns exit letters and internal memo (March 1981 documents; see PDF viewer pages around Bear Stearns exhibits).
          </li>
          <li>
            <a href="https://www.icij.org/investigations/paradise-papers/jeffrey-epsteins-offshore-fortune-traced-to-paradise-papers/">ICIJ — “Jeffrey Epstein’s offshore fortune traced to Paradise Papers” (Jul 18, 2019)</a><br/>
            <em>Source excerpt / page:</em> Liquid Funding Ltd (Bermuda), Epstein chaired 2000–2007; entity described as “partially owned” by Bear Stearns.
          </li>
        </ul>
      </td>
    </tr>

    <!-- Leon Black -->
    <tr>
      <td><div class="person-name">Leon Black</div></td>
      <td>Individual</td>
      <td>Private equity investor; co-founder and former CEO/Chair of Apollo Global Management</td>
      <td>Apollo, advisory fees, USVI settlement, Senate Finance, FinCEN</td>
      <td>
        Co-founder of Apollo Global Management and a prominent private equity investor. Stepped down from Apollo leadership in 2021 after an independent review
        of his past relationship with Jeffrey Epstein was released.
      </td>
      <td>
        Dechert LLP’s memo (commissioned by an Apollo board committee) describes a personal relationship that became a business relationship, with Epstein advising Black
        on estate/tax planning and family-office matters. Senate Finance Committee materials (and Reuters reporting) state Black paid Epstein $158 million between 2012 and 2017
        for financial advice, and Reuters reports Black paid $62.5 million to the U.S. Virgin Islands to avoid legal claims tied to an Epstein investigation.
      </td>
      <td>
        No public criminal finding of money laundering against Black in the sources below. Senate Finance Committee statements and related reporting scrutinize the payments and
        associated structures; a 2025 committee statement references FinCEN files and characterizes certain transactions as indicative of money laundering (committee characterization).
      </td>
      <td>
        <ul>
          <li>
            <a href="https://www.sec.gov/Archives/edgar/data/1411494/000119312521016405/d118102dex991.htm">SEC (Apollo 8-K Exhibit) — Dechert memorandum (Jan 22, 2021)</a><br/>
            <em>Source excerpt / page:</em> Summary of relationship/advice; “no evidence” of Black’s involvement in Epstein’s criminal activities (as stated in memo).
          </li>
          <li>
            <a href="https://www.finance.senate.gov/chairmans-news/wyden-unveils-ongoing-investigation-into-private-equity-billionaire-leon-blacks-tax-planning-and-financial-ties-with-jeffrey-epstein">Senate Finance Committee — investigation announcement (Jul 25, 2023)</a><br/>
            <em>Source excerpt / page:</em> committee description of $158M payments; issues to be examined.
          </li>
          <li>
            <a href="https://www.reuters.com/legal/investor-leon-black-settles-with-us-virgin-islands-over-epstein-probe-2023-07-21/">Reuters — Black USVI settlement (Jul 21, 2023)</a><br/>
            <em>Source excerpt / page:</em> $62.5M settlement; spokesperson denial of knowledge/participation in misconduct.
          </li>
          <li>
            <a href="https://www.finance.senate.gov/ranking-members-news/following-new-epstein-revelations-wyden-renews-demand-for-trump-administration-to-produce-epstein-files">Senate Finance Committee — statement referencing FinCEN files (Jun 17, 2025)</a><br/>
            <em>Source excerpt / page:</em> “dubious transactions indicative of money laundering” (committee characterization).
          </li>
        </ul>
      </td>
    </tr>

    <!-- Steven Hoffenberg -->
    <tr>
      <td><div class="person-name">Steven (Jude) Hoffenberg</div></td>
      <td>Individual</td>
      <td>Financier; former head of Towers Financial; convicted fraudster</td>
      <td>Towers Financial, Ponzi scheme, cooperation, fraud allegations</td>
      <td>
        Former head of Towers Financial. Vicky Ward describes him as serving an 18-year sentence tied to a ~$450M Ponzi scheme.
      </td>
      <td>
        Ward reports Epstein worked as a paid consultant alongside Hoffenberg in the 1980s; Ward also reports she confirmed Epstein secretly cooperated against Hoffenberg
        and gave prosecutors at least three interviews. Quartz describes Hoffenberg as an ex-mentor who accused Epstein of involvement in Towers-era fraud.
      </td>
      <td>
        Convicted in a major fraud/Ponzi case (Towers). Ward reports Hoffenberg’s allegations about offshore movement of funds and Epstein’s cooperation; Quartz reports a later investor lawsuit
        alleging Epstein was an “uncharged co-conspirator” (Quartz notes Epstein was not charged in the Towers case).
      </td>
      <td>
        <ul>
          <li>
            <a href="https://vickyward.com/article/was-jeffrey-epstein-a-spy/">Vicky Ward (text of Rolling Stone feature)</a><br/>
            <em>Source excerpt / page:</em> Epstein as paid consultant; Ward-confirmed cooperation/interviews; disputed/unprovable caveats.
          </li>
          <li>
            <a href="https://qz.com/1661999/jeffrey-epsteins-ex-mentor-accuses-him-of-fraud">Quartz</a><br/>
            <em>Source excerpt / page:</em> Towers fraud context; lawsuit calling Epstein an “uncharged co-conspirator”; “Epstein was never charged” (per Quartz).
          </li>
        </ul>
      </td>
    </tr>

    <!-- Edward DeBartolo -->
    <tr>
      <td><div class="person-name">Edward J. DeBartolo</div></td>
      <td>Individual</td>
      <td>Real estate developer; sports-business figure (49ers ownership family)</td>
      <td>Document-mention, investigative compilation</td>
      <td>
        Prominent U.S. real-estate developer and principal in the DeBartolo family’s sports/business history.
      </td>
      <td>
        No Epstein connection established in the sources listed here.
      </td>
      <td>
        Appears as a name in an Archive.org investigative compilation you provided. Inclusion in an investigative document set is not, by itself, proof of wrongdoing.
      </td>
      <td>
        <ul>
          <li>
            <a href="https://archive.org/details/shapiromurderfilecomplete1/mode/2up">Archive.org — “Shapiro murder file” compilation</a><br/>
            <em>Source excerpt / page:</em> varies by viewer; use in-document search for “DeBartolo.”
          </li>
        </ul>
      </td>
    </tr>

    <!-- Charles Bronfman -->
    <tr>
      <td><div class="person-name">Charles Bronfman</div></td>
      <td>Individual</td>
      <td>Businessman; philanthropist (Bronfman/Seagram family)</td>
      <td>Mega Group, Study Group, philanthropy</td>
      <td>
        Businessman and philanthropist associated with the Bronfman/Seagram fortune.
      </td>
      <td>
        No specific Epstein link established in the sources listed here; relevant here as co-founder (with Wexner) of the “Study Group / Mega Group” described by WSJ.
      </td>
      <td>
        No money-laundering link identified in the sources listed here.
      </td>
      <td>
        <ul>
          <li>
            <a href="https://archive.ph/AFsGW">WSJ (archived) — Mega Group</a><br/>
            <em>Source excerpt / page:</em> Group “formed… by Leslie Wexner… and Charles Bronfman…” (archived text).
          </li>
        </ul>
      </td>
    </tr>

    <!-- NXIVM -->
    <tr>
      <td><div class="person-name">NXIVM</div></td>
      <td>Organization</td>
      <td>Self-help/MLM group later prosecuted as racketeering enterprise</td>
      <td>NXIVM, Raniere, racketeering, criminal enterprise</td>
      <td>
        Organization led by Keith Raniere; subject of federal prosecutions and convictions.
      </td>
      <td>No Epstein connection established in the sources listed here.</td>
      <td>
        Criminal enterprise/racketeering findings in NXIVM prosecutions (separate from Epstein-linked AML enforcement).
      </td>
      <td>
        <ul>
          <li><a href="https://en.wikipedia.org/wiki/NXIVM">Wikipedia — NXIVM</a> (secondary overview)</li>
        </ul>
      </td>
    </tr>

    <!-- Yuri Dubinin -->
    <tr>
      <td><div class="person-name">Yuri Dubinin</div></td>
      <td>Individual</td>
      <td>Soviet/Russian diplomat</td>
      <td>Diplomat, Russia/US relations</td>
      <td>Soviet/Russian diplomat who served in senior ambassador roles.</td>
      <td>No Epstein connection established in the sources listed here.</td>
      <td>No money-laundering link identified in the sources listed here.</td>
      <td>
        <ul>
          <li><a href="https://en.wikipedia.org/wiki/Yuri_Dubinin">Wikipedia — Yuri Dubinin</a> (secondary overview)</li>
        </ul>
      </td>
    </tr>

    <!-- Leonard Lauder -->
    <tr>
      <td><div class="person-name">Leonard A. Lauder</div></td>
      <td>Individual</td>
      <td>Estée Lauder executive; philanthropist</td>
      <td>Philanthropy, business leader</td>
      <td>Longtime executive and philanthropist associated with Estée Lauder.</td>
      <td>No Epstein connection established in the sources listed here.</td>
      <td>No money-laundering link identified in the sources listed here.</td>
      <td>
        <ul>
          <li><a href="https://en.wikipedia.org/wiki/Leonard_Lauder">Wikipedia — Leonard Lauder</a> (secondary overview)</li>
        </ul>
      </td>
    </tr>

    <!-- Alan Greenberg -->
    <tr>
      <td><div class="person-name">Alan “Ace” Greenberg</div></td>
      <td>Individual</td>
      <td>Bear Stearns executive/leader</td>
      <td>Bear Stearns, employment, reporting claim</td>
      <td>
        Senior Bear Stearns figure credited with shaping the firm’s culture and growth.
      </td>
      <td>
        NY Post (summarizing New York Times reporting) claims Epstein dated Greenberg’s daughter while at Bear Stearns and that the relationship contributed
        to Epstein’s continued employment despite résumé concerns (as reported by NY Post).
      </td>
      <td>
        No Epstein-linked AML penalty tied to Greenberg identified in the sources listed here (this is employment/network context).
      </td>
      <td>
        <ul>
          <li>
            <a href="https://nypost.com/2025/12/16/business/jeffrey-epstein-kept-bear-stearns-job-after-resume-lie-while-dating-bosss-daughter/">NY Post (Dec 16, 2025)</a><br/>
            <em>Source excerpt / page:</em> résumé issue + relationship with boss’s daughter; “protected status” framing (NY Post summary of NYT reporting).
          </li>
          <li><a href="https://en.wikipedia.org/wiki/Alan_C._Greenberg">Wikipedia — Alan Greenberg</a> (secondary overview)</li>
        </ul>
      </td>
    </tr>

    <!-- Douglas Leese -->
    <tr>
      <td><div class="person-name">Douglas Leese</div></td>
      <td>Individual</td>
      <td>British defense contractor (as described); alleged Epstein mentor in 1980s</td>
      <td>Mentor allegation, arms networks, disputed claims</td>
      <td>
        Described by Vicky Ward as a British defense contractor (died 2011).
      </td>
      <td>
        Ward reports Hoffenberg’s claim that Leese was a pivotal mentor figure who introduced Epstein to aristocratic Europeans and to arms-business networks
        (including Adnan Khashoggi) and allegedly Robert Maxwell; Ward also reports Leese’s son said his father mentored Epstein.
      </td>
      <td>
        Appears in an arms/defense-network context in Ward’s account; Ward notes many intelligence/“national security” claims are difficult to prove and disputed.
      </td>
      <td>
        <ul>
          <li>
            <a href="https://vickyward.com/article/was-jeffrey-epstein-a-spy/">Vicky Ward (text of Rolling Stone feature)</a><br/>
            <em>Source excerpt / page:</em> Leese as mentor; introductions; son’s statement; disputed/unprovable caveats.
          </li>
        </ul>
      </td>
    </tr>

    <!-- Robert Maxwell -->
    <tr>
      <td><div class="person-name">Robert Maxwell</div></td>
      <td>Individual</td>
      <td>British media proprietor; father of Ghislaine Maxwell</td>
      <td>Ghislaine Maxwell, pension scandal, disputed claims</td>
      <td>
        British media magnate who died in 1991; widely reported scandal involved theft from employee pension funds.
      </td>
      <td>
        Connection to Epstein primarily via Ghislaine Maxwell. Ward also reports Hoffenberg’s claim that Epstein told him he worked on projects with Maxwell,
        while emphasizing “spy/intelligence” narratives are disputed and often unprovable.
      </td>
      <td>
        Maxwell’s financial scandal history is separate from Epstein’s bank/AML enforcement; no Epstein-linked AML penalty item identified for Maxwell in the sources listed here.
      </td>
      <td>
        <ul>
          <li>
            <a href="https://vickyward.com/article/was-jeffrey-epstein-a-spy/">Vicky Ward (text of Rolling Stone feature)</a><br/>
            <em>Source excerpt / page:</em> Hoffenberg’s claim Epstein worked with Maxwell; Ward’s disputed/unprovable caveats.
          </li>
          <li><a href="https://en.wikipedia.org/wiki/Robert_Maxwell">Wikipedia — Robert Maxwell</a> (secondary overview)</li>
        </ul>
      </td>
    </tr>

    <!-- Jean-Luc Brunel -->
    <tr>
      <td><div class="person-name">Jean-Luc Brunel</div></td>
      <td>Individual</td>
      <td>French model agent; accused in trafficking/sexual assault cases</td>
      <td>Associate, recruitment allegations</td>
      <td>
        French model agent implicated in multiple allegations; faced criminal proceedings in France; died in custody in 2022 (death ruled suicide by French authorities).
      </td>
      <td>
        Frequently described as an Epstein associate in recruitment/trafficking allegation contexts.
      </td>
      <td>
        No specific AML penalty identified in the sources listed here; primary exposure is trafficking/assault allegations and prosecutions.
      </td>
      <td>
        <ul>
          <li><a href="https://en.wikipedia.org/wiki/Jean-Luc_Brunel">Wikipedia — Jean-Luc Brunel</a> (secondary overview)</li>
        </ul>
      </td>
    </tr>

    <!-- John Stanley Pottinger -->
    <tr>
      <td><div class="person-name">John Stanley “Stan” Pottinger</div></td>
      <td>Individual</td>
      <td>Attorney; former senior U.S. DOJ official</td>
      <td>Attorney, Giuffre exhibit, October Surprise, Hashemi counsel</td>
      <td>
        American lawyer and former DOJ official; later in private practice.
      </td>
      <td>
        Appears in Epstein-litigation-era materials as an attorney contact for Virginia Giuffre (e.g., “c/o Stan Pottinger” in an exhibit list).
      </td>
      <td>
        Referenced in historical investigative materials as counsel for Cyrus Hashemi in Iran-arms / October Surprise-era contexts (separate from Epstein-era AML enforcement).
      </td>
      <td>
        <ul>
          <li>
            <a href="https://law.justia.com/cases/federal/district-courts/florida/flsdce/9%3A2008cv80736/317960/26/">Justia mirror — Giuffre v. Maxwell exhibit</a><br/>
            <em>Source excerpt / page:</em> contact list includes “Virginia Roberts (Giuffre) c/o Stan Pottinger.”
          </li>
          <li>
            <a href="https://archive.org/details/ReportOfTheSpecialCounselOnTheOctoberSurpriseAllegationsAndTheCircumstancesSurro/page/n4/mode/1up">October Surprise Special Counsel Report (Archive.org)</a><br/>
            <em>Source excerpt / page:</em> use in-document search for “Pottinger” and “Hashemi.”
          </li>
          <li>
            <a href="https://web.archive.org/web/20170828130507/https://www.washingtonpost.com/archive/politics/1984/07/19/2-plead-guilty-in-iran-arms-case/e1f20510-2c93-46a0-909a-29c29490fb4a/">Washington Post (archived, Jul 19, 1984)</a><br/>
            <em>Source excerpt / page:</em> Iran-arms case coverage referencing counsel.
          </li>
        </ul>
      </td>
    </tr>

    <!-- Cyrus Hashemi -->
    <tr>
      <td><div class="person-name">Cyrus Hashemi</div></td>
      <td>Individual</td>
      <td>Business figure referenced in Iran-arms / October Surprise-era reporting</td>
      <td>Iran-arms reporting, October Surprise</td>
      <td>
        Banker/business figure appearing in Iran-arms reporting and October Surprise-era investigative materials.
      </td>
      <td>No Epstein connection established in the sources listed here.</td>
      <td>Referenced in historical investigations/case coverage tied to Iran-arms matters (separate from Epstein-era AML enforcement).</td>
      <td>
        <ul>
          <li><a href="https://archive.org/details/ReportOfTheSpecialCounselOnTheOctoberSurpriseAllegationsAndTheCircumstancesSurro/page/n4/mode/1up">October Surprise Special Counsel Report (Archive.org)</a></li>
          <li><a href="https://web.archive.org/web/20170828130507/https://www.washingtonpost.com/archive/politics/1984/07/19/2-plead-guilty-in-iran-arms-case/e1f20510-2c93-46a0-909a-29c29490fb4a/">Washington Post (archived, Jul 19, 1984)</a></li>
        </ul>
      </td>
    </tr>

    <!-- Reza Hashemi -->
    <tr>
      <td><div class="person-name">Reza Hashemi</div></td>
      <td>Individual</td>
      <td>Iran-arms case figure (as reported)</td>
      <td>Iran-arms reporting</td>
      <td>Name appears in 1984 Iran-arms-case reporting in connection with Hashemi family activity.</td>
      <td>No Epstein connection established in the sources listed here.</td>
      <td>Referenced in historical Iran-arms case reporting (separate from Epstein-era AML enforcement).</td>
      <td>
        <ul>
          <li><a href="https://web.archive.org/web/20170828130507/https://www.washingtonpost.com/archive/politics/1984/07/19/2-plead-guilty-in-iran-arms-case/e1f20510-2c93-46a0-909a-29c29490fb4a/">Washington Post (archived, Jul 19, 1984)</a></li>
        </ul>
      </td>
    </tr>
  </tbody>
</table>



<h2>Bank settlements / AML penalties connected to Epstein</h2>

<table class="connections-table">
  <thead>
    <tr>
      <th>Institution</th>
      <th>Type</th>
      <th>Amount</th>
      <th>Date (announced/approved)</th>
      <th>What it covered</th>
      <th>Sources (excerpt / page)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>JPMorgan Chase &amp; Co.</td>
      <td>Victim settlement (class action)</td>
      <td>$290 million</td>
      <td>Approved Nov 2023</td>
      <td>Settlement with Epstein survivors alleging the bank facilitated/ignored red flags related to Epstein’s trafficking operation.</td>
      <td><ul><li><a href="https://www.reuters.com/legal/jpmorgan-epstein-victims-settlement-approved-by-us-judge-2023-11-09/">Reuters — approval of JPMorgan $290M settlement</a></li></ul></td>
    </tr>

    <tr>
      <td>Deutsche Bank</td>
      <td>Victim settlement (class action)</td>
      <td>$75 million</td>
      <td>Final approval Oct 2023</td>
      <td>Settlement with Epstein survivors alleging facilitation/ignored red flags.</td>
      <td><ul><li><a href="https://www.reuters.com/legal/us-judge-approves-deutsche-bank-75-million-settlement-with-epstein-accusers-2023-10-20/">Reuters — approval of Deutsche Bank $75M settlement</a></li></ul></td>
    </tr>

    <tr>
      <td>Deutsche Bank (NY Branch / DBTCA)</td>
      <td>AML / compliance penalty</td>
      <td>$150 million</td>
      <td>July 2020</td>
      <td>NYDFS penalty/consent order citing significant compliance/AML failures connected to Deutsche Bank’s relationship with Epstein.</td>
      <td>
        <ul>
          <li><a href="https://www.dfs.ny.gov/reports_and_publications/press_releases/pr202007071">NYDFS press release — Deutsche Bank $150M penalty</a></li>
          <li><a href="https://www.dfs.ny.gov/industry_guidance/enforcement_discipline/ea20200706_deutsche_bank">NYDFS consent order — Deutsche Bank</a></li>
        </ul>
      </td>
    </tr>

    <tr>
      <td>JPMorgan Chase &amp; Co.</td>
      <td>Government settlement (USVI)</td>
      <td>$75 million</td>
      <td>Sept 2023</td>
      <td>Settlement with U.S. Virgin Islands to resolve claims the bank aided Epstein’s trafficking enterprise.</td>
      <td>
        <ul>
          <li><a href="https://www.reuters.com/world/us/jpmorgan-settles-epstein-lawsuit-with-us-virgin-islands-75-mln-2023-09-26/">Reuters — JPMorgan $75M USVI settlement</a></li>
          <li><a href="https://www.theguardian.com/business/2023/sep/26/jpmorgan-jeffrey-epstein-lawsuit-settlement-us-virgin-islands">The Guardian — USVI settlement coverage</a></li>
        </ul>
      </td>
    </tr>

    <tr>
      <td>Bank of Credit and Commerce International (BCCI)</td>
      <td>Historical AML / fraud scandal (context row)</td>
      <td>N/A (not an Epstein settlement)</td>
      <td>Public scandal/closure 1991; major U.S. criminal case activity 1991–1992</td>
      <td>
        Not an Epstein-related settlement (included as major AML context). Senate report describes an evasion-focused corporate structure (“spider-web”),
        falsification/manipulation of records, and broad criminal facilitation; CIA reading-room packet includes a UPI clip summarizing testimony about suspected
        laundering and inter-agency notification controversy.
      </td>
      <td>
        <ul>
          <li><a href="https://irp.fas.org/congress/1992_rpt/bcci/04crime.htm">U.S. Senate report (FAS/IRP mirror) — “BCCI’s Criminality”</a></li>
          <li><a href="https://www.cia.gov/readingroom/docs/CIA-RDP99-01448R000401700007-0.pdf">CIA Reading Room PDF packet (UPI clip)</a></li>
          <li><a href="https://www.upi.com/Archives/1991/10/25/CIA-did-not-pass-on-BCCI-information-to-Feds/6964688363200/">UPI Archives (Oct 25, 1991)</a></li>
        </ul>
      </td>
    </tr>

    <tr>
      <td>Epstein-related federal money-laundering probe (reported)</td>
      <td>Context (reported probe)</td>
      <td>N/A</td>
      <td>Reported Oct 2025</td>
      <td>Bloomberg reports prosecutors expanded the 2007 Epstein investigation to include potential money-laundering charges and sought broad subpoenas for financial transactions.</td>
      <td>
        <ul>
          <li><a href="https://www.bloomberg.com/features/2025-jeffrey-epstein-emails-money-laundering-charges/">Bloomberg — “Following Epstein’s Money” (Oct 31, 2025)</a></li>
          <li><a href="https://www.bloomberg.com/news/newsletters/2025-10-31/jeffrey-epstein-was-subject-of-money-laundering-probe">Bloomberg newsletter (Oct 31, 2025)</a></li>
        </ul>
      </td>
    </tr>
  </tbody>
</table>

<h2>Non-bank Epstein-related settlements (civil / governmental / compensation)</h2>

<table class="connections-table">
  <thead>
    <tr>
      <th>Party / Program</th>
      <th>Type</th>
      <th>Amount</th>
      <th>Date (announced/approved)</th>
      <th>What it covered</th>
      <th>Sources (excerpt / page)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Estate of Jeffrey Epstein + co-executors / entities (USVI action)</td>
      <td>Government settlement (USVI)</td>
      <td>$105M cash + additional terms (per USVI)</td>
      <td>Dec 2022</td>
      <td>Settlement resolving USVI’s civil case against Epstein’s estate and related entities.</td>
      <td><ul><li><a href="https://usvidoj.com/u-s-virgin-islands-attorney-general-settles-sex-trafficking-case-against-estate-of-jeffrey-epstein-and-co-defendants-for-over-105-million/">USVI DOJ press release — estate settlement</a></li></ul></td>
    </tr>

    <tr>
      <td>Leon Black — USVI settlement</td>
      <td>Government settlement (USVI)</td>
      <td>$62.5 million</td>
      <td>Reported July 2023</td>
      <td>Reported settlement with the U.S. Virgin Islands to avoid legal claims tied to the USVI’s Epstein investigation.</td>
      <td><ul><li><a href="https://www.reuters.com/legal/investor-leon-black-settles-with-us-virgin-islands-over-epstein-probe-2023-07-21/">Reuters — Leon Black $62.5M USVI settlement</a></li></ul></td>
    </tr>

    <tr>
      <td>Epstein Victims’ Compensation Program (estate-funded)</td>
      <td>Compensation (program payouts)</td>
      <td>&gt;$121 million (reported total)</td>
      <td>Aug 2021 (reported completion)</td>
      <td>Program reported as completing payouts totaling more than $121M to claimants/survivors.</td>
      <td><ul><li><a href="https://www.reuters.com/world/us/jeffrey-epstein-victims-fund-awards-125-mln-claims-process-ends-2021-08-09/">Reuters — EVCP totals and completion</a></li></ul></td>
    </tr>

    <tr>
      <td>Prince Andrew — civil settlement with Virginia Giuffre</td>
      <td>Civil settlement</td>
      <td>Undisclosed (officially)</td>
      <td>Feb 2022</td>
      <td>Out-of-court settlement; official statements did not disclose the amount.</td>
      <td><ul><li><a href="https://time.com/6149123/prince-andrew-settlement-virginia-giuffre-royal-finances/">TIME — notes amount undisclosed</a></li></ul></td>
    </tr>
  </tbody>
</table>

<section id="works-cited" class="works-cited" data-works-cited-scope="#connectionsTable" data-works-cited-endpoint="/works_cited_meta.php">
  <h3>Articles &amp; reports linked in the table</h3>
  <ol id="works-cited-auto" class="apa-list"></ol>

  <p class="apa-note">
    <strong>Note:</strong> The Works Cited generator uses link metadata when available. You can override any link by adding
    <code>data-apa-author</code>, <code>data-apa-date</code>, and <code>data-apa-title</code> attributes to the <code>&lt;a&gt;</code>.
  </p>
</section>

<script>
(() => {
  // ====== SETTINGS ======
  const TAG_MATCH_MODE = "AND"; // "AND" = must include all selected tags; "OR" = any selected tag
  const TABLE_SELECTOR = "#connectionsTable"; // filter/sort only the main People table

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

  // ====== CATEGORY DROPDOWN ======
  const populateCategories = () => {
    if (idxCategory < 0) return;
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
    if (idxTags < 0) return;
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
    const q = (searchBox.value || "").trim().toLowerCase();
    const cat = (categoryFilter.value || "").trim();
    const wantTags = parseTagList(tagsFilter.value || "");

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

    resultCount.textContent = `${visible} / ${rows.length} rows`;
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
  searchBox.addEventListener("input", () => { applyFilters(); highlightActiveChips(); });
  categoryFilter.addEventListener("change", () => { applyFilters(); highlightActiveChips(); });
  tagsFilter.addEventListener("input", () => { applyFilters(); highlightActiveChips(); });

  clearFilters.addEventListener("click", () => {
    searchBox.value = "";
    categoryFilter.value = "";
    tagsFilter.value = "";
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
</script>

<script>
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

    let scope =
      (scopeSelector && document.querySelector(scopeSelector)) ||
      document.querySelector("#connectionsTable") ||
      document.querySelector("table");

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

    try {
      const cached = JSON.parse(localStorage.getItem("worksCitedMetaCache_v1") || "{}");
      const ts = Number(cached && cached._ts) || 0;
      const fresh = ts && (Date.now() - ts) < (30 * 24 * 3600 * 1000);
      const cachedItems = (fresh && cached && cached.items && typeof cached.items === "object") ? cached.items : {};
      applyApaOverridesToLinks(scope, baseForRelativeUrls, cachedItems);
    } catch {}

    const seen = new Map();

    const stripTrackingParams = (u) => {
      const tracking = new Set([
        "utm_source","utm_medium","utm_campaign","utm_term","utm_content",
        "fbclid","gclid","mc_cid","mc_eid"
      ]);
      [...u.searchParams.keys()].forEach((k) => {
        if (tracking.has(k.toLowerCase())) u.searchParams.delete(k);
      });
      u.hash = "";
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
        seen.set(href, { href, titleGuess, overrideAuthor, overrideDate });
      }
    });

    const urls = [...seen.keys()];
    if (urls.length === 0) return;

    let metaByUrl = {};

    const cacheKey = "worksCitedMetaCache_v1";
    const cacheTtlMs = 30 * 24 * 3600 * 1000;

    let cachedItems = {};
    try {
      const cached = JSON.parse(localStorage.getItem(cacheKey) || "{}");
      const ts = Number(cached && cached._ts) || 0;
      const fresh = ts && (Date.now() - ts) < cacheTtlMs;
      cachedItems = (fresh && cached && cached.items && typeof cached.items === "object") ? cached.items : {};
    } catch { cachedItems = {}; }

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

    applyApaOverridesToLinks(scope, baseForRelativeUrls, metaByUrl);

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

    items.sort((x, y) => {
      const a = x.author.localeCompare(y.author);
      if (a !== 0) return a;
      const d = (x.dateApa || "").localeCompare(y.dateApa || "");
      if (d !== 0) return d;
      return x.title.localeCompare(y.title);
    });

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
      u.hash = "";
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
      } catch { return ""; }
    };

    scope.querySelectorAll("a[href]").forEach((a) => {
      const href = normalize((a.getAttribute("href") || "").trim());
      if (!href) return;

      const meta = metaByUrl[href];
      if (!meta || typeof meta !== "object") return;

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
    } catch { return ""; }
  }

  function formatApaDate(dateVal) {
    if (!dateVal) return "n.d.";
    const iso = String(dateVal).trim();
    const m = iso.match(/^(\d{4})-(\d{2})-(\d{2})/);
    if (!m) {
      const y = iso.match(/^(\d{4})/);
      return y ? y[1] : "n.d.";
    }
    const y = +m[1], mo = +m[2], d = +m[3];
    const months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
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
  function escapeAttr(str) { return escapeHtml(str); }
})();
</script>

</body>
</html>
