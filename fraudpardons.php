<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individuals Pardoned by Donald Trump for Medicare, Medicaid, or Insurance Fraud</title>
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
<h1>Individuals Pardoned by Donald Trump for Medicare, Medicaid, or Insurance Fraud</h1>
<div id="tableControls">
  <input id="searchBox" type="search" placeholder="Search all columns…" />

  <select id="categoryFilter">
    <option value="">All categories</option>
  </select>

  <input id="tagsFilter" type="text" placeholder="Tags (comma-separated), e.g. Medicare, Kickbacks" />

  <button id="clearFilters" type="button">Clear</button>

  <div id="resultCount"></div>
</div>
<table id="connectionsTable" border="1">
<thead>
<tr>
<th>Name</th>
<th>Category</th>
<th>Tags</th>
<th>Type of Crime</th>
<th>Amount of Fraud</th>
<th>Source</th>
</tr>
</thead>
<tbody>
<tr>
<td>Philip Esformes</td>
<td>Health Care Executive</td>
<td>Medicare Fraud, Medicaid Fraud, Kickbacks, Money Laundering, Bribery</td>
<td>Medicare and Medicaid fraud (kickbacks, money laundering, bribery)</td>
<td>$1.3 billion</td>
<td><a href="https://www.nbcnews.com/politics/politics-news/health-care-fraudster-philip-esformes-latest-trump-clemency-recipient-rcna175681" target="_blank">NBC News</a></td>
</tr>
<tr>
<td>Salomon Melgen</td>
<td>Physician</td>
<td>Medicare Fraud, Unnecessary Treatments, False Claims</td>
<td>Medicare fraud (unnecessary treatments and false claims)</td>
<td>$73 million (billed; actual loss $42 million)</td>
<td><a href="https://www.justice.gov/usao-sdfl/pr/south-florida-doctor-sentenced-medicare-fraud-scheme" target="_blank">U.S. Department of Justice</a></td>
</tr>
<tr>
<td>Judith Negron</td>
<td>Health Care Executive</td>
<td>Medicare Fraud, Conspiracy, Kickbacks, Money Laundering</td>
<td>Medicare fraud (conspiracy, kickbacks, money laundering)</td>
<td>$87 million</td>
<td><a href="https://www.miamiherald.com/news/local/crime/article307566596.html" target="_blank">Miami Herald</a></td>
</tr>
<tr>
<td>Lawrence Duran</td>
<td>Health Care Executive</td>
<td>Medicare Fraud, Money Laundering</td>
<td>Medicare fraud and money laundering</td>
<td>$205 million</td>
<td><a href="https://truthout.org/articles/trump-grants-clemency-to-executive-who-orchestrated-205m-medicare-fraud-scheme/" target="_blank">Truthout</a></td>
</tr>
<tr>
<td>John Davis</td>
<td>Health Care Executive</td>
<td>Medicare Fraud, Bribes, Kickbacks</td>
<td>Medicare fraud (illegal bribes and kickbacks)</td>
<td>$15.6 million</td>
<td><a href="https://www.pbs.org/newshour/health/trumps-pardons-included-health-care-execs-behind-massive-frauds" target="_blank">PBS</a></td>
</tr>
<tr>
<td>Faustino Bernadett</td>
<td>Physician/Hospital Owner</td>
<td>Insurance Fraud, Workers' Compensation, Kickback Scheme</td>
<td>Workers' compensation insurance fraud (kickback scheme)</td>
<td>$900 million</td>
<td><a href="https://www.justice.gov/usao-cdca/pr/doctor-and-ex-hospital-owner-sentenced-15-months-prison-massive-health-care-fraud" target="_blank">Department of Justice</a></td>
</tr>
<tr>
<td>Daniela Gozes-Wagner</td>
<td>Health Care Professional</td>
<td>Medicare Fraud, Conspiracy, Health Care Fraud</td>
<td>Medicare fraud (conspiracy to commit health care fraud)</td>
<td>$50 million</td>
<td><a href="https://www.justice.gov/usao-sdtx/pr/houston-woman-sentenced-conspiring-commit-50-million-health-care-fraud-and-money" target="_blank">Department of Justice</a></td>
</tr>
<tr>
<td>Todd S. Farha</td>
<td>Health Insurance Executive</td>
<td>Medicaid Fraud, Health Care Fraud, False Statements</td>
<td>Medicaid fraud (health care fraud and false statements)</td>
<td>$35 million</td>
<td><a href="https://www.wusf.org/courts-law/2021-01-20/trump-pardons-former-wellcare-execs-convicted-in-florida-medicaid-fraud-case" target="_blank">WUSF</a></td>
</tr>
<tr>
<td>William L. Kale</td>
<td>Health Insurance Executive</td>
<td>Medicaid Fraud, Health Care Fraud, False Statements</td>
<td>Medicaid fraud (health care fraud and false statements)</td>
<td>$35 million</td>
<td><a href="https://www.wusf.org/courts-law/2021-01-20/trump-pardons-former-wellcare-execs-convicted-in-florida-medicaid-fraud-case" target="_blank">WUSF</a></td>
</tr>
<tr>
<td>Paul L. Behrens</td>
<td>Health Insurance Executive</td>
<td>Medicaid Fraud, Health Care Fraud, False Statements</td>
<td>Medicaid fraud (health care fraud and false statements)</td>
<td>$35 million</td>
<td><a href="https://www.wusf.org/courts-law/2021-01-20/trump-pardons-former-wellcare-execs-convicted-in-florida-medicaid-fraud-case" target="_blank">WUSF</a></td>
</tr>
<tr>
<td>Thaddeus M. S. Bereday</td>
<td>Health Insurance Executive</td>
<td>Medicaid Fraud, False Statements</td>
<td>Medicaid fraud (false statements)</td>
<td>$35 million</td>
<td><a href="https://www.wusf.org/courts-law/2021-01-20/trump-pardons-former-wellcare-execs-convicted-in-florida-medicaid-fraud-case" target="_blank">WUSF</a></td>
</tr>
<tr>
<td>Peter E. Clay</td>
<td>Health Insurance Executive</td>
<td>Medicaid Fraud, False Statements</td>
<td>Medicaid fraud (false statements)</td>
<td>$35 million</td>
<td><a href="https://www.wusf.org/courts-law/2021-01-20/trump-pardons-former-wellcare-execs-convicted-in-florida-medicaid-fraud-case" target="_blank">WUSF</a></td>
</tr>
<tr>
<td>Alfonso Antonio Costa</td>
<td>Health Care Professional</td>
<td>Health Care Fraud, False Insurance Billing</td>
<td>Health care fraud (false insurance billing)</td>
<td>$44,000</td>
<td><a href="https://www.motherjones.com/politics/2015/11/ben-carson-alfonso-costa-healthcare-fraud/" target="_blank">Mother Jones</a></td>
</tr>
<tr>
<td>Rickey Ivan Kanter</td>
<td>Business Owner</td>
<td>Medicare Fraud, Mail Fraud</td>
<td>Medicare fraud (mail fraud)</td>
<td>$27 million</td>
<td><a href="https://www.justice.gov/archive/usao/wie/news/2011/pr20110411_Dr_Comfort_Resolution.html" target="_blank">Department of Justice</a></td>
</tr>
<tr>
<td>Theodore E. (Ted) Suhl</td>
<td>Business Owner</td>
<td>Medicaid Fraud, Bribery</td>
<td>Medicaid fraud (bribery to inflate payments)</td>
<td>Not specified (companies received ~$125 million in reimbursements during indictment period)</td>
<td><a href="https://trumpwhitehouse.archives.gov/briefings-statements/president-trump-commutes-sentence-ted-suhl/" target="_blank">White House Archives</a></td>
</tr>
<tr>
<td>William E. "Ed" Henry</td>
<td>Politician</td>
<td>Medicare Fraud, Theft of Government Property</td>
<td>Medicare fraud (theft of government property)</td>
<td>Not specified</td>
<td><a href="https://apnews.com/article/donald-trump-alabama-montgomery-ed-henry-medicare-5d3a4cbf2664eb3662f9dc1c6ad98041" target="_blank">Associated Press</a></td>
</tr>
<tr>
<td>Duncan Fordham</td>
<td>Pharmacist</td>
<td>Health Care Fraud, Kickbacks</td>
<td>Health care fraud (kickbacks)</td>
<td>$1 million (restitution ordered)</td>
<td><a href="https://www.augustachronicle.com/story/news/local/2021/01/20/president-donald-trump-pardons-augusta-pharmacist-duncan-fordham-convicted-2005-health-care-fraud/4228210001/" target="_blank">Augusta Chronicle</a></td>
</tr>
<tr>
<td>Frederick J. Nahas</td>
<td>Physician</td>
<td>Obstruction of Justice, Health Care Fraud Investigation</td>
<td>Obstruction of justice in health care fraud investigation</td>
<td>Not specified (no underlying fraud found)</td>
<td><a href="https://www.medscape.com/viewarticle/944465" target="_blank">Medscape</a></td>
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