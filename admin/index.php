<?php
    session_start();
    if (isset($_SESSION['login'])){
        $uname = $_SESSION['username'];
    }
    else{
        header('location: ../index.php');
    }
?>
<?php include ('header.php');?>
    <h1>Welcome admin</h1>
    <a href="../actions/logout.php">Log Out</a>
<?php include ('footer.php');?>