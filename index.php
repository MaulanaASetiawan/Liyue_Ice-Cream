<?php
session_start();
$navText = "Login";

if (isset($_SESSION['username'])) {
    $navText = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liyue Ice Cream</title>
    <link rel="icon" href="./assets/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/1a7210c043.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="./assets/Liyue2.png" width="150px" height="auto"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#katalog">Catalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#section-about-us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active " href="#kontak">Contact</a>
                        <li class="nav-item"></li>
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo "<h3>$navText</h3>";
                            echo "<a class='nav-link' href='./pages/inc_logout.php'><button type='button' class='btn btn-outline-light'>Logout</button></a>";
                        } else {
                            echo "<a class='nav-link' href='./pages/login.php'><button type='button' class='btn btn-outline-light'>$navText</button></a>";
                        }
                        ?>
                        <div>
                            <input type="checkbox" class="checkbox" id="checkbox">
                            <label for="checkbox" class="checkbox-label">
                                <i class="fas fa-moon"></i>
                                <i class="fas fa-sun"></i>
                                <span class="ball"></span>
                            </label>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- landing page -->
    <main>
        <section>
            <div class="isi-1 bg" id="isi-1">
                <div>
                    <h1>Selamat Datang di Surga Rasa Eskrim</h1>
                    <p>
                        Dari Es Krim Klasik yang Memikat Hati Hingga Inovasi Rasa Terkini yang Menggetarkan Lidah. Cicipi Sensasi yang Luar Biasa, Temukan Setiap Gigitan Penuh Kebahagiaan.
                    </p>
                    <a href="#katalog">
                    <button class="btn btn-outline-danger mt-3">Lihat Menu Selengkapnya...</button>
                    </a>
                </div>
                <img src="./assets/eskrim.png" alt="paimon" style="max-width: 40vw; height: auto; ">
            </div>
        </section>
        <!-- end landing page -->

        <!-- catalog -->
        <section class="pr-0 pl-0 pt-0 pb-5 mt-0" id="katalog">
            <!-- CAROSEL -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/eskrim2.png" class="d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <button type="button" class="btn btn-danger btn-lg">Dapatkan Sekarang !</button>
                            <h2>Dapatkan kode promo khusus pendaftaran pertama !</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/eskrim3.png" class="d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <button type="button" class="btn btn-danger btn-lg">Dapatkan Sekarang !</button>
                            <h2>Dapatkan kode promo khusus pendaftaran pertama !</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/eskrim4.png" class="d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <button type="button" class="btn btn-danger btn-lg">Dapatkan Sekarang !</button>
                            <h2>Dapatkan kode promo khusus pendaftaran pertama !</h2>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- END CAROSEL -->
            <div class="katalog container-fluid p-4">
                <div class="container">
                    <h1 class="p-5 pb-4" style="text-align: center; font-weight:800;">Catalog</h1>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <img src="assets/bg.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">Ini Katalog Produk !</p>
                                    <button type="button" class="btn btn-dark">Beli</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-light">
                                <img src="assets/bgdark.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">Ini Katalog Produk !</p>
                                    <button type="button" class="btn btn-dark">Beli</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-light">
                                <img src="assets/bg.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">Ini Katalog Produk !</p>
                                    <button type="button" class="btn btn-dark">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 justify-content-center">
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <img src="assets/bg.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">Ini Katalog Produk !</p>
                                    <button type="button" class="btn btn-dark">Beli</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-light">
                                <img src="assets/bgdark.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">Ini Katalog Produk !</p>
                                    <button type="button" class="btn btn-dark">Beli</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-light">
                                <img src="assets/bg.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">Ini Katalog Produk !</p>
                                    <button type="button" class="btn btn-dark">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box2">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
           
        </section>


        <!-- end catalog -->


        <!-- about us -->
        <section class="p-0" id="section-about-us">
            <div class="container-fluid bekgron pt-4 pb-5" id="bekgron">
                <h1 class="text-center mt-5 p-5 text-light" style="font-weight: 800;">ABOUT US</h1>
                <div class="container">
                    <div class="container-fluid row p-2 justify-content-between container-inverse">
                        <div class="col-md-7 col-sm-12  text-about " style="border-radius: 10px 0 0 10px;">
                        Eskrim Liyue adalah sebuah makanan penutup yang khas dari Liyue, sebuah wilayah di dalam dunia fantasi dalam permainan video Genshin Impact. Liyue 
                        adalah salah satu dari dua wilayah utama dalam permainan ini, dan memang terkenal dengan kekayaan budayanya yang unik. Eskrim Liyue adalah salah satu contoh penting dari kuliner Liyue yang memikat para pemain dan penggemar permainan.
                        </div>
                        <div class="col-md-5 col-sm-12 img-about p-0 d-flex justify-content-center">
                            <img src="https://akcdn.detik.net.id/visual/2022/06/16/ilustrasi-es-krim-stroberi-1_169.jpeg?w=650" style="border-radius: 0 10px 10px 0;" alt="">
                        </div>
                    </div>
                    <div class="container-fluid row p-2 justify-content-between">
                        <div class="col-md-5 col-sm-12 img-about p-0 d-flex justify-content-center">
                            <img src="https://mesineskrim.co/wp-content/uploads/2022/01/5ee243469e9be-1.jpg?" style="border-radius: 10px 0 0 10px;" alt="">
                        </div>
                        <div class="col-md-7 col-sm-12 text-about" style="border-radius: 0 10px 10px 0;">
                        Eskrim Liyue memiliki ciri khas tersendiri yang membuatnya istimewa. Rasa dasarnya adalah campuran manis dan gurih yang membuatnya sangat menggugah selera. Tekstur eskrim ini juga begitu lembut dan halus, memberikan pengalaman kuliner yang unik. Untuk menambah sentuhan eksotis, Eskrim Liyue sering disajikan dengan bahan-bahan alami 
                        seperti buah-buahan yang hanya dapat ditemukan di dalam dunia Liyue, memberikan sensasi luar biasa kepada para penikmatnya.
                        </div>
                    </div>
                    <div class="container-fluid row p-2 justify-content-between container-inverse">
                        <div class="col-md-7 col-sm-12 text-about" style="border-radius: 10px 0 0 10px;">
                        Eskrim Liyue juga memiliki tampilan yang cantik, dengan warna dan dekorasi yang mencerminkan budaya dan seni rupa Liyue yang kaya. Ini tidak hanya menciptakan sensasi makanan yang memanjakan lidah, tetapi juga 
                        sebuah pengalaman visual yang mengagumkan. Bagi para pemain Genshin Impact, menyantap Eskrim Liyue bukan hanya tentang mencicipi rasa, tetapi juga merasakan kedalaman budaya dalam permainan.
                        </div>
                        <div class="col-md-5 col-sm-12 img-about p-0 d-flex justify-content-center">
                            <img src="./assets/es.jpeg.jpg" style="border-radius: 0 10px 10px 0;" alt="">
                        </div>
                    </div>
                    <div class="container-fluid row p-2 justify-content-between">
                        <div class="col-md-5 col-sm-12 img-about p-0 d-flex justify-content-center">
                            <img src="https://redaksi.inibaru.id/nuploads/6/Otit/es%20krim%20%281%29.jpg" style="border-radius: 10px 0 0 10px;" alt="">
                        </div>
                        <div class="col-md-7 col-sm-12 text-about" style="border-radius: 0 10px 10px 0;">
                        Makanan penutup ini juga sering dihubungkan dengan karakter-karakter dan cerita dalam permainan, menjadikannya salah satu elemen yang sangat dicintai oleh para penggemar Genshin Impact. Dalam permainan, pemain sering diberikan 
                        tugas untuk mencari bahan-bahan khusus atau menyajikan Eskrim Liyue kepada karakter-karakter dalam cerita, menciptakan hubungan yang erat antara makanan ini dan pengalaman bermain. 
                       </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about us -->


    </main>
    <section id="kontak">
    <footer class="footer">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="mb-4">Kontak Kami</h5>
                    <p><i class="fas fa-map-marker-alt"></i> jL Perjuangan 6 ,The Kost, Indonesia</p>
                    <p><i class="fas fa-phone"></i> +123456789</p>
                    <p><i class="fas fa-envelope"></i> Liyue_ice_cream@gmail.com</p>
                </div>
                <div class="col-md-6">
                    <h5 class="icon mb-4">Ikuti Kami</h5>
                    <a href="#" class="text-light me-2"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-light me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light me-2"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            </div>
        <div class=" footer-end text-center p-3" style="background-color: var(--text2);">
            <p>Copyright © Liyue Ice Cream. All Rights Reserved.</p>
        </div>
    </footer>
   </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./script/main.js"></script>
</body>

</html>
<div class=""></div>