<?php

header('Content-Type: application/json');
//上傳的欄位名稱為avatar

//輸出的格式
$output = [
  'success' => false,
  'error' => '',
  'filename' => '',
];

//篩選檔案類型，同時決定副檔名
$extMap = [
  'image/jpeg' => '.jpg',   //my_type
  'image/png' => '.png',
];
$path = __DIR__ . '/../uploads/';   //路徑位址   


if (!empty($_FILES['avatar'])) {  //篩選看有無上傳次檔案
  $f = $_FILES['avatar'];

  $ext = isset($extMap[$f['type']]) ? $extMap[$f['type']] : ''; //決定副檔名
  if (empty($ext)) {     //檔案類型是錯的
    $output['error'] = '檔案類型錯誤';
  } else {
    $fname = sha1($f['name'] . rand()) . $ext;   //字串   //uniqid 可改random(rand)   //檔案名稱 不包含路徑    
  }

  if (move_uploaded_file(
    $f['tmp_name'],     //磁碟路徑
    $path . $fname
  )) {
    $output['success'] = true;    //出現錯誤->更改路徑
    $output['filename'] = $fname;
  } else {
    $output['error'] = '無法搬移檔案';
  }
}


echo json_encode($output);
