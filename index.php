<?php
    session_start();
    $navText = "Login";

    if(isset($_SESSION['username'])){
        $navText = $_SESSION['username'];
    }
?>

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
    <nav class="navbar navbar-expand-lg navbar-dark">
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
                        <a class="nav-link active" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Catalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="#">Contact</a>
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


    <footer>
        <p>Copyright © Liyue Ice Cream. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./script/main.js"></script>
</body>

</html>