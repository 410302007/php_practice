<?php
require './parts/connect_db.php';
// require '/client-required.php';
$pageName = 'welcome';
$title = '歡迎';



$sql = "SELECT * FROM `member` where `name` =?";
$stmt = $pdo->prepare($sql);
$stmt->execute([
  $_SESSION['client']['name']
]);
$row = $stmt->fetch();

// echo json_encode($row);



?>
<?php include './parts/html-headforclient.php' ?>
<?php include './parts/navbarforclient.php' ?>

<h1 class="my-5">你好， <b><?php echo $_SESSION["client"]['name']; ?></b>，歡迎光臨!</h1>
<p>
  <a href="edit-for-client.php?mid=<?php echo $_SESSION["client"]['mid']; ?>" class="btn btn-primary">編輯個人資料</a>
  <a href="reset-password.php" class="btn btn-warning">重設密碼</a>
  <a href="logout-api.php" class="btn btn-danger ml-3">登出</a>
</p>
<?php include './parts/scripts.php' ?>

<?php include './parts/html-foot.php' ?>