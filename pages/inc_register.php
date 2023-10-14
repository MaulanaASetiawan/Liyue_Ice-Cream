<?php
    require "./inc_connect.php";
    $fullname = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query_sql = "INSERT INTO user VALUES ('','$fullname', '$email', '$password')";

    if(mysqli_query($conn, $query_sql)){
        header("location: login.php");
    }
    else {
        echo "Error: " . $query_sql . "<br>" . mysqli_error($connect);
    }
?>