<?php
require './parts/connect_db.php';
header('Content-Type:application/json');

$output = [
  'success' => false,
  'postData' => $_POST,  //回傳值
  'code' => 0,   //code ->
  'erros' => []
];

if (empty($_POST['name'])) {    //如果是空的
  $output['erros']['name'] = '沒有姓名資料';
  echo json_encode($output, JSON_UNESCAPED_UNICODE);
  exit;
}

//TODO: 欄位資料檢查

echo json_encode($output, JSON_UNESCAPED_UNICODE);
