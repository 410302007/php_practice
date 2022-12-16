<style>
  nav.navbar .navbar-nav .nav-link.active {
    background-color: blue;
    color: white;
    border-radius: 10px;
    font-weight: 800;
  }
</style>
<div class="container">
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index_.php">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?= $pageName == 'list' ? 'active' : '' ?>" href="list.php">列表</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $pageName == 'add' ? 'active' : '' ?>" href="add.php">新增</a>
          </li>
        </ul>
        <ul class="navbar-nav  mb-2 mb-lg-0">
          <?php if (isset($_SESSION['admin'])) : ?>
            <li class="nav-item">
              <a class="nav-link" href="javascript:">管理者的帳號</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">登出</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link <?= $pageName == 'login' ? 'active' : '' ?>" href="login.php">登入</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#沒有實作">註冊</a>
            </li>
          <?php endif ?>


        </ul>

      </div>
    </div>
  </nav>
</div>