<?php
// date_default_timezone_set('America/Los_Angeles'); 只限於這個php使用

header('Content-Type: text/plain');  // 一般文字檔

echo date("Y-m-d H:i:s");
echo "\n";
echo date("Y-m-d H:i:s", time() + 30 * 24 * 60 * 60);
echo "\n";

$str = '1998/10/15';
$t = strtotime($str);    //把時間的字串轉換為timestamp
echo date("Y-m-d", $t);
