<?php
$a = true;
$b = false;

$c = 5 || 7;
$d = 5 && 7;

$e = 5 or 7;  //優先權比 = 設定還要低
$f = 5 and 0; //優先權比 = 設定還要低

$g = (5 or 7);
$h = (5 and 0);

echo "---{$a}---<br>";
echo "---{$b}---<br>";

var_dump($c);  //查看變數的類型和變數值
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($g);
echo "<br>";
var_dump($h);
echo "<br>";
