<?php
require './connect_db.php';
$sql = " INSERT INTO `address_book`( `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES(?,?,?,?,?,NOW())";   //NOW() -> 當下的時間   //?問號只能放於值中

$stmt = $pdo->prepare($sql);
$stmt->execute([
  "陳小華's dog",
  'wang@gmail.com',
  '354678',
  '1996-12-14',
  '高雄市'
]);

echo json_encode([
  'rowCount' => $stmt->rowCount(),     //新增幾筆 (rowCount:int)
  'lastInsertId' => $pdo->lastInsertId(), //最新增加的資料，主健的值
]);
