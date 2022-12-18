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
              <input type="email" class="form-control" id="email" name="email" required>
              <div class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">mobile</label>
              <input type="number" class="form-control" id="mobile" name="mobile" pattern="09\d{2}\d{3}\d{3}">
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
    e.preventDefault(); //不要讓原來的表單送出

    //TODO: 欄位資料檢查

    const formData = new FormData(document.form1); //formData 為表單物件

    //轉換為json格式
    // fetch('add-api.php', {
    //   method: 'POST', //post 方式送表單
    //   body: formData //送formData這個物件
    // }).then(function(response) {
    //   return response.json()
    // }).then(obj => {
    //   console.log(obj);
    // })方法同下
    fetch('add-api.php', {
        method: 'POST', //post 方式送表單
        body: formData //送formData這個物件
      }).then(r => r.json())
      .then(obj => {
        console.log(obj);
      })

    //轉換為純文字
    // fetch('add-api.php', {
    //   method: 'POST', //post 方式送表單
    //   body: formData //送formData這個物件
    // }).then(function(response) {
    //   return response.text()    
    // }).then(txt => {
    //   console.log(txt);
    // })






  };
</script>
<?php include './parts/html-foot.php' ?>