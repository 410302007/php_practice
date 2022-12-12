<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  td {
    width: 60px;
    height: 60px;
  }
</style>

<table>
  <tr>
    <?php for ($i = 0; $i < 256; $i += 17) : ?>
      <td style="background-color: rgb(0, <?php echo $i ?>,0)"></td>
      <!-- <td style="background-color: rgb(<?= $i ?>,0,0)"></td> -->
      <!-- 與前面相同 -->
    <?php endfor ?>
  <tr>
  </tr>
</table>
</body>

</html>