<?php
require './parts/connect_db.php';
$pageName = 'login';
?>
<?php include './parts/html-head.php' ?>
<?php include './parts/navbar.php' ?>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">管理者登入</h5>
    <form name="form1" onsubmit="checkForm(event)">
      <div class="mb-3">
        <label for="account" class="form-label">帳號</label>
        <input type="text" class="form-control" id="account" name="account" required>
        <div class="form-text"></div>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">密碼</label>
        <input type="password" class="form-control" id="password" name="password">
        <div class="form-text"></div>
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>
      <!--直接觸發Onsubmit(17)-->
    </form>

  </div>
</div>
<?php include './parts/scripts.php' ?>
<script>
  function checkForm(e) {
    e.preventDefault();

    // TODO: 欄位檢查
    console.log(document.form1.account.value);
    console.log(document.form1.password.value);
  }
</script>
<?php include './parts/html-foot.php' ?>