<?php
$email = $_GET['email'];

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>HaloDoc</title>
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
                            <a href= "home.php? email=<?= $email ?>" class="active">Kembali</a>
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
                                <h3>Dr. Jony Hartono, Sp.A</h3>
                                <a href= "chatBox.php? email=<?= $email ?>">
                                <button class="btn btn-blog">Chat</button>
                                </a>
                                <span></span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./img/dokter5.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Dr. Hj Rita Angraini, Sp. A </h3>
                                <a href= "chatBox.php? email=<?= $email ?>">
                                <button class="btn btn-blog">Chat</button>
                                </a>
                                
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./img/dokter3.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Dr. Fatimah D A Sp.A</h3>
                                <a href= "chatBox.php? email=<?= $email ?>">
                                <button class="btn btn-blog">Chat</button>
                                </a>
                                
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="150">
                            <img src="./img/dokter4.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Dr. Ariyanto, Sp.A</h3>
                                <a href= "chatBox.php? email=<?= $email ?>">
                                <button class="btn btn-blog">Chat</button>
                                </a>
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