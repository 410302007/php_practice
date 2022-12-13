<pre>
<?php
$ar1 = [
  'name' => 'David',
  'age' => 25,
];

$ar2 = $ar1; //陣列設定是以複製後設定(ar1複製後再給ar2)
$ar3 = &$ar1; //設定位址(設定參照)   //指向相同的陣列

$ar1['age'] = 18;  //php的陣列一律使用中括號表示

print_r($ar2);
print_r($ar3);

$a = 10;
$b = &$a;
$b = 7;
echo "\$a = $a\n";  //a = 7
?>
</pre>