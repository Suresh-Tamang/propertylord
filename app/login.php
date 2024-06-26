<?php
require 'connection.php';
session_start();
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    //sql for selecting the user//
    $sql = "select * from users where email = '$email' and password = '$password'";
    $data = $conn -> query($sql);
    if($data->num_rows>0){
        $user = $data->fetch_assoc();
        $_SESSION['userid']=$user['uid'];
        header('location:user.php');
    }
    else{
        echo('<script>alert("Wrong Credientials");</script>');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propertylord</title>
    <link rel="stylesheet" href="login.css">
    <!-- boxi icon links -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header class="sticky">
        <a href="#">
            <img src="img/logo.png" alt="">
        </a>
        <ul class="navbar open">
        <li><a href="index.php">Home</a></li>
            <li><a href="index.php#renting">Renting</a></li>
            <li><a href="index.php#selling">Selling</a></li>
            <li><a href="index.php#aboutus">ContactUs</a></li>
            <li><a href="index.php#knowmore">AboutUs</a></li>
        </ul>
        <div class="h-btn">
            <!-- <a href="#" class="h-btn1 login">Login</a> -->
            <!-- <a href="#" class="h-btn2">SignUp</a> -->
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>

    </header>

    <!-- login form -->
    <section class="form-section">
        <div class="login">
            <span class="close-btn"><a href="index.php">x</a></span>
            <div class="container">
                <div class="login-img">
                    <h3>Welcome to PropertyLord</h3>
                    <p>
                        Your property is waiting for you.
                    </p>
                </div>
                <form action="" method="post">
                    <div class="login-forms">
                        <div class="title">
                            <h1>LOGIN</h1>
                        </div>
                        <div class="input">
                            <label for="">Email Address</label>
                            <input type="text" name="email" placeholder="Enter Your Email address">
                        </div>
                        <div class="input">
                            <label for="">Password</label>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="input">
                            <!-- <a href="">Forgot password? </a> -->
                        </div>
                        <div class="input">
                            <input type="submit" name="login"  value="LOGIN" class="login-btn">
                        </div>

                        <div class="input">
                            <p>Don't have account ? <span class="register-btn"><a
                                        href="registration.php">register</a></span></p>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>
    <!-- footer -->
    <section class="footer">
        <div class="footer-content">
            <img src="img/logo.png" alt="">
            <p>Your Real Estate Solution!
            </p>
            <div class="icons">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
        </div>
        <div class="footer-content links">
            <h4>Services</h4>
            <li><a href="#">Houses</a></li>
            <li><a href="#">Apartments</a></li>
            <li><a href="#">Flats</a></li>
            <li><a href="#">Renting</a></li>
        </div>
        <div class="footer-content links">
            <h4>About us</h4>
            <li><a href="#">Houses</a></li>
            <li><a href="#">Apartments</a></li>
            <li><a href="#">Flats</a></li>
            <li><a href="#">Renting</a></li>
        </div>

        <div class="footer-content links">
            <h4>Popular Projects</h4>
            <li><a href="#">Houses</a></li>
            <li><a href="#">Apartments</a></li>
            <li><a href="#">Flats</a></li>
            <li><a href="#">Renting</a></li>
        </div>
    </section>
    <section class="cp">
        <div class="copyright">
            <i class='bx bx-copyright'>PropertyLord All Right Reserved</i>
        </div>
    </section>s

    <!-- js file -->
    <script src="script.js"></script>
</body>

</html>