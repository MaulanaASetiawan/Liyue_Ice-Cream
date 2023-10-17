<?php
    require "./inc_connect.php";
    $fullname = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $akses = "user";

    $query_check_username = "SELECT * FROM user WHERE username = '$username'";
    $result_check_username = mysqli_query($conn, $query_check_username);

    if (mysqli_num_rows($result_check_username) > 0) {
        echo "Username sudah digunakan. Silakan pilih username lain.";
    } else {
        $query_sql = "INSERT INTO user VALUES ('', '$fullname', '$username', '$email', '$password', '$akses')";

        if (mysqli_query($conn, $query_sql)) {
            header("location: ./inc_login.php");
        } else {
            echo "Error: " . $query_sql . "<br>" . mysqli_error($connect);
        }
    }
?>
