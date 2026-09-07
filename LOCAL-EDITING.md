# Local editing and Reclaim synchronization

This repository contains the public website source imported from the September 7,
2026 download of `/home/jgregory/public_html` on
`tombraider.shared.host.reclaimhosting.com`. The live Reclaim files were treated
as authoritative, including server-only pages, archive data, Small Poems,
the Ukraine poetry collection, and the existing poetry feed/audio fixes.

Open the repository folder in Sublime Text. The delivered
`Homepage.sublime-project` also opens this folder directly.

## After a fresh clone

Run these commands from the repository folder with Python 3:

```sh
python3 tools/restore_catalog.py
python3 tools/validate_sync.py
```

The archive's original 275,500,179-byte `records.jsonl` exceeds GitHub's
single-file limit. Its exact bytes are stored in 33 chunks of at most 8 MiB in
`archive/catalog-source/`. The restore command checks every chunk and the full
SHA-256 before writing the runtime file. An existing runtime file that differs
is preserved and causes the command to stop for review. No PHP source was
changed to accommodate this storage format.

## Media and private files

Audio, video, bulk archive media, bulk reading attachments, oversized images,
private backup archives, logs, and interrupted FTP upload files are excluded
from new Git commits. Their live URLs and references are preserved.
The separate downloaded server snapshot contains the media needed for a complete
offline preview; the Git checkout alone does not contain every media asset.
Never copy the entire server snapshot into Git with `git add -f`.
Removing previously tracked media/logs does not erase them from old Git history.

`photos/vatniks` was moved by the site owner to `images/vatniks` before the final
download. That new image directory is included. The distinct, empty server file
`photos/Vatniks` is preserved.

## Updating the live site

GitHub pushes validate the source; they do not deploy. The former automatic FTP
workflow was replaced because it could overwrite newer server edits on every
push. Reclaim hosting remains in place.

Before uploading any edited file, download its current server version and compare
it with the version you originally edited. Merge any intervening live changes,
then upload only the reviewed files. Avoid whole-directory uploads or deletion
flags. Keep catalog source chunks and local tools out of the public document root;
deploy the reconstructed runtime catalog only when its contents were intentionally
changed and reviewed.

For a new snapshot, exclude `.git/` from rsync. A typical macOS filesystem cannot
preserve different files whose names differ only by case. If that conflict occurs,
download a tar archive or use a case-sensitive volume instead of renaming live
files without checking their links.
