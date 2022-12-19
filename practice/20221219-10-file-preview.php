<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form name="form1" onsubmit="return false">
    <input type="file" name="my_file" accept="image/*">
    <br>
  </form>
  <img src="" alt="" id="myimg" width="300">

  <script>
    const f = document.form1.my_file;
    const myimg = document.querySelector('#myimg');

    f.onchange = (e) => {
      console.log(f.files); // FileList, File

      const reader = new FileReader();
      reader.onload = function() {
        myimg.src = reader.result;
      };

      reader.readAsDataURL(f.files[0]); // 讀取檔案內容
    };
  </script>
</body>

</html>