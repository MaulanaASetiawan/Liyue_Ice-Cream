<?php
require "./inc_connect.php";

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $varian = $_POST['varian'];
    $stok = $_POST['stok'];
    $desc = $_POST['desc'];

    $sql = "UPDATE data_eskrim SET nama_product = '$nama', harga_product = '$harga', varian_product = '$varian', stok_product = '$stok', desc_product = '$desc' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "<script>
        //     alert('Data berhasil Diubah!');
        //     window.location.href = 'dashboard.php';
        // </script>";
        header("location: crud.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Edit button not pressed.";
}
?>
