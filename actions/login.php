<?php
    include('connection.php');
    $name = $_POST['username'];
    $password = $_POST['password'];

    if($name == "prashant" && $password == "wtf123"){
        session_start();
        $_SESSION ['login'] = true;
        $_SESSION ['username'] = $name;
        header('location: ../admin/index.php');
    }
    else{
        echo "invalid username or password";
    }
    mysqli_close($conn);
?>