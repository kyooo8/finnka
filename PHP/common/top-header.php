<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['id']) || $_SESSION['id'] === ''){
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../CSS/style.css" />

    <title>finnka</title>
  </head>
  <div class="header-box"></div>
  <header>
  <body>
  <nav class="navbar navbar-expand-sm navbar-light white">
  <div class="container-fluid">
    <a class="navbar-brand" href="top.php">
      <img class="logo" name="logo" src="../CSS/finnkaLogo.jpg" alt="logo">
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse show" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <div class="row">
          <div class="col-auto">
            <a href="login-input.php">
              <button type="submit" class="btn btn-secondary">
                <i class="fa-solid fa-right-from-bracket"></i> ログイン
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
</header>
<?php
}else{
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../CSS/style.css" />

    <title>finnka</title>
  </head>
  <div class="header-box"></div>
  <header>
  <body>
  <nav class="navbar navbar-expand-sm navbar-light white">
  <div class="container-fluid">
    <a class="navbar-brand" href="top.php">
      <img class="logo" name="logo" src="../CSS/finnkaLogo.jpg" alt="logo">
    </a>
    <button
      class="navbar-toggler collapsed"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <div class="row">
          <div class="col-auto">
            <a href="search.php">
              <button type="submit" class="btn btn-secondary">
                <i class="fas fa-search"></i> 検索
              </button>
            </a>
          </div>
          <div class="col-auto">
            <a href="cartDisplay.php">
              <button type="submit" class="btn btn-secondary">
                <i class="fa-solid fa-cart-shopping"></i> カート
              </button>
            </a>
          </div>
          <div class="col-auto">
            <a href="userInfo.php">
              <button type="submit" class="btn btn-secondary">
                <i class="fa-solid fa-user"></i> ユーザー
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
</header>
<?php
}
?>
<style>
  .header-box {
  height: 85px;
}

  header {
    position: fixed;
    top: 0;
    width: 100%;
    background: rgba(0,0,0,0);
    z-index: 100;
    
  }
</style>