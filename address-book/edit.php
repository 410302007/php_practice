<?php
require './parts/connect_db.php';

$sid =  isset($_GET['sid']) ? intval($_GET['sid']) : 0;

if (empty($sid)) {
  header('Location: list.php');  //回到列表頁
  exit;
}

$sql = "SELECT * FROM address_book WHERE sid = $sid ";

$r = $pdo->query($sql)->fetch();
if (empty($r)) {
  //透過編號找不到資料的話 就不用作修改
  header('Location: list.php');
  exit;
}
echo json_encode($r, JSON_UNESCAPED_UNICODE);
