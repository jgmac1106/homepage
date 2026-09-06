"""Content coverage and metadata checks, no third-party dependencies."""
import json
from pathlib import Path
import sys
import tempfile
import unittest
ROOT = Path(__file__).resolve().parents[1]
sys.path.insert(0, str(ROOT/'tools'))
from build_archive_index import date_only, Document

class ArchiveIndexTest(unittest.TestCase):
    def test_dates(self):
        self.assertEqual(date_only('2020-2-29T10:00:00Z'), '2020-02-29')
        self.assertIsNone(date_only('2019-02-29'))
    def test_untrusted_code_is_text_only(self):
        doc = Document('<?php echo "never executed"; ?><p class="e-content">Hello &amp; goodbye</p>').root
        self.assertIn('Hello & goodbye', doc.text())
        self.assertNotIn('never executed',doc.text())
    def test_index_uses_real_unique_files(self):
        rows=json.loads((ROOT/'archive/data/homepage.json').read_text())
        self.assertGreater(len(rows),0)
        self.assertEqual(len(rows),len({r['id'] for r in rows}))
        self.assertEqual(len(rows),len({r['url'] for r in rows}))
        for row in rows:
            self.assertTrue((ROOT/row['source_file']).is_file(),row['source_file'])
            self.assertTrue(row['date'] is None or date_only(row['date'])==row['date'])
            self.assertNotIn('template',row['source_file'].lower())
            self.assertNotIn('known',row['source'])
        self.assertTrue({'articles','notes','replies'}.issubset({r['type'] for r in rows}))

if __name__ == '__main__': unittest.main()
