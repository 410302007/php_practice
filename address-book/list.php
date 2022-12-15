<?php
require './parts/connect_db.php';

$perPage = 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page < 1) {
  header('Location: ?page=1');   //location 後可加網址 或路徑(+ /.)  
  exit;
}

$sql = sprintf(
  "SELECT * FROM address_book ORDER BY sid DESC LIMIT %s, %s",   //DESC -> 遞減
  ($page - 1) * $perPage,
  $perPage
);

$rows = $pdo->query($sql)->fetchAll();



?>
<?php include './parts/html-head.php' ?>
<?php include './parts/navbar.php' ?>
<div class="container">
  <div class="row">
    <div class="col">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">姓名</th>
            <th scope="col">電郵</th>
            <th scope="col">手機</th>
            <th scope="col">生日</th>
            <th scope="col">地址</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $r) : ?>
            <tr>
              <td><?= $r['sid'] ?></td>
              <td><?= $r['name'] ?></td>
              <td><?= $r['email'] ?></td>
              <td><?= $r['mobile'] ?></td>
              <td><?= $r['birthday'] ?></td>
              <td><?= $r['address'] ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>

      </table>
    </div>
  </div>
</div>
<?php include './parts/scripts.php' ?>
<?php include './parts/html-foot.php' ?>