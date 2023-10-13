<?php 
    $serverName     = "localhost";
    $userName       = "root";
    $userPassword   = "";
    $dbName         = "eskrim";

    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>