<?php
session_start();   #啟用session 功能


if (!isset($_SESSION['num'])) {    #如果沒有設定，
  $_SESSION['num'] = 0;             #就設定為0。
}
$_SESSION['num']++;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  echo $_SESSION['num'];
  ?>
</body>

</html>