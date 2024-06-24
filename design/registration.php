<?php
require 'connection.php'; 
if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $emailcheck = "select * from users where email='$email'";
    $result = $conn->query($emailcheck);
    if($result->num_rows > 0){
        echo('<script>alert("User with that email address already exists. Please use different email address.");</script>');
    }
    else{
    if($password !== $cpassword){
        echo('<script>alert("Password is not matched");</script>');
    }
    else{
        $sql = "insert into users values (null, '$fname','$lname','$email','$contact','$password')";
        if($conn -> query($sql)){
            echo('<script>alert("Registration Successful")</script>');
        }
        else{
            die('Error: '.$conn->error);
        }
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propertylord</title>
    <link rel="stylesheet" href="registration.css">
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

    <!-- registration section -->
    <section>
    <div class="login">
        <!-- <span class="close-btn"><a href="">x</a></span> -->
        <div class="title">
            <h1>Registration Form</h1>
        </div>
        <div class="container">
            
            <form action="" method="post">
                <div class="login-forms">
                    <div class="input">
                        <label for="">First Name</label>
                        <input type="text" name="fname"  placeholder="Enter First Name" required>
                    </div>
                    <div class="input">
                        <label for="">Last Name</label>
                        <input type="text" name="lname"  placeholder="Enter Last Name" required>
                    </div>
                    <div class="input">
                        <label for="">Email Address</label>
                        <input type="email" name="email"   placeholder="Enter Email " required>
                    </div>
                    <div class="input">
                        <label for="">Contact</label>
                        <input type="number" name="contact" min="9700000000" max="9999999999"  placeholder="Phone Number" required>
                    </div>
                    <div class="input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter Password" required>
                    </div>
                    <div class="input">
                        <label for="">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password"required>
                    </div>
                    <div class="input">
                        <input type="submit" name="register"  value="Register" class="login-btn">
                    </div>
                    <div class="input">
                        <p>Have account ? <span class="register-btn"><a href="login.php">Login</a></span></p>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, et.
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