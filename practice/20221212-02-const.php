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
    echo 12 + 13;
    echo '<br>';  //換行 若沒加換行，會呈現2525;
    echo __DIR__;  //這支php所在的資料夾
    echo '<br>';
    echo __FILE__; //檔案的路徑包含檔名
    echo '<br>';
    echo __LINE__; //第幾列
    echo '<br>';

    ?>
</body>

</html>