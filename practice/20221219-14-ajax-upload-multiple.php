<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form name="form2" onsubmit="return false">

    <textarea name="my_img_file" id="my_img_file" readonly cols="30" rows="10"></textarea>
    <button type="button" onclick="f.click()">選取檔案並上傳</button>
    <!--
      <img src="" alt="" id="myimg" width="300" />
-->
    <br>
    <input type="submit">
  </form>


  <form name="form1" onsubmit="return false" style="display: none;">
    <input type="file" name="photos[]" accept="image/*" multiple />
  </form>


  <script>
    const f = document.form1.elements['photos[]'];
    const myimg = document.querySelector("#myimg");
    f.onchange = async () => {
      const fd = new FormData(document.form1);
      const r = await fetch('upload-multiple.php', {
        method: 'POST',
        body: fd
      });
      const data = await r.json();
      console.log({
        data
      });
      if (data.success) {
        // 成功上傳

        document.form2.my_img_file.value = JSON.stringify(data.filenames, null, 4);
      } else {
        alert(data.error || '沒有上傳的檔案');
      }
    };
  </script>
</body>

</html>