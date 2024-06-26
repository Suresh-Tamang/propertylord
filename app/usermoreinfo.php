<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['userid'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propertylord</title>
    <link rel="stylesheet" href="index.css">
    <!-- boxi icon links -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">    
</head>

<body>
    <header class="sticky">
        <a href="#">
            <img src="img/logo.png" alt="">
        </a>
        <ul class="navbar open">
            <li><a href="user.php">Home</a></li>
            <li><a href="user.php#renting">Renting</a></li>
            <li><a href="user.php#selling">Selling</a></li>
            <li><a href="user.php#knowmore">AboutUs</a></li>
        </ul>
        <div class="h-btn">
            <a href="userprofile.php?uid='<?php echo $_SESSION['userid']; ?>" class="h-btn1 login">Profile</a>
            <a href="addproperty.php" class="h-btn2">AddProperty</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <!-- about section -->
    <!-- Subscribe -->
    <section class="subscribe" id="knowmore">
        <div class="subscribe-content">
            <h2>Your Real Estate solution in Your Hand.</h2>
            <p>This system “PROPERTYLORD” will provide facility to the user to search Residential and Commercial property and view property. This system will provide facility to view the property by admin and user. User will be able to upload the property information to the site and able to manage it. This system will provide facility to the user to fill up their requirement and according to their Requirement Admin can add the Requirement property. This system was developed using PHP as (Backend) and HTML, CSS, JS as (Frontend).
The real estate business deals with the development of the property and the lease, rent or sale of establishment. It is one of the fastest growing enterprises in Nepal. It has potentially never-ending growth. 
</p>
            <!-- <a href="" class="btn">More Info</a> -->
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
    </section>
    <!-- login form -->
    <!-- js file -->
    <script src="script.js"></script>
</body>

</html>