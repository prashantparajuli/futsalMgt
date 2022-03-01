<?php
    session_start();
    if (isset($_SESSION['login'])){
        echo "Welcome ".$_SESSION['username'];
    }
    else{
        header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
</head>
<body>
    <h1>Welcome admin</h1>
    <a href="../actions/logout.php">Log Out</a>
</body>
</html>