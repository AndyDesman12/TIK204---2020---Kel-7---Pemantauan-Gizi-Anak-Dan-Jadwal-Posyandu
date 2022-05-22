<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "logindb";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed");

$_SESSION["username"] = "username";
session_start();

$email = $_GET['email'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <link rel="stylesheet" href="./css/styleProfil.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="icon" type="image/png" href="img/Peduli Anak.png" />
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>


  <div class="overlay overlay-lg">
    <img src="./img/blobwhite.png" alt="">
  </div>
  <nav>
    <div class="container">
      <div class="links">
        <ul>
          <li>
            <a href="home.php? email=<?= $email ?>">Home</a>
          </li>
          <li>
            <a href="#jadwal">Jadwal Posyandu</a>
          </li>
          <li>
            <a href="#halodoc">HaloDoc</a>
          </li>
          <li>
            <a href="#tabelideal">Tabel Ideal</a>
          </li>
          <li>
          <a href= "profil.php? email=<?= $email ?>" class="active">Profil</a>
          </li>
        </ul>
      </div>

  </nav>



  <div class="containerr">
    <div class="logoo">
      <img src="./img/Peduli Anak.png" alt="" />
    </div>
    <div class="wrapper">
      <div class="left">
        <img src="./img/logo user.svg" alt="" width="100">
      </div>
      <div class="right">
        <div class="info">
          <?php
          $sql = "SELECT * FROM login_register WHERE email='$email'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <h3>User Profile</h3>
              <div class="info_data">
                <div class="data">
                  <h4>Username</h4>
                  <?php echo $row['username']; ?>
                  <br>
                  <br>
                  <h4>Email</h4>
                  <?php echo $row['email']; ?>
                </div>
              </div>
        </div>
    <?php
            }
          }
    ?>
<br>
<br>
<br>
    <div class="show-btn">
      <button>Logout</button>
    </div>
    <div class="modal">
      <div class="top-content">
        <div class="left-text">
          Warning!
        </div>
        <span class="close-icon"><i class="fas fa-times"></i></span>
      </div>
      <div class="bottom-content">
        <div class="text">
          Logout
        </div>
        <p>
          Apakah Anda Yakin Ingin Keluar?
        </p>
        <div class="close-btniya">
          <a href="index.php">
            <button>Iya</button>
          </a>
          <div class="close-btntidak">
            <a href="profil.php? email=<?= $email ?>">
              <button>Tidak</button>
            </a>

          </div>


        </div>
      </div>
    </div>
    <script>
      $('.show-btn').click(function() {
        $('.modal').toggleClass("show");
        $('.show-btn').addClass("disabled");
      });
      $('.close-icon').click(function() {
        $('.modal').toggleClass("show");
        $('.show-btn').removeClass("disabled");
      });
      $('.close-btn').click(function() {
        $('.modal').toggleClass("show");
        $('.show-btn').removeClass("disabled");
      });
    </script>

      </div>
    </div>
  </div>
  </div>

</body>

</html>