<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['userid'])){
    header('location:login.php');
}

$userid = $_SESSION['userid'];
//sql for userinformation
$userinfo = "select * from users where id = '$userid'";
$userinforesult = $conn->query($userinfo);
$userdata = $userinforesult->fetch_assoc();

//sql for rent properties
$rent = "select * from properties inner join uploads on properties.id = uploads.propertyid where purpose='rent'";
$rentResult = $conn -> query($rent);


// sql for selling properties
$sell = "select * from properties inner join uploads on properties.id = uploads.propertyid where purpose='sell'";
$sellResult = $conn -> query($sell);
if(isset($_GET['searchkey'])){
        $keyword = $_GET['searchkey'];
        $property = "select * from properties inner join uploads on properties.id = uploads.propertyid where title or description like '%$keyword%' ";
        $propertydata = $conn->query($property);
        if($propertydata->num_rows == 0){
            echo('<script>alert("No Properties Found that you searched for!");</script>');
            header('location:user.php');
        }
        else{
            echo('<script>alert("Properties Found that you searched for scroll down!");</script>');

        }
}else{
$property = "select * from properties inner join uploads on properties.id = uploads.propertyid";
$propertydata = $conn->query($property);
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
            <h2>Let's Simply Being With PropertyLord</h2>
            <p>Lorem ipsum dolor sait amet consectetur, adipisicing elit. Numquam at autem aperiam laborum ratione maxime quaerat consequuntur.
             Enim odio deleniti commodi est. Reiciendis nulla vitae laudantium voluptas, culpa doloribus dicta.</p>
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