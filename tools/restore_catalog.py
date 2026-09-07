#!/usr/bin/env python3
"""Restore the exact public archive runtime data from Git-sized byte chunks."""
import hashlib
import json
from pathlib import Path
import tempfile

ROOT = Path(__file__).resolve().parents[1]
SOURCE = ROOT / 'archive/catalog-source'

def digest(path):
    h = hashlib.sha256()
    with path.open('rb') as stream:
        for data in iter(lambda: stream.read(1024 * 1024), b''):
            h.update(data)
    return h.hexdigest()

def main():
    manifest = json.loads((SOURCE / 'manifest.json').read_text())
    target = ROOT / 'archive/data/catalog/records.jsonl'
    if target.exists():
        if digest(target) != manifest['sha256']:
            raise SystemExit('Existing records.jsonl differs from the saved snapshot. Preserve and review it before restoring; no file was overwritten.')
        print('Catalog already restored; SHA-256 verified.')
        return
    target.parent.mkdir(parents=True, exist_ok=True)
    temporary = None
    try:
        with tempfile.NamedTemporaryFile(dir=target.parent, prefix='.restore-', delete=False) as output:
            temporary = Path(output.name)
            for part in manifest['parts']:
                name = part['path']
                if Path(name).name != name:
                    raise ValueError('Invalid catalog chunk path')
                data = (SOURCE / name).read_bytes()
                if len(data) != part['bytes'] or hashlib.sha256(data).hexdigest() != part['sha256']:
                    raise ValueError('Catalog chunk failed verification: ' + name)
                output.write(data)
        if temporary.stat().st_size != manifest['bytes'] or digest(temporary) != manifest['sha256']:
            raise ValueError('Reconstructed catalog failed verification')
        temporary.replace(target)
        print('Restored records.jsonl; exact snapshot SHA-256 verified.')
    finally:
        if temporary is not None and temporary.exists():
            temporary.unlink()

if __name__ == '__main__':
    main()
