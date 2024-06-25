
<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['userid'])){
    header('location:login.php');
}
$userid = $_GET['user'];
$propertyid = $_GET['property'];
$ownerid = $_GET['ownerid'];
$ptitle = $_GET['title'];
if(isset($_POST['messgesend'])){
    $message = $_POST['message'];
    $storeMessage="insert into messages values('$userid','$message','$propertyid','$ownerid','$ptitle')";
    $result = $conn->query($storeMessage);
    if($result){
        echo('<script>alert("Messent sent successfully");</script>');
    }
    else{
        echo('<script>alert("Messent sent unsuccessful");</script>');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propertylord</title>
    <link rel="stylesheet" href="addproperty.css">
    <!-- boxi icon links -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">    
</head>
<body>
    <header class="sticky">
        <a href="#">
            <img src="img/logo.png" alt="">
        </a>
        <ul class="navbar open">
            <li><a href="#">Home</a></li>
            <li><a href="user.php#aboutus">About Us</a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="#">Renting</a></li>
            <li><a href="#">Selling</a></li>
        </ul>
        <div class="h-btn">
            <!-- <a href="user.php" class="h-btn1 login">EditProfile</a> -->
            <a href="userprofile.php" class="h-btn2">Cancel</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- registration section -->
    <section>
    <div class="login">
        <!-- <span class="close-btn"><a href="">x</a></span> -->
        <div class="title">
            <h1>Write Your Message</h1>
        </div>
        <div class="container">
            <form action="" method="post">
                <div class="login-forms">
                    <div class="input">
                        <textarea name="message" rows="10" cols="60" placeholder="Enter message" style="padding:20px; font-size:30px;"></textarea>
                    </div>
                    <div class="input">
                        <input type="submit" name="messgesend" id="login" value="Send" class="login-btn">
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
<?php
?>