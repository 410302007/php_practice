<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <title>Document</title>
</head>

<body>
  <form name="form2" onsubmit="return false">

    <textarea name="my_img_file" id="my_img_file" readonly cols="30" rows="10"></textarea>
    <button type="button" onclick="f.click()">選取檔案並上傳</button>
    <!--
      <img src="" alt="" id="myimg" width="300" />
-->
    <div class="conatiner">
      <div id="img_container">
        <!--
        <div class="card" style="width: 10rem;">
          <img src="./../uploads/2e078e76f73caccccd2e13def0914ae29a05ad1e.png" class="card-img-top" alt="...">
          <div class="card-body">
            
          </div>
        </div>
      -->
      </div>
    </div>
    <br>
    <input type="submit">
  </form>


  <form name="form1" onsubmit="return false" style="display: none;">
    <input type="file" name="photos[]" accept="image/*" multiple />
  </form>


  <script>
    const f = document.form1.elements['photos[]'];
    const myimg = document.querySelector("#myimg");

    const cars_tpl_func = (fn) => {

      return `
        <div class="card" style="width: 10rem;">
          <img src="./../uploads/${fn}" class="card-img-top" alt="...">
          <div class="card-body">
            <p>${fn}</p>
          </div>
        </div>
        `;
    }



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

        let str = '';
        for (let fn of data.filenames) {
          str += cars_tpl_func(fn);
        }
        document.querySelector('#img_container').innerHTML = str;
      } else {
        alert(data.error || '沒有上傳的檔案');
      }
    };
  </script>
</body>

</html>