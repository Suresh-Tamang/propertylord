<?php 
require 'connection.php';
if(!isset($_GET['propertyid'])){
    header('location:index.php');
}
if(isset($_GET['propertyid'])){
    $propertyid = $_GET['propertyid'];
    $property = "select * from properties inner join uploads on properties.id = uploads.propertyid where id='$propertyid'";
    $propertydata = $conn->query($property);
    $pdata = $propertydata->fetch_assoc();
}
$properties = "select * from properties inner join uploads on properties.id = uploads.propertyid";
$propertydatas = $conn->query($properties);

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
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#renting">Renting</a></li>
            <li><a href="index.php#selling">Selling</a></li>
            <li><a href="index.php#aboutus">AboutUs</a></li>
            <li><a href="index.php#knowmore">contactus</a></li>

        </ul>
        <div class="h-btn">
            <a href="login.php" class="h-btn1 login">Login</a>
            <a href="registration.php" class="h-btn2">SignUp</a>
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
                        <h1 style="font-size: 40px;"><?php  echo $pdata['title'];?></h1>
                    </div>
                    <div class="info">
                        <h4><?php  echo $pdata['description'];?></h4>
                    </div>
                    <div class="info">
                        <h1>Location:</h1><br>
                        <h4><?php  echo $pdata['location'];?></h4>
                    </div>
                    <div class="info">
                        Total Area: <br>
                        <h4><?php  echo $pdata['area'];?> Square meter</h4>
                    </div>
                    <div class="info">
                        Rs: <br>
                        <h4> <?php  echo $pdata['price'];?></h4>
                    </div>
                </div>
            </div>
            <div class="contactowner">
                <h1>Create account for contact owner</h1><br>
                <button class="h-btn1"><a href="login.php">SignUp</a></button>
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
                <p>
                    Rs: <?php echo $data['price'];?>
                </p>
                <div class="list">
                    <!-- <a href="" class="Residence-list">
                        <i class="bx bx-bed"></i>
                        4 Bed
                    </a>
                    <a href="" class="Residence-list">
                        <i class="bx bx-bath"></i>
                        Bed
                    </a>
                    <a href="" class="Residence-list">
                        <i class="bx bx-square"></i>
                        1290 sq.
                    </a> -->
                    <a href="detailindex.php?propertyid=<?php echo $data['id'];?>" style="color:blue;">Show more</a>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- <div class="center-btn">
            <a href="" class="btn">View All Properties</a>
        </div> -->
    </section>

    <!-- about section -->
    <!-- footer -->
    <section class="footer">
        <div class="footer-content">
            <img src="img/logo.png" alt="">
            <p>Propertylord Your Real Estate solution!
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