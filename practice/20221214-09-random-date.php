<?php
// date_default_timezone_set('America/Los_Angeles'); 只限於這個php使用

header('Content-Type: text/plain');  // 一般文字檔
$start = strtotime('1995-01-01');
$end = strtotime('2005-01-01') - 1;
//隨時的時間範圍
for ($i = 0; $i < 20; $i++) {
  $t = rand($start, $end);
  echo date("Y-m-d", $t) . "\n";
}
