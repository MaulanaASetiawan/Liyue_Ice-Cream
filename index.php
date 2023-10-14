<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liyue Ice Cream</title>
    <link rel="icon" href="./assets/paimonicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <a class="nav-link active " href="#">Contact</a>
<<<<<<< HEAD
                        <li class="nav-item"></li>
                        <?php
                        if(isset($_SESSION['username'])){
                            echo "<div><h4>$navText</h4></div>";
                            echo "<a class='nav-link' href='./pages/inc_logout.php'><button type='button' class='btn btn-outline-light'>Logout</button></a>";
                        }
                        else {
                            echo "<a class='nav-link' href='./pages/login.php'><button type='button' class='btn btn-outline-light'>$navText</button></a>"; 
                        }
                        ?>
=======
                        <li class="nav-item">
                        </li>
>>>>>>> c9f12d8fa053e54d9d218150473d0a7a82144482
                        <div>
                            <input type="checkbox" class="checkbox" id="checkbox">
                            <label for="checkbox" class="checkbox-label">
                                <i class="fas fa-moon"></i>
                                <i class="fas fa-sun"></i>
                                <span class="ball"></span>
                            </label>
                        </div>
<<<<<<< HEAD
=======
                        <a class="nav-link " href="#"><button type="button" class="btn btn-outline-light">Login</button></a>
>>>>>>> c9f12d8fa053e54d9d218150473d0a7a82144482
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
                    <h1>Paimon</h1>
                    <p>
                        Paimon merupakan pemandu pemain Genshin Impact dari awal permainan hingga menjadi kawan seperjalanan dan senantiasa menemani Traveler berpetualang di dunia Teyvat.
                    </p>
                </div>
                <img src="./assets/eskrim.png" alt="paimon" style="max-width: 40vw; height: auto; ">
            </div>
        </section>
    <!-- end landing page -->

    <!-- catalog -->
    <section class="p-4" id="katalog">
        <div class="katalog container-fluid p-4">
            <div class="container">
                <h1 class="p-5" style="text-align: center; font-weight:800;">Catalog</h1>
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
    </section>
        
        
        <!-- end catalog -->


    <!-- about us -->
        <section class="p-0" id="section-about-us">
            <div class="container-fluid bekgron pt-4 pb-5" id="bekgron">
                <h1 class="text-center mt-5 p-5 text-light" style="font-weight: 800;">ABOUT US</h1>
                <div class="container">
                    <div class="container-fluid row p-2 justify-content-between">
                        <div class="col-md-7 text-about" style="border-radius: 10px 0 0 10px;" >
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta nisi corporis dignissimos inventore maxime nihil fugiat unde eos asperiores! Quidem, fugit porro obcaecati recusandae commodi magni nihil optio dolores sint?
                        </div>
                        <div class="col-md-5 img-about p-0 d-flex justify-content-center">
                            <img src="https://akcdn.detik.net.id/visual/2022/06/16/ilustrasi-es-krim-stroberi-1_169.jpeg?w=650" style="border-radius: 0 10px 10px 0;" alt="">
                        </div>
                    </div>
                    <div class="container-fluid row p-2 justify-content-between">
                        <div class="col-md-5 img-about p-0 d-flex justify-content-center">
                            <img src="https://mesineskrim.co/wp-content/uploads/2022/01/5ee243469e9be-1.jpg?" style="border-radius: 10px 0 0 10px;" alt="">
                        </div>
                        <div class="col-md-7 text-about" style="border-radius: 0 10px 10px 0;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta nisi corporis dignissimos inventore maxime nihil fugiat unde eos asperiores! Quidem, fugit porro obcaecati recusandae commodi magni nihil optio dolores sint?
                        </div>
                    </div>
                    <div class="container-fluid row p-2 justify-content-between">
                        <div class="col-md-7 text-about" style="border-radius: 10px 0 0 10px;" >
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta nisi corporis dignissimos inventore maxime nihil fugiat unde eos asperiores! Quidem, fugit porro obcaecati recusandae commodi magni nihil optio dolores sint?
                        </div>
                        <div class="col-md-5 img-about p-0 d-flex justify-content-center">
                            <img src="./assets/es.jpeg.jpg" style="border-radius: 0 10px 10px 0;" alt="">
                        </div>
                    </div>
                    <div class="container-fluid row p-2 justify-content-between">
                        <div class="col-md-5 img-about p-0 d-flex justify-content-center">
                            <img src="https://redaksi.inibaru.id/nuploads/6/Otit/es%20krim%20%281%29.jpg" style="border-radius: 10px 0 0 10px;" alt="">
                        </div>
                        <div class="col-md-7 text-about" style="border-radius: 0 10px 10px 0;" >
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta nisi corporis dignissimos inventore maxime nihil fugiat unde eos asperiores! Quidem, fugit porro obcaecati recusandae commodi magni nihil optio dolores sint?
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- end about us -->


    </main>

    <footer>
        <p>Copyright © Liyue Ice Cream. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./script/main.js"></script>
</body>

</html>