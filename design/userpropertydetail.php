<?php 
require 'connection.php';
session_start();
if(!isset($_SESSION['userid'])){
    header('location:login.php');
}
if(!isset($_GET['propertyid'])){
    header('location:index.php');
}
if(isset($_GET['propertyid'])){
    $propertyid = $_GET['propertyid'];
    $property = "select * from properties inner join uploads on properties.id = uploads.propertyid  where id='$propertyid'";
    $propertydata = $conn->query($property);
    $pdata = $propertydata->fetch_assoc();
}
$properties = "select * from properties inner join uploads on properties.id = uploads.propertyid";
$propertydatas = $conn->query($properties);

if(isset($_GET['propertyid'])){
    $propertyid = $_GET['propertyid'];
    $ownerinfo="select * from properties inner join users on properties.userid = users.uid where id='$propertyid'";
    $ownerconn = $conn->query($ownerinfo);
    $ownerdata = $ownerconn -> fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propertylord</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="detailindex.css">
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
            <li><a href="user.php#contactus">contactus</a></li>
            <li><a href="user.php#knowmore">AboutUs</a></li>

        </ul>
        <div class="h-btn">
            <a href="userprofile.php?uid='<?php echo $_SESSION['userid']; ?>" class="h-btn1 login">Profile</a>
            <a href="addproperty.php" class="h-btn2">AddProperty</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- home section -->
    <div class="icons">
        <a href=""></a>
        </div>
    <div class="icons">
        <a href=""></a>
        </div>
    <!--properties section-->
    <section id="infosection">
        <div class="propertyinfo">
            <div class="detaildiv">
                <div class="columnss img">
                    <img src="<?php echo $pdata['imagepath']; ?>" alt="">
                </div>
                <div class="pinfo">
                    <div class="info">
                        <h1><?php  echo $pdata['title'];?></h1>
                    </div>
                    <div class="info">
                        <h2><?php  echo $pdata['description'];?></h2>
                    </div>
                    <div class="info">
                        <h1>Location:</h1>
                        <h4><?php  echo $pdata['location'];?></h4>
                    </div>
                    <div class="info">
                        <h1>Total Area: </h1>
                        <h4><?php  echo $pdata['area'];?> Square meter</h4>
                    </div>
                    <div class="info">
                        <h1> Owner Name:</h1> <h4> <?php echo $ownerdata['firstname']." ".$ownerdata['lastname'];?></h4>
                      
                    </div>
                    <div class="info">
                        Owner Contact:
                       <a href="tel:+977<?php echo $ownerdata['contact'];?>"><?php echo $ownerdata['contact'];?></a>
                    </div>
                    <div class="info">
                        Email : 
                        <a href="mailto:<?php  echo $ownerdata['email'];?>"><?php  echo $ownerdata['email'];?></a>
                    </div>
                </div>
            </div>
            <div class="contactowner">
                <h1>Enquiry message</h1><br>
                <button class="h-btn1"><a href="message.php?user=<?php echo $_SESSION['userid'];?>&property=<?php echo $pdata['id'];?>&ownerid=<?php echo $ownerdata['uid'];?>&title=<?php echo $pdata['title'];?>">Send Message!</a></button>
            </div>
        </div>
    </section>

    <section class="property">
        <div class="center-left">
            <h2>Popular Residents</h2>
        </div>
        <div class="property-content">
            <?php while($data=$propertydatas->fetch_assoc()){
                ?>
            <div class="row">
                <img src="<?php echo $data['imagepath']; ?>" alt="">
                <h5>
                    <?php echo $data['title'];?>
                </h5>
                <p>
                    <?php echo $data['location'];?>
                </p>
                <div class="list">
                    <a href="userpropertydetail.php?propertyid=<?php echo $data['id'];?>">Show more</a>
                </div>
            </div>
            <?php } ?>
        </div>

    </section>
    

    <!-- about section -->
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