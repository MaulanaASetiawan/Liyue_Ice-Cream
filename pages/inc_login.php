<?php
    session_start();
    require "./inc_connect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query_sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query_sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $username = $row["username"];
        $_SESSION['username'] = $username;
        header("location: ../index.php");
    }
    else {
        echo "Error: " . $query_sql . "<br>" . mysqli_error($conn);
        echo "<script>
                alert('Username atau Password salah!');
                document.location.href='inc_register.php';
        </script>";
    }
?>