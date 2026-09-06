#!/usr/bin/env python3
"""Index existing public homepage PHP/HTML without executing it. Python 3 stdlib only."""
from html.parser import HTMLParser
from pathlib import Path
import datetime as dt
import json
import re
from urllib.parse import urlsplit, unquote

ROOT = Path(__file__).resolve().parents[1]
VOID = {'area','base','br','col','embed','hr','img','input','link','meta','param','source','track','wbr'}

class Node:
    def __init__(self, tag='', attrs=()):
        self.tag, self.attrs, self.children = tag, dict(attrs), []
    def has(self, cls):
        return cls in (self.attrs.get('class') or '').split()
    def walk(self):
        yield self
        for child in self.children:
            if isinstance(child, Node):
                yield from child.walk()
    def text(self):
        if self.tag in {'script', 'style'}:
            return ''
        return ' '.join(c.text() if isinstance(c, Node) else c for c in self.children)

class Document(HTMLParser):
    def __init__(self, text):
        super().__init__(convert_charrefs=True)
        self.root = Node(); self.stack = [self.root]
        self.feed(re.sub(r'<\?.*?\?>', '', text, flags=re.S))
    def handle_starttag(self, tag, attrs):
        node = Node(tag, attrs); self.stack[-1].children.append(node)
        if tag not in VOID:
            self.stack.append(node)
    def handle_startendtag(self, tag, attrs):
        self.handle_starttag(tag, attrs)
        if tag not in VOID:
            self.handle_endtag(tag)
    def handle_endtag(self, tag):
        for i in range(len(self.stack)-1, 0, -1):
            if self.stack[i].tag == tag:
                self.stack = self.stack[:i]; break
    def handle_data(self, data):
        self.stack[-1].children.append(data)

def clean(value):
    return re.sub(r'\s+', ' ', value).strip()

def date_only(value):
    match = re.match(r'^(\d{4})-(\d{1,2})-(\d{1,2})(?:\b|T)', value)
    if match:
        try:
            return dt.date(*map(int, match.groups())).isoformat()
        except ValueError:
            pass
    return None

def extract(path):
    relative = path.relative_to(ROOT).as_posix()
    if any(x in path.stem.lower() for x in ('template', 'test')):
        return None
    if relative.startswith('notes/') and not re.match(r'\d{4}-\d{1,2}-\d{1,2}', path.stem):
        return None
    doc = Document(path.read_text(errors='replace')).root
    entries = [n for n in doc.walk() if n.has('h-entry')]
    # Collection pages are not individual posts. They contain repeated excerpts.
    if len(entries) != 1:
        return None
    entry = entries[0]; nodes = list(entry.walk())
    def first(cls):
        return next((n for n in nodes if n.has(cls)), None)
    def text(cls):
        return ' '.join(clean(n.text()) for n in nodes if n.has(cls))
    published = first('dt-published')
    rawdate = published.attrs.get('datetime', '') if published else ''
    date = date_only(rawdate)
    filename_date = date_only(path.stem)
    issues = []
    if date is None:
        date = filename_date
        issues.append('Date taken from filename' if date else 'No valid publication date')
    elif filename_date and filename_date != date:
        issues.append('Publication datetime differs from filename; retained datetime')
    reply = first('u-in-reply-to')
    kind = 'articles' if entry.tag == 'article' and not relative.startswith('notes/') else 'notes'
    if reply: kind = 'replies'
    elif first('u-like-of'): kind = 'likes'
    elif first('u-repost-of'): kind = 'reposts'
    elif first('u-bookmark-of'): kind = 'bookmarks'
    elif first('p-rsvp'): kind = 'rsvps'
    # Media attachments do not change an article/note's type without explicit semantics.
    title_node = next((n for n in nodes if n.has('p-name') and not n.has('e-content') and n.tag in {'h1','h2','h3'}), None)
    summary = text('p-summary') or text('e-content')
    if not summary and not title_node:
        return None
    title = clean(title_node.text()) if title_node else (summary[:100].rstrip() + ('…' if len(summary)>100 else ''))
    title = title or kind[:-1].capitalize()
    url = '/' + relative.rsplit('.',1)[0]
    return {'id':'homepage:' + relative, 'url':url, 'source':'homepage', 'type':kind,
            'title':title, 'summary':summary[:360].rstrip() + ('…' if len(summary)>360 else ''),
            'date':date, 'published':rawdate or None, 'author':'Greg McVerry',
            'reply_to':reply.attrs.get('href') if reply else None,
            'tags':sorted(set(clean(n.attrs.get('value') or n.text()) for n in nodes if n.has('p-category'))),
            'source_file':relative, 'date_notes':issues}

def main():
    files = sorted(list(ROOT.glob('*.php')) + list(ROOT.glob('*.html')) + list((ROOT/'notes').rglob('*.php')))
    records = [record for p in files if (record := extract(p))]
    # Existing hand-authored article catalogs cover some pages with malformed or
    # absent h-entry markup. Only accept links to files that actually exist here.
    seen = {r['url'] for r in records}
    for catalog in [ROOT/'myarticles.php', *sorted((ROOT/'articles').rglob('*.php'))]:
        for card in Document(catalog.read_text(errors='replace')).root.walk():
            if not card.has('h-entry'):
                continue
            nodes = list(card.walk())
            link = next((n for n in nodes if n.has('u-url') and n.tag=='a' and n.attrs.get('href')), None)
            title = next((n for n in nodes if n.has('p-name') and n.tag in {'h1','h2','h3'}), None)
            if not link or not title:
                continue
            parsed = urlsplit(link.attrs['href'])
            if parsed.netloc and parsed.netloc not in {'jgregorymcverry.com','www.jgregorymcverry.com'}:
                continue
            url = unquote(parsed.path).removesuffix('.php').removesuffix('.html')
            if not url.startswith('/') or url in seen or '..' in url.split('/'):
                continue
            target = next((ROOT/(url[1:]+ext) for ext in ['.php','.html'] if (ROOT/(url[1:]+ext)).is_file()), None)
            if target is None:
                continue
            published = next((n for n in nodes if n.has('dt-published')), None)
            rawdate = (published.attrs.get('datetime') or '') if published else ''
            summary = next((n for n in nodes if n.has('p-summary')), None)
            text = clean(summary.text()) if summary else ''
            records.append({'id':'homepage:'+target.relative_to(ROOT).as_posix(), 'url':url,
                'source':'homepage', 'type':'articles', 'title':clean(title.text()),
                'summary':text[:360], 'date':date_only(rawdate), 'published':rawdate or None,
                'author':'Greg McVerry', 'reply_to':None, 'tags':[],
                'source_file':target.relative_to(ROOT).as_posix(),
                'date_notes':['Metadata taken from article catalog '+catalog.relative_to(ROOT).as_posix()]})
            seen.add(url)
    records.sort(key=lambda r: (r['date'] or '', r['url']), reverse=True)
    target = ROOT/'archive/data/homepage.json'
    target.write_text(json.dumps(records, ensure_ascii=False, indent=2)+'\n')
    counts = {t:sum(r['type']==t for r in records) for t in sorted({r['type'] for r in records})}
    print(json.dumps({'indexed':len(records),'types':counts,'date_review':sum(bool(r['date_notes']) for r in records)},indent=2))

if __name__ == '__main__':
    main()
