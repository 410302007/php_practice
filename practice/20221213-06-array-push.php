<pre>
<?php
for ($i = 1; $i <= 49; $i++) {
  $ar[] = $i;
}
echo implode(' - ', $ar); //陣列內容中間自串串接
//explode() //切換字串變成陣列
echo '<br>';

$ar2 = range(1, 30, 2);  //範圍從1-30 : 2代表1間隔2=> 奇數
#$ar2 = range(1,30,2); //取數值範圍當陣列元素
shuffle($ar2);  //隨機排序

echo implode(':', $ar2);  // 陣列內容中間字串串接

?>
</pre>