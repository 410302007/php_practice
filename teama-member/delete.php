<?php
require './admin-required.php';
require './parts/connect_db.php';

$sid =  isset($_GET['mid']) ? intval($_GET['mid']) : 0;

if (empty($sid)) {
  header('Location: list.php');  //回到列表頁
  exit;
}
$sql = "DELETE FROM `member` WHERE mid=$mid";
$pdo->query($sql);

if (empty($_SERVER['HTTP_REFERER'])) {
  $come_from = 'list.php';
} else {
  $come_from = $_SERVER['HTTP_REFERER']; // 從哪裡來, 回哪裡去
}

header("Location: $come_from");