<?php
    session_start();
    if (isset($_SESSION['login'])){
        header("Location: ../admin/index.php");
    }
    else{
        header('location: ../index.php');
    }
?>