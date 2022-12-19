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

    //Promise unction, 用來取得圖檔的 DataURL
    function getDataURLByFile(file) {
      if (!(file instanceof File)) { //file是否為File這個類型?
        throw new Error("必須是File類型");
      }
      return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.onload = function() {
          resolve(reader.result);
        };
        reader.onerror = function(error) {
          reject(error);
        };

        reader.readAsDataURL(f.files[0]); // 讀取檔案內容
      });
    }

    f.onchange = async (e) => {
      console.log(f.files); // FileList, File

      myimg.src = await getDataURLByFile(f.files[0]);
    };
  </script>
</body>

</html>