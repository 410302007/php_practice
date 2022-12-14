<?php
session_start();   #啟用session 功能

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
  <pre><?php
        if (isset($_POST['account'])) {
          print_r($_POST);
        }

        ?></pre>

  <form name="form1" method="post">
    <input type="text" name="account">
    <br>
    <input type="password" name="password">
    <br>
    <input type="submit">
  </form>

</body>

</html>