<?php
$email = $_GET['email'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Tabel Ideal</title>
  <link rel="stylesheet" href="./css/styleGender.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="icon" type="image/png" href="img/Peduli Anak.png" />
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
          <a href= "Reminder.php? email=<?= $email ?>">Jadwal Posyandu</a>
          </li>
          <li>
          <a href= "chatBox.php? email=<?= $email ?>">HaloDoc</a>
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
  <center>
    <div class="title">
      <h5>Pilih Gender Anak</h5>
    </div>
  </center>
  

  <div class="containerr">
    <div class="logoo">
      <img src="./img/Peduli Anak.png" alt="" />
    </div>

    <div class="wrapper">
      <div class="left">
      <a href="pilih_tabel_lakilaki.php? email=<?= $email ?>">
      <img src="./img/Laki-laki.svg" alt="" width="100">
      <div class="text">
      <h3>Laki-laki</h3>
      </div>
    </a>


      </div>

      <div class="leftt">
        <a href="pilih_tabel_perempuan.php? email=<?= $email ?>">
      <img src="./img/perempuan.svg" alt="" width="100">
      <div class="text">
      <h3>Perempuan</h3>

      </div>
      
    </a>

      </div>

    </div>

  </div>
  </div>
  </div>
  </div>

</body>

</html>