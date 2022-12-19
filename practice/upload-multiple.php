<?php

header('Content-Type: application/json');
// 上傳的欄位名稱 photos

// 輸出的格式
$output = [
  'success' => false,
  'error' => [],
  'filenames' => [],
  'files' => $_FILES,  // 除錯用
];

// 篩選檔案類型, 決定副檔名
$extMap = [
  'image/jpeg' => '.jpg',
  'image/png' => '.png',
];

$path = __DIR__ . '/../uploads/';

if (!empty($_FILES['photos']) and is_array($_FILES['photos']['name'])) {
  $f = $_FILES['photos'];


  foreach ($f['name'] as $k => $name) {
    if ($f['error'][$k] === 0) {
      // 如果上傳過程沒有錯誤

      // 決定副檔名
      $ext = isset($extMap[$f['type'][$k]]) ? $extMap[$f['type'][$k]] : '';

      if (empty($ext)) {
        continue;
        // 檔案類型是錯的
        $output['error'][$k] = '檔案類型錯誤';
      }

      $fname = sha1($name . rand()) . $ext; // 檔案名稱, 不包含路徑

      if (move_uploaded_file(
        $f['tmp_name'][$k],
        $path . $fname
      )) {
        $output['filenames'][] = $fname;
      } else {
        $output['error'][$k] = '無法搬移檔案';
      }
    }
  }

  if (count($output['filenames'])) {
    $output['success'] = true;
  }
}

echo json_encode($output);
