<?php
// include './connect_db.php';  //錯誤
require './connect_db.php';    //警告

$sql = "SELECT * FROM address_book LIMIT 5,5";
$stmt = $pdo->query($sql);
?>

<table>
  <?php while ($r = $stmt->fetch()) : ?>
    <tr>
      <td><?= $r['sid'] ?></td>
      <td><?= $r['name'] ?></td>
      <td><?= $r['email'] ?></td>
      <td><?= $r['mobile'] ?></td>
    </tr>
  <?php endwhile ?>
</table>