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
          <form name="form1" method="post" action="add-api.php">
            <div class="mb-3">
              <label for="name" class="form-label">name</label>
              <input type="text" class="form-control" id="name" name="name">
              <div class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">email</label>
              <input type="text" class="form-control" id="email" name="email">
              <div class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="mobile" class="form-label">mobile</label>
              <input type="text" class="form-control" id="mobile" name="mobile">
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
<?php include './parts/html-foot.php' ?>