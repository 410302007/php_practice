<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
</style>

<body>
  <table border='1'>
    <?php for ($k = 1; $k <= 9; $k++) : ?>
      <tr>
        <?php for ($i = 1; $i <= 9; $i++) : ?>
          <!-- <td><?= $i . '*' . $k . '=' . ($i * $k) ?></td> -->
          <!--回傳 ; 上下相同效果-->
          <td><?= sprintf('%s * %s = %s', $i, $k, $i * $k) ?></td>

          <!--輸出-->
          <!-- <td><?= printf('%s * %s = %s', $i, $k, $i * $k) ?></td> -->

        <?php endfor ?>
      </tr>
    <?php endfor ?>
  </table>

  <?php  /* 複雜內容使用的註解*/ ?>
  <?php /*  
  <table>
    <tr>
      <?php for ($i = 0; $i < 256; $i += 17) : ?>
        <td style="background-color: rgb(0, <?php echo $i ?>,0)"></td>
        <td style="background-color: rgb(0, <?php echo $i ?>,0)"></td>
        與前面相同  
      <?php endfor ?>
    <tr>
    </tr>
  </table>
*/ ?>
</body>

</html>