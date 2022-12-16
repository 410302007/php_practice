<?php
require './parts/connect_db.php';

$sid =  isset($_GET['sid']) ? intval($_GET['sid']) : 0;

if (empty($sid)) {
  header('Location: list.php');  //回到列表頁
  exit;
}
$sql = "DELETE FROM `address_book` WHERE sid=$sid";
$pdo->query($sql);

header('Location:list.php');
