<?php
require './parts/connect_db.php';

$perPage = 25; //每頁25筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page < 1) {
  header('Location: ?page=1');   //location 後可加網址 或路徑(+ /.)  
  exit;
}
$t_sql = "SELECT COUNT(1) FROM address_book";   //4000筆
//總筆數
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];    //fetch_num->索引式陣列 //第一個column就是總筆數

//總頁數
$totalPages = ceil($totalRows / $perPage); //ceil  

$rows = [];
//如果有資料的話
if (!empty($totalRows)) {
  if ($page > $totalPages) {
    //頁碼超出範圍，轉向到最後一頁
    header('Location: ?page = ' . $totalPages);
    exit;
  }


  $sql = sprintf(
    "SELECT * FROM address_book ORDER BY sid DESC LIMIT %s, %s",   //DESC -> 遞減
    ($page - 1) * $perPage,
    $perPage
  );

  $rows = $pdo->query($sql)->fetchAll();
}


?>
<?php include './parts/html-head.php' ?>
<?php include './parts/navbar.php' ?>
<div class="container">
  <div class="row">
    <div class="col">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
            <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
          </li>

          <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <li class="page-item <?= $i == $page ? 'active' : '' ?> ">
              <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
            </li>
          <?php endfor ?>

          <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
            <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
          </li>
        </ul>
      </nav>
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