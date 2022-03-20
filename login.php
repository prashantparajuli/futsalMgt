<?php include_once('components/navbar.php'); ?>
    <form name = "adminlogin" action="actions/login.php" method = "POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="submit" name = "login">
    </form>

<?php include_once('components/footer.php'); ?>