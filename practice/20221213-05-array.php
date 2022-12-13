<pre>
<?php

//索引式陣列
$ar1 = array(2, 'Bill', 6);
$ar2 = [2, 'Bill', 6];

#echo $ar2  //不要直接輸出陣列 => Array to string

print_r($ar2);    //索引式陣列
// var_dump($ar2);

//關聯式陣列 
$ar3 = array(
  'name' => 'David',
  'age' => 25,
);
$ar4 = [
  'name' => 'David',
  'age' => 25,
];
print_r($ar4);


$ar5 = [
  'Hello',
  'name' => 'David',
  'age' => 25,   //3 => 25
  'World',
];
print_r($ar5);
?>
</pre>