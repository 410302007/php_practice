<?php
require './parts/connect_db.php';
header('Content-Type: application/json');

//錯誤訊息
$output = [
  'success' => false,  //回給用戶端 看是否新增成功;預設值為false
  'postData' => $_POST,
  'code' => 0,
  'errors' => []
];

if (empty($_POST['name'])) {
  $output['errors']['name'] = '沒有姓名資料';
  echo json_encode($output, JSON_UNESCAPED_UNICODE);
  exit;
}

//TODO: 欄位資料檢查
$isPass = true; //是否通過驗證(預設:true)



if (mb_strlen($_POST['name']) < 2) { //mb-strlen->中文字英文字轉字串
  $output['errors']['name'] = '請填寫正確的姓名';
  $isPass = false;
}
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
  $output['errors']['email'] = '請填寫正確的email';
  $isPass = false;
}



$sql = "INSERT INTO `address_book`(`name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES (
  ?,?,?,
  ?,?,NOW()
)";
$stmt = $pdo->prepare($sql);


$t = strtotime($_POST['birthday']);
$birthday = null;
if (!empty($_POST['birthday'])) {
  $t = strtotime($_POST['birthday']);
}
if ($t !== false) {
  $birthday = date('Y-m-d', $t);
}
if ($isPass) {
  $stmt->execute([
    $_POST['name'],
    $_POST['email'],   //$_POST['email']??'', > 如果沒有自然define就寫入空字串
    $_POST['mobile'] ?? '',
    $birthday,
    $_POST['address'] ?? '',
  ]);
  //有無新增成功-> 看rowCount
  $output['success'] = !!$stmt->rowCount();
}





echo json_encode($output, JSON_UNESCAPED_UNICODE);
