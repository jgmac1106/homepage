#!/usr/bin/env python3
"""Check the public archive's data, index references, and poetry dependencies."""
from collections import Counter
import hashlib
import json
from pathlib import Path
import subprocess

ROOT = Path(__file__).resolve().parents[1]

def main():
    tracked = subprocess.check_output(['git', '-C', str(ROOT), 'ls-files', '-z']).decode().split('\0')
    for name in filter(None, tracked):
        path = ROOT / name
        assert path.stat().st_size <= 10 * 1024**2, 'Tracked file exceeds 10 MiB: ' + name
        assert path.suffix.lower() not in {'.mp3', '.mp4', '.m4a', '.mov', '.aifc', '.sql', '.bak'}, 'Media or backup tracked: ' + name
        assert path.name not in {'error_log', 'access_log', '.DS_Store'}, 'Host artifact tracked: ' + name
        assert not path.name.startswith('.pureftpd-'), 'FTP temporary file tracked: ' + name
    catalog = ROOT / 'archive/data/catalog'
    stats = json.loads((catalog / 'stats.json').read_text())
    counts = Counter()
    refs = {}
    ids = set()
    offset = 0
    digest = hashlib.sha256()
    with (catalog / 'records.jsonl').open('rb') as stream:
        for line in stream:
            record = json.loads(line)
            assert record['id'] not in ids, 'Duplicate catalog ID'
            ids.add(record['id'])
            assert record.get('access', 'PUBLIC') == 'PUBLIC', 'Non-public catalog record'
            assert record.get('publish_status', 'published') == 'published', 'Unpublished catalog record'
            refs[offset] = len(line)
            offset += len(line)
            digest.update(line)
            counts['all'] += 1
            counts[record['type']] += 1
    manifest = json.loads((ROOT / 'archive/catalog-source/manifest.json').read_text())
    assert digest.hexdigest() == manifest['sha256'], 'Catalog differs from source snapshot'
    assert dict(counts) == stats['counts'], 'Catalog totals do not match indexes'
    index_count = 0
    for path in (catalog / 'indexes').rglob('*.idx'):
        raw = path.read_bytes()
        assert len(raw) % 21 == 0, f'Invalid index size: {path}'
        for i in range(0, len(raw), 21):
            row = raw[i:i+21]
            assert row[:20].isdigit() and row[20:] == b'\n', f'Invalid index row: {path}'
            assert refs.get(int(row[:12])) == int(row[12:20]), f'Invalid index reference: {path}'
        if path.name == 'all.idx':
            assert len(raw) // 21 == counts[path.parent.name], f'Invalid type count: {path}'
        index_count += 1
    for path in (catalog / 'tweets').rglob('*.json'):
        for ref in json.loads(path.read_text()).values():
            assert refs.get(ref[0]) == ref[1], 'Invalid tweet reference'
    known_count = 0
    for path in (ROOT / 'archive/known/posts').rglob('*.json'):
        record = json.loads(path.read_text())
        assert record['access'] == 'PUBLIC' and record['publish_status'] == 'published', 'Non-public Known post'
        known_count += 1
    poems = json.loads((ROOT / 'smallpoems/data.json').read_text())
    assert len({p['id'] for p in poems}) == len(poems), 'Duplicate Small Poems ID'
    for poem in poems:
        assert poem.get('access', 'PUBLIC') == 'PUBLIC' and poem.get('publish_status', 'published') == 'published'
    collection = json.loads((ROOT / 'ukraine-poems/collection.json').read_text())
    image_count = 0
    for poem in collection:
        for block in poem['blocks']:
            for image in block.get('images', []):
                if image['src'].startswith('/'):
                    assert (ROOT / image['src'].lstrip('/')).is_file(), 'Missing Ukraine image: ' + image['src']
                    image_count += 1
    print(f"Verified {counts['all']:,} public catalog records, {index_count:,} indexes, {known_count:,} Known posts, {len(poems)} Small Poems entries, {len(collection)} Ukraine collection entries, and {image_count} local image references.")

if __name__ == '__main__':
    main()
