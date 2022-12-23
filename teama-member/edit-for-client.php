<?php
require './client-required.php';
require './parts/connect_db.php';
$title = '修改資料';

// echo json_encode($_POST);

$mid =  isset($_GET['mid']) ? intval($_GET['mid']) : 0;

// if (empty($email)) {
//   header('Location: list.php');  //回到列表頁
//   exit;
// }

$sql = "SELECT * FROM member WHERE mid = $mid";

$r = $pdo->query($sql)->fetch();
if (empty($r)) {
  //透過編號找不到資料的話 就不用作修改
  header('Location: list.php');
  exit;
}
// echo json_encode($r, JSON_UNESCAPED_UNICODE);
?>
<?php include './parts/html-head.php' ?>
<?php include './parts/navbarforclient.php' ?>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">修改資料</h5>
          <form name="form1" onsubmit="checkForm(event)" novalidate>
            <input type="hidden" name="mid" value="<?= $mid ?>">
            <div class="mb-3">
              <label for="name" class="form-label">名字</label>
              <!-- htmlentities => 把字轉換為html -->
              <input type="text" class="form-control" id="name" name="name" required>
              <div class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">信箱</label>
              <input type="email" class="form-control" id="email" name="email" required>
              <div class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="mobile" class="form-label">電話</label>
              <input type="text" class="form-control" id="mobile" name="mobile" pattern="09\d{2}?\d{3}?\d{3}">
              <div class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="birthday" class="form-label">生日</label>
              <input type="date" class="form-control" id="birthday" name="birthday">
              <div class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="address" class="form-label">地址</label>
              <!-- htmlentities => 把字轉換為html -->
              <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
              <div class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">更新密碼</label>
              <input type="text" class="form-control" id="password" name="password" required>
              <div class="form-text"></div>
            </div>
            <button type="submit" class="btn btn-primary">修改</button>

            <input type="button" class="btn btn-primary" onclick="history.back();" value="返回">


          </form>

        </div>
        <!-- <div class="card">
          <input type="hidden" id="avatar_val" value="<?= $_SESSION['client']['avatar'] ?>">
          <img id="myimg" src="./../uploads/<?= empty($_SESSION['client']['avatar']) ? '_default.png' : $_SESSION['client']['avatar'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <button class="btn btn-primary" onclick="f.click()">上傳</button>
            <button class="btn btn-danger" onclick="update_avatar()">確定</button>
            <button class="btn btn-warning" onclick="location.reload()">取消</button>
          </div>
          <form name="form1" onsubmit="return false" style="display: none;">
            <input type="file" name="avatar" accept="image/*" />
          </form>
        </div> -->

      </div>

    </div>



  </div>
  <?php include './parts/scripts.php' ?>
  <script>
    // email 驗證
    function validateEmail(email) {
      var re =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zAZ]{2,}))$/;
      return re.test(email);
    }



    const checkForm = (e) => {
      e.preventDefault(); // 不要讓原來的表單送出

      // 所有輸入欄回復原來的外觀
      const inputs = document.querySelectorAll('input.form-control');
      inputs.forEach((el) => {
        el.style.border = '1px solid #CCCCCC';
        el.nextElementSibling.innerHTML = '';
      });


      // TODO: 欄位資料檢查

      let isPass = true; // 預設是通過驗證的

      let field = document.form1.name; // 當前要驗證的欄位
      if (field.value.length < 2) {
        isPass = false;
        field.style.border = '2px solid red';
        field.nextElementSibling.innerHTML = '請輸入正確的名字';
      }

      field = document.form1.email; // 當前要驗證的欄位
      if (!validateEmail(field.value)) {
        isPass = false;
        field.style.border = '2px solid red';
        field.nextElementSibling.innerHTML = '請輸入正確的 Email';
      }

      field = document.form1.password;
      if (field.value.length < 8) {
        isPass = false;
        field.style.border = '2px solid red';
        field.nextElementSibling.innerHTML = '密碼長度必須要大於 8 個字元以上，並包含小寫字母、大寫字母、數字至少各1';
      }


      if (!isPass) {
        return; // 沒有通過檢查就結束, 不發 AJAX request
      }
      const fd = new FormData(document.form1);
      fetch('edit-for-client-api.php', {
          method: 'POST',
          body: fd
        })
        .then(r => r.json())
        .then(obj => {
          console.log(obj);
          if (obj.success) {
            alert('修改成功');
          } else {
            for (let k in obj.errors) {
              const el = document.querySelector('#' + k);
              if (el) {
                el.style.border = '2px solid red';
                el.nextElementSibling.innerHTML = obj.errors[k];
              }
            }
            alert(`資料沒有修改`);
          }
        })
    };
  </script>
  <?php include './parts/html-foot.php' ?>