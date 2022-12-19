<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form name="form1" action="20221219-06-files.php" method="post" enctype="multipart/form-data">
    <input type="file" name="my_file[]" accept="image/*" multiple>
    <!--accept:主類型及次類型; image/*=>全部類型; image/jpeg,image/png =>限定兩種(jpeg & png)-->
    <!--multuple=> 選擇多個檔案 ; 需加中括號-->
    <br>


  </form>
  <script>
    const f = document.form1.my_file;

    f_onchange = (e) => {
      console.log(f.files); //FileList , File
    };
  </script>
</body>

</html>