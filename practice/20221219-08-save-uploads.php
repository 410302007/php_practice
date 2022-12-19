<?php

header('Content-Type: application/json');

$success = false;
$error = '';
if (!empty($_FILES['photos']) and is_string($_FILES['photos']['name'])) {  //篩選看有無上傳次檔案
  if (move_uploaded_file(
    $_FILES['photos']['tmp_name'],     //磁碟路徑
    './../uploads/' . $_FILES['photos']['name']  //放置位置
  )) {
    $success = true;    //出現錯誤->更改路徑
  } else {
    $error = '無法搬移檔案';
  }
}


echo json_encode([
  'success' => $success,
  'error' => $error,
  'FILE' => $_FILES
]);
