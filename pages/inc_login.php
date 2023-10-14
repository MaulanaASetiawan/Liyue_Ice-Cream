<?php
    session_start();
    require "./inc_connect.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query_sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query_sql);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['email'] = $email;
        header("location: ../index.php");
    }
    else {
        echo "Error: " . $query_sql . "<br>" . mysqli_error($conn);
    }
?>