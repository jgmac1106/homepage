# Homepage archive

The archive indexes existing public homepage articles, notes and replies. It does not import Known data yet. No database or JavaScript is required. PHP 7.3-compatible source; validated with PHP 8.0 via a local WebAssembly runtime.

## Pages

- `/archive/`: all indexed posts, newest first (20 per page).
- `/archive/?type=articles`, `?type=notes`, `?type=replies`: separate feeds.
- `?type=replies&year=2019&month=11`: month feed and linked day calendar.
- Add `&day=03` to browse a day, or `&page=2` to paginate.
- `/archive/feed.php?type=notes`: latest 50 matching entries as RSS. Date filters work here too.

Other Known post types have empty feeds ready for import. Invalid filters return 400; nonexistent pagination returns 404. Undated posts appear under All dates. All links and text are escaped; arbitrary PHP/HTML from posts is never executed or rendered in summaries.

## Rebuild the existing-content index

Run `python3 tools/build_archive_index.py` (Python 3.9+) and commit `archive/data/homepage.json` with the changes. The script reads local source as text; it does not execute PHP. Individual posts are indexed by their actual source filename because some hand-authored canonical URLs point to different posts. Collection pages and templates are excluded. Existing article catalogs provide fallback metadata for linked pages without a single usable h-entry.

Existing valid `dt-published` dates take precedence over filenames. Invalid or absent dates use a valid filename date, otherwise remain undated. `date_notes` records discrepancies and catalog fallbacks; no old publication metadata is silently rewritten. Source-file and date notes are maintenance metadata, not shown in the feed. RSS includes pubDate only when a source timestamp has an explicit timezone.

## Future Known import contract

Use an array of plain metadata records following `data/homepage.json`: stable `id`, `url`, `source`, `type`, `title`, text `summary`, ISO `date` or null, `published`, `author`, `reply_to`, and `tags`. Allowed types are defined in `library.php`. Preserve the original Known ID in the stable ID and preserve or deliberately map the original URL. Publication dates should come from Known timestamps, converted consistently.

Only reviewed PUBLIC, published records and their approved media should enter the public repository. Account records, credentials, restricted posts and raw SQL dumps must never be committed. The loader additionally rejects explicitly restricted or unpublished entries, but absent access metadata is accepted for the existing homepage index; do not rely on the loader to sanitize a raw Known export.

After creating actual imported post pages and mapping media/old URLs, add an explicit reviewed JSON filename to `archive_entries()` in `library.php`. Do not add raw recovery JSONL directly. Reconcile duplicates against existing homepage posts before importing.

## Validation and deployment

Run `php tests/archive_test.php`, `python3 tests/archive_index_test.py`, and PHP lint on `archive/*.php`. The validation workflow runs for archive-related PRs and master pushes and verifies that the checked-in index is reproducible.

The FTP deployment workflow is restricted to master pushes. Branches and PRs must not deploy to the live website. The `.htaccess` archive exception keeps existing extension-rewrite rules from rewriting archive directories; verify `/archive/`, filters and `/archive/feed.php` on the real Apache host after deployment. A separate conditional resolves existing HTML-only posts before the legacy PHP fallback, so extensionless links to those articles work too. Existing PHP post URLs retain their precedence.

## Shared styling

The archive loads `/reset.css`, `/styles.css` and the existing Heebo/Quicksand font stylesheet before its scoped layout rules. It uses `header.php` and `footer.php`, `.card` for articles and `.note` for other entries. The masthead image, navigation behavior and shared component surfaces come from the existing website. Archive CSS supplies the sidebar/calendar layout and limited readability overrides; it does not restyle other pages.
