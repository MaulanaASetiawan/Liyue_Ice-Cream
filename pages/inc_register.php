<?php
    require "./inc_connect.php";
    $fullname = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $akses = "user";

    $query_sql = "INSERT INTO user VALUES ('','$fullname','$username' ,'$email', '$password', '$akses')";

    if(mysqli_query($conn, $query_sql)){
        header("location: login.php");
    }
    else {
        echo "Error: " . $query_sql . "<br>" . mysqli_error($connect);
    }
?>