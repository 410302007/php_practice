<!-- <pre> -->
<?php
$ar1 = [
  'name' => '小美',
  'age' => 25,
];

echo json_encode($ar1, JSON_UNESCAPED_UNICODE);  //編碼成json字串  //{"name":"\u5c0f\u7f8e","age":25}; \u->中文字
//json_decode //對 JSON 格式的字串進行解碼

?>
<!-- </pre> -->