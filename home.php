<?php
$email = $_GET['email'];

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Peduli Anak</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/styleUtama.css" />
  <link rel="icon" type="image/png" href="img/Peduli Anak.png" />
</head>

<body>
  <main>
    <header id="home">
      <div class="overlay overlay-lg">
        <img src="./img/blobwhite.png" alt="">
      </div>

      <nav>
        <div class="container">
          <div class="logo">
            <img src="./img/Peduli Anak.png" alt="" />
          </div>

          <div class="links">
            <ul>
              <li>
                <a href="#home">Home</a>
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

          <div class="hamburger-menu">
            <div class="bar"></div>
          </div>
        </div>
      </nav>

      <div class="header-content">
        <div class="container grid-2">
          <div class="column-1">
            <h2 class="header-title">Selamat Datang</h2>
            <p class="text">
              Ayo lindungi buah hati anda dari bahaya penyakit !
              Dapatkan vaksin dan imunisasi gratis di puskesmas terdekat dengan mudah, aman, dan cepat dengan
              <strong>
                Peduli Anak
              </strong>

            </p>
          </div>

          <div class="column-2 image">
            <img src="./img/shapes/points2.png" class="points points2" alt="" />
            <img src="./img/imunisasi.png" class="img-element z-index" alt="" />
          </div>
        </div>
      </div>
    </header>
    </div>
    </div>
    </div>
    </section>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <section class="testimonials section" id="jadwal">
      <div class="container">
        <div class="section-header">
          <h3 class="title">Jadwal Posyandu</h3>
        </div>

        <div class="testi-content grid-2">
          <div class="column-1 reviews">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>

                  <p class="review-text">
                    Jadwal Posyandu merupakan fitur yang menyediakan layanan pengingat yang bertujuan untuk memudahkan pasien mengingat dan mengetahui jadwal posyandu yang telah dibuat
                  </p>

                  <div class="links">
                    <br>
                    <a href="jadwal.html" class="fitur">Lihat Jadwal</a>
                  </div>

                </div>



                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>

                </div>
              </div>

              <div class="review-nav swiper-button-prev">
                <i class="fas fa-long-arrow-alt-left"></i>
              </div>
              <div class="review-nav swiper-button-next">
                <i class="fas fa-long-arrow-alt-right"></i>
              </div>
            </div>
          </div>

          <div class="column-2 image">
            <img src="./img/onlinecalendar.svg" alt="" class="img-element" />
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials section" id="halodoc">
      <div class="container">
        <div class="section-header">
          <h3 class="title">HaloDoc</h3>
        </div>

        <div class="testi-content grid-2">
          <div class="column-1 reviews">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>

                  <p class="review-text">
                    HaloDoc merupakan sebuah fitur yang berguna untuk mempermudah pasien berkonsultasi dengan dokter yang ahli di bidangnya sehingga pasien memperoleh pelayanan konsultasi yang maksimal
                  </p>
                  <div class="links">
                    <br>
                    <a href="halodoc.html" class="fitur">Hubungi Sekarang</a>
                  </div>

                </div>



                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>

                </div>
              </div>

              <div class="review-nav swiper-button-prev">
                <i class="fas fa-long-arrow-alt-left"></i>
              </div>
              <div class="review-nav swiper-button-next">
                <i class="fas fa-long-arrow-alt-right"></i>
              </div>
            </div>
          </div>

          <div class="column-2 image">
            <img src="./img/chatting.svg" alt="" class="img-element" />
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials section" id="tabelideal">
      <div class="container">
        <div class="section-header">
          <h3 class="title">Tabel Ideal</h3>
        </div>

        <div class="testi-content grid-2">
          <div class="column-1 reviews">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>

                  <p class="review-text">
                    Tabel Ideal merupakan sebuah fitur yang memudahkan kita untuk memeriksa gizi pada anak dengan menganalisis tinggi badan dan berat badan anak serta menampilkan indikator tingkat kesehatan pada anak
                  </p>

                  <div class="links">
                    <br>
                    <a href="tabel_ideal.html" class="fitur">Cek Gizi Sekarang</a>
                  </div>

                </div>



                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>

                </div>
              </div>

              <div class="review-nav swiper-button-prev">
                <i class="fas fa-long-arrow-alt-left"></i>
              </div>
              <div class="review-nav swiper-button-next">
                <i class="fas fa-long-arrow-alt-right"></i>
              </div>
            </div>
          </div>

          <div class="column-2 image">
            <img src="./img/progress.svg" alt="" class="img-element" />
          </div>
        </div>
      </div>
    </section>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/appUtama.js"></script>
</body>

</html>