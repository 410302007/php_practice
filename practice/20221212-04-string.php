<?php

$name = 'David';

echo "Hello $name <br> "; //若在雙引號有變數，就會把值帶進來
//塞變數-> 使用雙引號  
echo "Hello {$name}123 <br>";   //7、8相同
echo "Hello ${name}123 <br>";
echo 'Hello 
      $name 
      <br> '; //單引號
