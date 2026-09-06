<?php
require __DIR__.'/../archive/library.php';
function verify($value,$message) { if (!$value) throw new RuntimeException($message); }
verify(archive_valid_date('2020-02-29'),'Leap day');
verify(!archive_valid_date('2019-02-29'),'Invalid leap day');
foreach ([['type'=>'bogus'],['type'=>['notes']],['month'=>'2'],['year'=>'2019','month'=>'2','day'=>'29'],['page'=>'0'],['page'=>'9999999']] as $bad) {
    $rejected=false; try { archive_selection($bad); } catch (InvalidArgumentException $e) { $rejected=true; }
    verify($rejected,'Invalid filter accepted');
}
$s=archive_selection(['type'=>'replies','year'=>'2020','month'=>'2','day'=>'29','page'=>'2']);
verify($s['month']==='02' && $s['page']===2,'Filter normalization');
verify(archive_url('javascript:alert(1)')==='' && archive_url('//evil.example')==='','Unsafe URL');
verify(esc('<script>')==='&lt;script&gt;','Output escaping');
$fixture=[['type'=>'notes','date'=>'2020-02-29'],['type'=>'replies','date'=>'2020-02-29'],['type'=>'replies','date'=>'2020-03-01'],['type'=>'replies','date'=>null]];
verify(count(archive_filter($fixture,$s))===1,'Exact type/date filtering');
verify(count(archive_filter($fixture,$s,false))===3,'Type-only date counts');
verify(strpos(archive_link($s,['page'=>3]),'day=29')!==false,'Pagination lost date');
verify(strpos(archive_link($s,['year'=>'','month'=>'','day'=>'','page'=>1]),'year')===false,'Clear dates');
$entries=archive_entries(); verify(count($entries)>0,'Missing content index');
$ids=[]; foreach($entries as $e) { verify(!isset($ids[$e['id']]),'Duplicate entry'); $ids[$e['id']]=1; }
echo "Archive tests passed: ".count($entries)." entries.\n";
