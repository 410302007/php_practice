<?php
// include './connect_db.php';  //錯誤
require './connect_db.php';    //警告

$sql = "SELECT * FROM address_book LIMIT 11,5";   //從第11筆開始，選5筆
$rows = $pdo->query($sql)->fetchAll();
?>

<table>
  <?php foreach ($rows as $r) : ?>
    <tr>
      <td><?= $r['sid'] ?></td>
      <td><?= $r['name'] ?></td>
      <td><?= $r['email'] ?></td>
      <td><?= $r['mobile'] ?></td>
    </tr>
  <?php endforeach ?>
</table>