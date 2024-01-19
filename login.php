<?php 

  session_start();

  include './db/config.php';
   
  if (isset($_POST["submit"])) {

    if (login($_POST) > 0) {
      echo "
      <script>
        alert('Login Berhasil !!!');
        document.location.href = 'home.php';
      </script>

      ";
    }
    else {
      echo "
      <script>
        alert('Login Gagal !!!');
        document.location.href = 'login.php';
      </script>

      ";
    }
  }

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="./css/stylelogin.css">
  <link rel="icon" href="img/icon.png">
</head>
<body>
  <div class="login-box">
    <img src="img/Logo_PLN.png" style="width: 150px; padding-left: 190px; margin-bottom: 20px; margin-top: -15px;">
    <h2>Login</h2>
    <form action="" method="POST">
      <div class="user-box">
        <input type="text" name="username" required>
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>
      <a href="">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" name="submit" value="Submit">
      </a>
    </form>
  </div>
</body>
</html>