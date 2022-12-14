<?php
session_start();   #啟用session 功能


$users = [
  'shin' => [
    'pw' => '2345',
    'nickname' => '小新'
  ],
  'ming' => [
    'pw' => '5678',
    'nickname' => '小明'
  ],
];
$error_msg = '';

if (!empty($_POST)) {    //判斷字串是否為空字串(true/false)
  //如果用戶端有送表單資料出來
  $error_msg = '欄位錯誤';
  if (!empty($_POST['account']) and !empty($_POST['password'])) {
    //如果兩欄都有值
    $error_msg = '帳密錯誤 1';
    if (!empty($users[$_POST['account']])) {     //如果不是空的 
      #帳號是對的
      $error_msg = '帳密錯誤 2';
      $user = $users[$_POST['account']];         //代表是對的帳號
      if ($_POST['password'] === $user['pw']) {
        //密碼也是對的
        $error_msg = '';
        $_SESSION['user'] = [
          'account' => $_POST['account'],
          'nickname' => $user['nickname'],
        ];
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <pre><?php
        // if (isset($_POST['account'])) {
        //   print_r($_POST);
        // }

        ?></pre>
  <?php if (isset($_SESSION['user'])) : ?>
    <h2><?= $_SESSION['user']['nickname'] ?> 您好</h2>
    <div>
      <a href="20221214-03-logout.php">登出</a>
    </div>
  <?php else : ?>
    <?php if (!empty($error_msg)) : ?>
      <div class="alert alert-danger" role="alert">
        <?= $error_msg ?>
      </div>
    <?php endif ?>
    <form name="form1" method="post">
      <input type="text" name="account" value="<?= isset($_POST['account']) ? htmlentities($_POST['account']) : '' ?>">
      <br>
      <input type="password" name="password" value="<?= isset($_POST['password']) ? htmlentities($_POST['password']) : '' ?>">
      <br>
      <input type="submit">
    </form>
  <?php endif ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script>
    const myAlert = $('.alert.alert-danger');
    if (myAlert.length) {
      setTimeout(() => {
        myAlert.slideUp();
      }, 2000);
    }
  </script>
</body>

</html>