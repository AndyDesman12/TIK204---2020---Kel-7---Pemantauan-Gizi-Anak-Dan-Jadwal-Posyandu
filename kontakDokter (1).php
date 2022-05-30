<?php
$email = $_GET['email'];

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>HaloDoc</title>
    <script src="https://kit.fontawesome.com/475c1fe3a3.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="img/Peduli Anak.png" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/styleDokter.css">

</head>

<body>

    <main>


        <!-- --------------------- Blog Carousel ----------------- -->

        <section>


            <div class="blog">
                <div class="container">

                    <div class="containerr">

                        <div class="links">
                            <ul>
                                <li>
                                    <a href="chatBox.php? email=<?= $email ?>" class="active">Kembali</a>
                                </li>
                            </ul>
                        </div>

                        <div class="hamburger-menu">
                            <div class="bar"></div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./img/dokter1.jpeg" alt="post-1">
                            <div class="blog-title">
                                <h2>Dr. Jony Hartono, Sp.A</h2>
                                <h3><i class="fa-solid fa-book-medical"></i> Spesialis Gizi</h3>
                                

                                    <h4><i class="fa-brands fa-whatsapp-square"></i> 0823-1536-1551</h4>

                                

                                <span></span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./img/dokter5.jpg" alt="post-1">
                            <div class="blog-title">
                                <h2>Dr. Hj Angraini, Sp. A</h2>
                                <h3><i class="fa-solid fa-book-medical"></i> Konsultan KB</h3>
                                

                                    <h4><i class="fa-brands fa-whatsapp-square"></i> 0823-2462-2365</h4>

                                

                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./img/dokter3.jpg" alt="post-1">
                            <div class="blog-title">
                                <h2>Dr. Fatimah Sp.A</h2>
                                <h3><i class="fa-solid fa-book-medical"></i> Konsultan Imunisasi</h3>
                                

                                    <h4><i class="fa-brands fa-whatsapp-square"></i> 0852-4623-6342</h4>

                                

                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="150">
                            <img src="./img/dokter4.jpg" alt="post-1">
                            <div class="blog-title">
                                <h2>Dr. Ariyanto Sp.A</h2>
                                <h3><i class="fa-solid fa-book-medical"></i> Dokter Umum </h3>
                                

                                    <h4><i class="fa-brands fa-whatsapp-square"></i> 0852-4624-2461</h4>

                                
                                <span></span>
                            </div>
                        </div>
                    </div>

                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </section>


    </main>




    <!-- -------------x------------- Footer --------------------x------------------- -->

    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>
</body>

</html>