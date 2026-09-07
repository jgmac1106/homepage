<?php include 'head.php'; ?>
  <title>Epstein's Women of Russia</title>
  <style>
    *, *::before, *::after { box-sizing: border-box; }
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

    /* Medium screens: allow horizontal scroll INSIDE a wrapper */
    @media (min-width: 701px) and (max-width: 1100px) {
      .tableWrap{
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }
      table{
        width: 100%;
        min-width: 1120px;
      }
    }

    /* Small screens: convert rows to "cards" */
    @media (max-width: 700px) {
      html, body { overflow-x: hidden; }
      h1 { font-size: 18px; }

      #tableControls { gap: 8px; }
      #resultCount { width: 100%; order: 99; }

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

    @media (min-width: 701px) {
      #resultCount { margin-left: auto; text-align: right; }
    }

    /* Works cited */
    .works-cited {
      max-width: 1000px;
      margin: 3rem auto;
      padding: 0 1rem;
    }
    .works-cited h2 { margin: 0 0 1rem 0; }
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

<?php include 'header.php'; ?>
</header>

<main class="longreads">
  <article class="h-entry">
    <h1 style="font-size: 3.1em" class="p-name">Epstein's Women of Russia</h1>

    <div class="pubinfo">
      <p>
        Published by
        <a data-apa-author="Unknown Author" data-apa-title="J. Gregroy McVerry" data-apa-date="n.d." class="p-author h-card" href="https://jgregorymcverry.com">J. Gregroy McVerry</a>
        on <time class="dt-published" datetime="2025-08-15 16:18:20">15<sup>th</sup> August 2025</time>
        Updated: <time class="dt-updated" datetime="2026-02-22 16:18:20">22<sup>nd</sup> February 2026</time>
      </p>

      <small>
        Featured Image
        <a data-apa-author="Unknown Author" data-apa-title="Hatching" data-apa-date="n.d." title="Hatching" href="https://flickr.com/photos/sarah-nomadwarmachine/49857912948">"Hatching"</a>
        by <a data-apa-author="NomadWarMachine" data-apa-title="NomadWarMachine" data-apa-date="n.d." href="https://flickr.com/people/sarah-nomadwarmachine">NomadWarMachine</a>
        is licensed under <a data-apa-author="Unknown Author" data-apa-title="CC BY-NC-SA" data-apa-date="n.d." href="https://creativecommons.org/licenses/by-nc-sa/2.0/">CC BY-NC-SA</a>
      </small>

      <span class="summary">
        <p class="p-summary">A collection of women tied to Jeffrey Epstein with suspected Russian intelligence ties</p>
      </span>
    </div>

    <img class="featured u-featured" src="https://live.staticflickr.com/65535/49857912948_986c454bf4_z.jpg" alt="">

    <div class="copy">
      <div class="e-content">

        <div id="tableControls">
          <input id="searchBox" type="search" placeholder="Search all columns…" />
          <button id="clearFilters" type="button">Clear</button>
          <div id="resultCount"></div>
        </div>

        <div class="tableWrap">
          <table id="connectionsTable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Connections to modeling world</th>
                <th>Connections to Jeffrey Epstein</th>
                <th>Suspected connections to Russian intelligence</th>
                <th>Sources</th>
              </tr>
            </thead>

            <tbody>
<tr>
  <td>Naomi Campbell</td>
  <td>International supermodel; long-standing ties to Elite Model Management early in her career and major global fashion houses. Previously in a high-profile relationship (2008–2013) with Russian billionaire real estate developer Vladislav Doronin.</td>
  <td>Named in Jeffrey Epstein flight logs and photographed at events with Epstein and Ghislaine Maxwell; has publicly stated she was unaware of Epstein’s crimes.</td>
  <td>No verified evidence of Russian intelligence ties; has professional relationships with Russian elites including participation in events in Moscow.</td>
  <td><!-- Add specific citation links here with data-apa-* attributes -->
    | <a href="https://www.reuters.com/article/us-people-naomicampbell-idUSBRE94T0ZC20130530"
       data-apa-author="Reuters"
       data-apa-title="Naomi Campbell and Russian billionaire Vladislav Doronin split"
       data-apa-date="2013-05-30"
       target="_blank" rel="noopener noreferrer">Reuters on Doronin relationship</a>
    
  </td>
</tr>
<tr>
  <td>Anna Malova</td>
  <td>
    Crowned Miss Russia 1994; previously Miss Baltic Sea 1994 and Miss Volga 1993. Competed in the 1994 Miss World contest and later prepared for Miss Universe. Spent time in St. Petersburg, Florida studying English and pursuing modeling opportunities in the United States. (Tampa Tribune, 1994)
  </td>
  <td>
    No documented evidence in court records or major investigative reporting linking Malova directly to Jeffrey Epstein. She was part of the 1990s international beauty pageant circuit, a milieu later examined in reporting on Epstein’s social and modeling networks, but she has not been named in Epstein flight logs or legal filings.
  </td>
<td>
  Publicly released pilot flight logs associated with Jeffrey Epstein list the name “Anna Malova” on certain flights. The logs do not specify purpose of travel, and no court filing has alleged wrongdoing by Malova in connection with those flights.
</td>
  <td>
    <a href="#"
       data-apa-author="Holland, N."
       data-apa-title="Reigning Miss Russia finds new friends, fun in Florida"
       data-apa-date="1994"
       target="_blank" rel="noopener noreferrer">Tampa Tribune feature</a> |
    <a href="https://www.vanityfair.com/news/2021/01/jeffrey-epstein-and-donald-trump-epic-bromance"
       data-apa-author="Ward, V."
       data-apa-title="Jeffrey Epstein and Donald Trump’s Epic Bromance"
       data-apa-date="2021-01-05"
       target="_blank" rel="noopener noreferrer">Vanity Fair reporting</a> |
    <a href="https://nymag.com/nymetro/news/people/columns/intelligencer/2745/"
       data-apa-author="New York Magazine"
       data-apa-title="Intelligencer column on Epstein social circles"
       data-apa-date="n.d."
       target="_blank" rel="noopener noreferrer">New York Magazine</a>
       <a href="#"
     data-apa-author="Rodgers, D."
     data-apa-title="Pilot flight log (Epstein records)"
     data-apa-date="n.d."
     target="_blank" rel="noopener noreferrer">Epstein flight log page (public record)</a>
  </td>
</tr>
<tr>
                <td>Lana Pozhidaeva</td>
                <td>Reported modeling representation includes Elite and MC2 in multiple investigations and news accounts.</td>
                <td>Reporting links her to Epstein-connected entities and to document releases describing operational/logistics roles; some accounts also discuss nonprofit funding associated with Epstein's foundations.</td>
                <td>Like the Svetlana/Lana identity overlap used in some reporting, claims about intelligence links often hinge on MGIMO background and Russian-official support described by Dossier Center; avoid asserting as fact beyond what sources support.</td>
                <td>
                  <a href="https://dossier.center/jeffreyepsteinrusconnect-en/" data-apa-author="Dossier Center" data-apa-date="" data-apa-title="Jeffrey Epstein’s Russian Connection">Dossier Center report</a><br>
                  <a href="https://www.vg.no/nyheter/i/Bx321l/dette-er-den-russiske-kvinnen-som-sendte-mette-bilder-til-epstein" data-apa-author="VG" data-apa-date="2026-02-02" data-apa-title="Dette er den russiske kvinnen som sendte «Mette»-bilder til Epstein">VG (Feb 2, 2026)</a><br>
                  <a href="https://www.washingtonpost.com/world/2026/02/06/epstein-files-russia-putin/" data-apa-author="The Washington Post" data-apa-date="2026-02-06" data-apa-title="Epstein built ties to Russians and sought to meet Putin, files show">Washington Post (Feb 6, 2026)</a>
                </td>
              </tr>
<tr>
                <td>Kira Dikhtyar</td>
                <td>Model; represented by agencies including MC2 (per reporting summarized in mainstream outlets and biographical sources).</td>
                <td>Journalist Vicky Ward reports Dikhtyar met Epstein at 17 and was paid to attend meetings as a "decorative" presence.</td>
                <td>Studied geopolitics at Moscow State University (per mainstream reporting and secondary sources); some public commentary frames her Russia-facing activism and connections in a broader intelligence narrative, but claims vary and should be sourced carefully.</td>
                <td>
                  <a href="https://vickyward.com/article/my-cousins-are-fighting-on-either-side-they-tell-me-we-dont-know-who-to-shoot/" data-apa-author="Vicky Ward" data-apa-date="" data-apa-title="My Cousins are Fighting on Either Side… They Tell Me: ‘We Don’t Know Who to Shoot’">Vicky Ward article</a><br>
                  <a href="https://www.washingtonpost.com/world/2022/06/21/russia-new-york-model-kira-dikhtyar/" data-apa-author="The Washington Post" data-apa-date="2022-06-21" data-apa-title="As businesses flee Russia, a New York model returns to Moscow">Washington Post (Jun 21, 2022)</a><br>
                  <a href="https://www.theguardian.com/world/2020/dec/17/france-detains-modelling-agent-jean-luc-brunel-in-jeffrey-epstein-inquiry" data-apa-author="The Guardian" data-apa-date="2020-12-17" data-apa-title="France detains modelling agent in Jeffrey Epstein inquiry">The Guardian (Dec 17, 2020)</a>
                </td>
              </tr>
<tr>
  <td>Renata Bolotova</td>
  <td>Russian model associated with New York and European modeling circuits; reported connections to MC2 Model Management, founded by Jean‑Luc Brunel.</td>
  <td>Named in reporting related to Jean‑Luc Brunel and his modeling operations, which were financially backed by Jeffrey Epstein; no public evidence that she was directly charged with wrongdoing.</td>
  <td>No verified evidence of Russian intelligence ties; inclusion in reporting relates to proximity to Brunel/Epstein modeling network rather than documented intelligence affiliation.</td>
  <td>
    <a href="https://www.theguardian.com/world/2020/dec/17/france-detains-modelling-agent-jean-luc-brunel-in-jeffrey-epstein-inquiry"
       data-apa-author="Chrisafis, A."
       data-apa-title="France detains modelling agent Jean‑Luc Brunel in Jeffrey Epstein inquiry"
       data-apa-date="2020-12-17"
       target="_blank" rel="noopener noreferrer">The Guardian reporting on Brunel</a> |
    <a href="https://www.miamiherald.com/news/state/florida/article233847682.html"
       data-apa-author="Miami Herald"
       data-apa-title="Jeffrey Epstein’s modeling network and associates"
       data-apa-date="2019-08-14"
       target="_blank" rel="noopener noreferrer">Miami Herald reporting</a>
  </td>
</tr>
<tr>
                <td>Guzel Ganieva</td>
                <td>Described in reporting as a Russian model (agency history varies by account).</td>
                <td>In legal filings and reporting, she alleged Leon Black flew her to Epstein's Florida home in 2008 and described coercive circumstances; Black disputes wrongdoing and denies abuse allegations.</td>
                <td>Dossier Center describes (and partially disputes) claims in some reporting that she appeared on a Ukrainian intelligence list of FSB officers; the identification has been contested and should be treated cautiously.</td>
                <td>
                  <a href="https://www.vanityfair.com/news/2021/08/billionaire-leon-black-flew-russian-model-to-meet-jeffrey-epstein-new-legal-filing-claims" data-apa-author="Vanity Fair" data-apa-date="2021-08-09" data-apa-title="Billionaire Leon Black Flew a Russian Model to Meet Jeffrey Epstein, New Legal Filing Claims">Vanity Fair (Aug 9, 2021)</a><br>
                  <a href="https://www.cbsnews.com/news/jeffrey-epstein-leon-black-emails/" data-apa-author="CBS News" data-apa-date="2025-12-16" data-apa-title="Epstein offered advice to billionaire facing accusation of sexual impropriety, docs show">CBS News (Dec 16, 2025)</a><br>
                  <a href="https://dossier.center/jeffreyepsteinrusconnect-en/" data-apa-author="Dossier Center" data-apa-date="" data-apa-title="Jeffrey Epstein’s Russian Connection">Dossier Center report</a>
                </td>
              </tr>
<tr>
  <td>Karyna Shuliak</td>
  <td>Belarusian model who worked in U.S. modeling and nightlife circles; associated with Palm Beach social scene.</td>
  <td>Described in multiple reports as Jeffrey Epstein’s girlfriend at the time of his 2019 arrest; present at his Palm Beach mansion and reportedly received financial support from him.</td>
  <td>No verified evidence of Russian intelligence ties; publicly identified as Ukrainian and has denied wrongdoing related to Epstein’s crimes.</td>
  <td>
    <a href="https://www.miamiherald.com/news/state/florida/article233847682.html"
       data-apa-author="Miami Herald"
       data-apa-title="Jeffrey Epstein’s girlfriend identified after arrest"
       data-apa-date="2019-08-14"
       target="_blank" rel="noopener noreferrer">Miami Herald reporting</a> |
    <a href="https://www.businessinsider.com/who-is-karyna-shuliak-jeffrey-epstein-girlfriend-2019-8"
       data-apa-author="Business Insider"
       data-apa-title="Who is Karyna Shuliak? Jeffrey Epstein’s alleged girlfriend"
       data-apa-date="2019-08-15"
       target="_blank" rel="noopener noreferrer">Business Insider profile</a>
  </td>
</tr>

<tr>
  <td>Masha Drokova</td>
  <td>
    Former federal commissioner and spokesperson of the pro-Kremlin youth movement Nashi. Later moved to the United States where she founded the venture capital firm Day One Ventures and became a Silicon Valley investor, including being named to Forbes’ 2019 “30 Under 30” list. For Putin’s 58th birthday, Nashi released an “erotic calendar” featuring twelve semi-nude female journalism students from Moscow State University including Masha.
  </td>
  <td>
    Newly released correspondence from the Jeffrey Epstein files shows Drokova (also known as Masha Bucher) maintained a close professional and personal relationship with Epstein from 2017 until shortly before his 2019 arrest, including helping arrange press interviews and advising on media strategy. Her name appears in more than 1,000 emails and messages in the archive, and she has addressed these revelations publicly, including via social media.
  </td>
  <td>
    While major outlets have documented her past leadership in a pro-Kremlin youth group and subsequent involvement in tech investing, there is no publicly confirmed evidence that she acted as an agent of Russian intelligence; speculation centers on her earlier political affiliations and links between Russian-linked capital and Silicon Valley.
  </td>
  <td>
    <a href="https://www.washingtonpost.com/technology/2026/02/06/epsteins-network-included-russian-tech-investors-with-past-kremlin-ties/"
       data-apa-author="Weiner, J."
       data-apa-title="Epstein’s network included Russian tech investors with past Kremlin ties"
       data-apa-date="2026-02-06"
       target="_blank" rel="noopener noreferrer">Washington Post report on Russian tech ties</a> |
    <a href="https://techcrunch.com/2026/02/10/vc-masha-bucher-epstein-associate-and-day-one-founder-explains-herself/"
       data-apa-author="Bort, J."
       data-apa-title="VC Masha Bucher, Epstein associate and Day One founder, explains herself"
       data-apa-date="2026-02-10"
       target="_blank" rel="noopener noreferrer">TechCrunch profile and response</a> |
    <a href="https://bylinetimes.com/2025/10/20/inside-epsteins-russian-tech-web-how-oligarch-cash-and-three-women-connected-moscow-to-silicon-valley/"
       data-apa-author="Bernardini, M."
       data-apa-title="Inside Epstein’s Russian tech web"
       data-apa-date="2025-10-20"
       target="_blank" rel="noopener noreferrer">Byline Times investigative report</a>
  </td>
</tr>

</tbody>
          </table>
        </div>

        <section
          id="works-cited"
          class="works-cited"
          data-works-cited-scope="#connectionsTable"
          data-works-cited-endpoint="/works_cited_meta.php"
        >
          <h2>Works Cited</h2>
          <ol id="works-cited-auto" class="apa-list"></ol>
          
        </section>

      </div>
    </div>
  </article>
</main>

<footer>
  <?php include 'footer.php'; ?>
</footer>

<script>
(() => {
  const TABLE_SELECTOR = "#connectionsTable";
  const norm = (s) => (s || "").toLowerCase().replace(/\s+/g, " ").trim();

  const table = document.querySelector(TABLE_SELECTOR);
  if (!table) return;

  const tbody = table.tBodies[0] || table.querySelector("tbody");
  if (!tbody) return;

  const rows = Array.from(tbody.rows);

  const headerCells = (() => {
    const thead = table.tHead || table.querySelector("thead");
    if (thead && thead.rows.length) return Array.from(thead.rows[0].cells);
    return [];
  })();

  // Mobile labels
  rows.forEach((r) => {
    Array.from(r.cells).forEach((cell, i) => {
      const label = headerCells[i] ? headerCells[i].innerText.trim() : `Column ${i+1}`;
      cell.setAttribute("data-label", label);
    });
  });

  // Controls
  const searchBox = document.getElementById("searchBox");
  const clearBtn = document.getElementById("clearFilters");
  const resultCount = document.getElementById("resultCount");

  function applyFilters(){
    const q = norm(searchBox?.value || "");
    let shown = 0;
    rows.forEach(r => {
      const ok = !q || norm(r.innerText).includes(q);
      r.style.display = ok ? "" : "none";
      if (ok) shown++;
    });
    if (resultCount) resultCount.textContent = `${shown} of ${rows.length} rows`;
  }

  function clearFilters(){
    if (searchBox) searchBox.value = "";
    applyFilters();
  }

  // Sorting
  const getCellText = (row, idx) => (row.cells[idx]?.innerText || "").trim();
  headerCells.forEach((th, idx) => {
    th.classList.add("sortable");
    th.addEventListener("click", () => {
      const current = th.getAttribute("data-sort") || "";
      headerCells.forEach(h => h.removeAttribute("data-sort"));
      const dir = current === "asc" ? "desc" : "asc";
      th.setAttribute("data-sort", dir);

      const visible = rows.filter(r => r.style.display !== "none");
      visible.sort((a, b) => {
        const A = getCellText(a, idx).toLowerCase();
        const B = getCellText(b, idx).toLowerCase();
        const cmp = A.localeCompare(B, undefined, { numeric: true, sensitivity: "base" });
        return dir === "asc" ? cmp : -cmp;
      });
      visible.forEach(r => tbody.appendChild(r));
    });
  });

  searchBox?.addEventListener("input", applyFilters);
  clearBtn?.addEventListener("click", clearFilters);
  applyFilters();

  // Works Cited auto-build
  document.addEventListener("DOMContentLoaded", () => {
    buildWorksCited().catch(() => {});
  });

  async function buildWorksCited() {
    const worksSection = document.querySelector("#works-cited");
    const output = document.querySelector("#works-cited-auto");
    if (!worksSection || !output) return;

    const scopeSelector = worksSection.getAttribute("data-works-cited-scope") || "";
    const endpoint = worksSection.getAttribute("data-works-cited-endpoint") || "/works_cited_meta.php";

    const scope = (scopeSelector && document.querySelector(scopeSelector)) || table;
    if (!scope) return;

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
        url = new URL(rawHref, window.location.href);
        stripTrackingParams(url);
      } catch { return; }

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
        ? `${escapeHtml(c.author)}. (${escapeHtml(c.dateApa)}). <em>${escapeHtml(c.title)}</em>. <a  data-apa-author="Unknown Author" data-apa-title="${escapeHtml(c.href)}" data-apa-date="n.d."href="${escapeAttr(c.href)}" target="_blank" rel="noopener noreferrer">${escapeHtml(c.href)}</a>`
        : `${escapeHtml(c.author)}. (${escapeHtml(c.dateApa)}). <em>${escapeHtml(c.title)}</em>. ${escapeHtml(c.site)}. <a  data-apa-author="Unknown Author" data-apa-title="${escapeHtml(c.href)}" data-apa-date="n.d."href="${escapeAttr(c.href)}" target="_blank" rel="noopener noreferrer">${escapeHtml(c.href)}</a>`;

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
  function escapeAttr(str) { return escapeHtml(str); }
})();
</script>

</body>
</html>
