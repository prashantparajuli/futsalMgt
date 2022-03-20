<?php include_once('components/navbar.php'); ?>
<header class="navbar">
    <div>
        <h1>FMS</h1>
        <div>
            <div></div>
        </div>
    </div>

</header>
<div class="container">
    <div class="card">
        <div class="inner-box" id="card">
            <div class="card-front">
                <h4>LOGIN</h4>
                <form name = "adminlogin" action="actions/login.php" method = "post">
                    <p>User ID/contact no.</p>
                    <input type="text" class="input-box" placeholder=" ID" required>
                    <p>Password</p>
                    <input type="password" class="input-box" placeholder="Password" required>
                    <button type="submit" class="submit-btn">
                            Login
                        </button>
                    <input type="checkbox"><span>Remember me</span>
                </form>
                <button type="button" class="btn" onclick="openRegister()">I Am new here</button>
                <a href="">Forgot password?</a>
            </div>
            <div class="card-back">
                <h2>Register</h2>
                <form action="">
                    <p>Name:
                        <input type="text" class="input-box" placeholder="First Name" required>
                        <input type="text" class="input-box" placeholder="Last Name" required>
                    </p>

                    <p>Contact number:</p>
                    <input type="text" class="input-box" placeholder="+977" required>
                    <p>Email</p>
                    <input type="email" class="input-box" placeholder="=Your Email" required>
                    <input type="password" class="input-box" placeholder="Password" required>
                    <input type="password" class="input-box" placeholder="Conform password" required>
                    <button type="submit" class="submit-btn"> 
                            Submit
                        </button>

                </form>
                <button type="button" class="btn" onclick="openLogin()">I have an account</button>


            </div>
        </div>

    </div>
</div>
<script>
    var card = document.getElementById("card");

    function openRegister() {
        card.style.transform = "rotatey(-180deg)";
    }

    function openLogin() {
        card.style.transform = "rotatey(0deg)";
    }
</script>

<?php include_once('components/footer.php'); ?>