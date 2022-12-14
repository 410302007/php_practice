<?php
// include './connect_db.php';  //錯誤
require './connect_db.php';    //警告

$sql = "SELECT * FROM address_book LIMIT 5";
$stmt = $pdo->query($sql);    //stmt=> pdo statement   ->引用

// $row = $stmt->fetch(PDO::FETCH_ASSOC);    //FETCH_ASSOC 關聯式
// $row = $stmt->fetch(PDO::FETCH_NUM);     //FETCH_NUM索引式 
$row = $stmt->fetchAll();  // 拿到所有資料

header('Content-Type:application/json');
echo json_encode($row, JSON_UNESCAPED_UNICODE);
