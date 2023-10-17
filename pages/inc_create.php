<?php
    require "./inc_connect.php";
    $nama = $_POST['nama_product'];
    $harga = $_POST['harga_product'];
    $varian = $_POST['varian_product'];
    $stok = $_POST['stok_product'];
    $desc = $_POST['desc_product'];

    $query_sql = "INSERT INTO data_eskrim VALUES ('','$nama','$harga' ,'$varian', '$stok', '$desc')";
    if(mysqli_query($conn, $query_sql)){
        header("location: crud.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>