<?php
require './parts/connect_db.php';
$pageName = 'add';
$title = '新增資料';


?>
<?php include './parts/html-head.php' ?>
<?php include './parts/navbar.php' ?>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">新增資料</h5>
          <form name="form1" onsubmit="checkForm(event)" novalidate>
            <!--novalidate->不要驗證-->
            <div class="mb-3">
              <label for="name" class="form-label">name</label>
              <input type="text" class="form-control" id="name" name="name" required>
              <div class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">email</label>
              <input type="text" class="form-control" id="email" name="email">
              <div class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="mobile" class="form-label">mobile</label>
              <input type="text" class="form-control" id="mobile" name="mobile" pattern="09\d{2}-?\d{3}-\d{3}">
              <div class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="birthday" class="form-label">birthday</label>
              <input type="date" class="form-control" id="birthday" name="birthday">
              <div class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="address" class="form-label">address</label>

              <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
              <div class="form-text"></div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>
      </div>

    </div>
  </div>



</div>
<?php include './parts/scripts.php' ?>
<script>
  const checkForm = (e) => {
    e.preventDefault(); //不讓表單送出

    // TODO: 欄位資料檢查

    const fd = new FormData(document.form1); //表單物件 //不刷新:不跳轉頁面

    fetch('add-api.php', { //fetch 一定使用2個then
        method: 'POST',
        body: fd
      }).then(r => r.json()) //轉為json文件
      .then(obj => {
        console.log(obj);
      })


  };
</script>
<?php include './parts/html-foot.php' ?>