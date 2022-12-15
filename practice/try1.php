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
    width: 100px;
    height: 20px;
  }
</style>

<body>
  <table>
    <?php for ($j = 0; $j <= 256; $j += 18) : ?>
      <tr>
        <?php for ($i = 0; $i < 256; $i += 18) : ?>
          <td style="background-color: rgb(<?php echo $j ?>,<?= $i ?>,0)"></td>
        <?php endfor ?>
      </tr>
    <?php endfor ?>
  </table>
</body>

</html>