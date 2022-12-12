<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  $age = isset($_GET['age']) ? intval($_GET['age']) : 0;

  if ($age >= 18) {
    echo '<h2>歡迎光臨</h2>';
  } else {
    echo '<h2>長大再來</h2>';
  }






  ?>
</body>

</html>