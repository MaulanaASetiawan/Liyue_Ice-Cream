<?php
    require "./inc_connect.php";
    $nama = $_POST['nama_product'];
    $harga = $_POST['harga_product'];
    $varian = $_POST['varian_product'];
    $stok = $_POST['stok_product'];
    $desc = $_POST['desc_product'];
    
    $gambar = $_FILES['gambar_product']['name'];
    $temp_file = $_FILES['gambar_product']['tmp_name'];
    move_uploaded_file($temp_file, "../assets/catalog/" . $gambar);    

    $query_sql = "INSERT INTO data_eskrim VALUES ('','$nama','$harga' ,'$varian', '$stok', '$desc', '$gambar')";
    if(mysqli_query($conn, $query_sql)){
        header("location: crud.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>