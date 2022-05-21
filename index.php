<?php
session_start();

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="icon" type="image/png" href="img/Peduli Anak.png" />
    <title>Login Peduli Anak</title>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" action="login.php" class="sign-in-form">
            <h2 class="title">Selamat Datang!</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" name="email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                type="password"
                placeholder="Password"
                name="password"
                required
              />
            </div>
            <input type="submit" value="Masuk" class="btn solid" />
          </form>
          <form method="POST" action="daftar.php" class="sign-up-form">
            <h2 class="title">Daftar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input
                type="text"
                placeholder="Username"
                id="username"
                name="username"
                required
              />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input
                type="email"
                placeholder="Email"
                id="email"
                name="email"
                required
              />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                type="password"
                placeholder="Password"
                id="password"
                name="password"
                required
              />
            </div>
            <input type="submit" class="btn" value="Daftar" href="index.html" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Pengguna Baru ?</h3>
            <p>
              Ayo Daftarkan Akun Anda Sekarang
              <br />
              Mudah, Cepat, dan Tepat
            </p>
            <button class="btn transparent" id="sign-up-btn">Daftar</button>
          </div>
          <img src="img/Play Time.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah Punya Akun ?</h3>
            <p>Masuk Sekarang</p>
            <button class="btn transparent" id="sign-in-btn">Masuk</button>
          </div>
          <img src="img/Doctor.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="./js/app.js"></script>
  </body>
</html>
