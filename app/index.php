<?php 
require 'connection.php';
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
            header('location:index.php');
            // echo('<script>alert("No Properties Found that you searched for!");</script>');
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
</script>
</head>

<body>
    <header class="sticky">
        <a href="#">
            <img src="img/logo.png" alt="">
        </a>
        <ul class="navbar open">
            <li><a href="index.php">Home</a></li>
            <li><a href="#renting">Renting</a></li>
            <li><a href="#selling">Selling</a></li>
            <li><a href="#aboutus">ContactUs</a></li>
            <li><a href="#knowmore">AboutUs</a></li>

        </ul>
        <div class="h-btn">
            <a href="login.php" class="h-btn1 login">Login</a>
            <a href="registration.php" class="h-btn2">SignUp</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>

    </header>

    <!-- home section -->
    <section class="home">
        <div class="home-img">
            <img src="img/hero1.png" alt="">
        </div>
        <div class="home-text">
            <h1>Your House is Waiting For You!</h1>
            <p></p>
            <div class="h-search">
                <form action="search.php" method="post">
                    <input type="search" name="searchproperty" id="searchproperty" placeholder="Search Properties..." class="search-input">
                    <input type="submit" value="Search" name="searchinput">
                </form>
            </div>
        </div>

    </section>


    <!-- feature section -->
    <section class="feature">
        <div class="center-left">
            <h2>Categories</h2>
        </div>
        <div class="feature-content">
            <div class="f-img">
                <img src="img/apartment.png" alt="">
            </div>
            <div class="f-img">
                <img src="img/land.png" alt="">
            </div>
            <div class="f-img">
                <img src="img/house.png" alt="">
            </div>
            <div class="f-img">
                <img src="img/office.png" alt="">
            </div>
            <div class="f-img">
                <img src="img/room.png" alt="">
            </div>
        </div>
    </section>

    <!-- search section -->
    <!--properties section-->
    <?php
     if($propertydata->num_rows>0){
        ?>
    <section class="property" id="property">
        <div class="center-left">
            <h2></h2>
        </div>
        <div class="property-content">
            <?php
             while($pdata=$propertydata->fetch_assoc()){
                ?>
            <div class="row">
                <img src="<?php echo $pdata['imagepath']; ?>" alt="">
                <h5 >
                    
                    <?php echo $pdata['title'];?>
                </h5>
                <p>
                Location: <?php echo $pdata['location'];?>
                </p>
                <p>
                   Category: <?php echo $pdata['category'];?>
                </p>
                <p>
                   Rs: <?php echo $pdata['price'];?>
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
                    <a href="detailindex.php?propertyid=<?php echo $pdata['id'];?>">Show more</a>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="center-btn">
            <a href="" class="btn">View All Properties</a>
        </div>
    </section>
    <?php } else { ?>
            <section class="property" id="property">
            <div class="center-left">
                <h2></h2>
            </div>
            <div class="property-content">
                <?php
                 while($pdata=$propertydata->fetch_assoc()){
                    ?>
                <div class="row">
                    <img src="<?php echo $pdata['imagepath']; ?>" alt="">
                    <h5 >
                        
                        <?php echo $pdata['title'];?>
                    </h5>
                    <p>
                    Location: <?php echo $pdata['location'];?>
                    </p>
                    <p>
                       Category: <?php echo $pdata['category'];?>
                    </p>
                    <p>
                       Rs: <?php echo $pdata['price'];?>
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
                        <a href="detailindex.php?propertyid=<?php echo $pdata['id'];?>">Show more</a>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="center-btn">
                <a href="" class="btn">View All Properties</a>
            </div>
        </section>
  <?php   } ?>
    <!--renting section-->
    <section class="property" id="renting">
        <div class="center-left">
            <h2>Property For Rent</h2>
        </div>
        <div class="property-content">
            <?php while($rdata=$rentResult->fetch_assoc()){
                ?>
            <div class="row">
                <img src="<?php echo $rdata['imagepath']; ?>" alt="">
                <h5 >
                    
                    <?php echo $rdata['title'];?>
                </h5>
                <p>
                Location: <?php echo $rdata['location'];?>
                </p>
                <p>
                   Category: <?php echo $rdata['category'];?>
                </p>
                <p>
                   Rs: <?php echo $rdata['price'];?>
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
                    <a href="detailindex.php?propertyid=<?php echo $rdata['id'];?>">Show more</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>

        <!--selling section-->
        <section class="property" id="selling">
        <div class="center-left">
            <h2>Properties for selling</h2>
        </div>
        <div class="property-content">
            <?php while($sdata=$sellResult->fetch_assoc()){
                ?>
            <div class="row">
                <img src="<?php echo $sdata['imagepath']; ?>" alt="">
                <h5 >
                    
                    <?php echo $sdata['title'];?>
                </h5>
                <p>
                Location: <?php echo $sdata['location'];?>
                </p>
                <p>
                   Category: <?php echo $sdata['category'];?>
                </p>
                <p>
                   Rs: <?php echo $sdata['price'];?>
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
                    <a href="detailindex.php?propertyid=<?php echo $sdata['id'];?>"style="color:blue;">Show more</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>

    <!-- about section -->
    <section class="about" id="aboutus">
        <div class="about-img">
            <img src="img/Group 1.png" alt="">
        </div>
        <div class="about-text">
            <h2>We Help People To Find Homes</h2>
            <p>Find Your Home now!</p>
            <a href="registration.php" class="btn">Get In Touch</a>
        </div>
    </section>
    <!-- Subscribe -->
    <section class="subscribe" id="knowmore">
        <div class="subscribe-content">
            <h2>Being With PropertyLord</h2>
            <p>This system “PROPERTYLORD” will provide facility to the user to search Residential and Commercial property and view property. This system will provide facility to view the property by admin and user. </p>
            <a href="indexknowmore.php" class="btn">Know More</a>
        </div>
    </section>
    <!-- footer -->
    <section class="footer">
        <div class="footer-content">
            <img src="img/logo.png" alt="">
            <p>Propertylord Your Real Estate solution!
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
            <i class='bx bx-copyright' style="color: black;"> 2024 </i><br>
            <i style="color:black;">PropertyLord All Right Reserved</i>
        </div>
    </section>
    <!-- login form -->
    <!-- js file -->
    <script src="script.js"></script>
</body>

</html>