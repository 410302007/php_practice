<?php

$age = 12;           // $3 -> 第一個字元不可為數字
$b = '5';
$c = 'ccc';
// $my_age //snake
// $myAge //camel
// echo $age + $c . '<br>';  //若這裡發生錯誤，後面都不會執行
echo $age + $b . '<br>';     //. => 為字串串接    
//php 之 +(加號) 為字值相加             
echo $age + intval($c) . '<br>';   //打字串轉換為整數

/*
1.error
2.warning
3.notice
*/
