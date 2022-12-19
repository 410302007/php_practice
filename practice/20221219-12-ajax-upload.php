<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <button onclick="f.click()">選取檔案並上傳</button>
  <form name="form1" onsubmit="return false" style="display:none;">
    <input type="file" name="photo" accept="image/*">
    <br>
  </form>
  <img src="" alt="" id="myimg" width="300">

  <script>
    const f = document.form1.photo;
    const myimg = document.querySelector("#myimg");
    f.onchange = async () => {
      const formData = new FormData(document.form1);
      const r = await fetch('upload-single.php', {
        method: 'POST',
        body: formData

      });
      const data = await r.json();
      console.log({
        data
      });
      if (data.success) {
        //上傳成功
        myimg.src = 'http://localhost/myproject/uploads/' + data.filename;
      } else {
        alert(data.error || '沒有上傳的檔案');
      }

    };
  </script>
</body>

</html>