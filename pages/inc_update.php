<?php
    require "./inc_connect.php";
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $get = mysqli_query($conn, "SELECT * FROM data_eskrim WHERE id = '$id'");
    $eskrim = [];

    while ($row = mysqli_fetch_assoc($get)) {
        $eskrim[] = $row;
    }
    $eskrim = $eskrim[0];

    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama_product'];
        $harga = $_POST['harga_product'];
        $varian = $_POST['varian_product'];
        $stok = $_POST['stok_product'];
        $desc = $_POST['desc_product'];

        $result = mysqli_query($conn, "UPDATE data_eskrim SET nama='$nama', harga='$harga', varian='$varian', 
        stok='$stok', deskripsi= '$desc' WHERE id = $id");

        if ($result) {
            echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'crud.php';
            </script>";
        } else {
            echo "Error: " . $result . "<br>" . mysqli_error($conn);
        }
    }
