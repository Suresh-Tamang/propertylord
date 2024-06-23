<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['userid'])){
    header('location:login.php');
}
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
        }
        else{
            // echo('<script>alert("Properties Found that you searched for scroll down!");</script>');
            // header('location:user.php');
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
            <li><a href="#renting">Renting</a></li>
            <li><a href="#selling">Selling</a></li>
            <li><a href="#contactus">contactus</a></li>
            <li><a href="#knowmore">AboutUs</a></li>
        </ul>
        <div class="h-btn">
            <a href="userprofile.php?uid='<?php echo $_SESSION['userid']; ?>" class="h-btn1 login">Profile</a>
            <a href="addproperty.php" class="h-btn2">AddProperty</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- home section -->
    <section class="home">
        <div class="home-img">
            <img src="img/hero.png" alt="">
        </div>
        <div class="home-text">
            <h1>Your House is Waiting For You!</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus unde amet earum quasi non, cumque
                animi minus nihil atque quod.</p>
            <div class="h-search">
                <form action="search.php" method="post">
                    <input type="search" name="searchproperty" id="" placeholder="Search Properties..." class="search-input">
                    <input type="submit" value="Search" name="usersearch">
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


    <!--properties section-->
    <?php
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
                    <a href="userpropertydetail.php?propertyid=<?php echo $pdata['id'];?>">Show more</a>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="center-btn">
            <!-- <a href="" class="btn">View All Properties</a> -->
        </div>
    </section>
    
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
                    <a href="userpropertydetail.php?propertyid=<?php echo $rdata['id'];?>">Show more</a>
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
                    <a href="userpropertydetail.php?propertyid=<?php echo $sdata['id'];?>">Show more</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>

    <!-- about section -->
    <section class="about" id="contactus">
        <div class="about-img">
            <img src="img/Group 1.png" alt="">
        </div>
        <div class="about-text">
            <h2>We Help People To Find Homes</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi reiciendis iste sint delectus eius dicta rem, nemo commodi deleniti eum dignissimos illo, consequuntur facere magnam esse. Quo, deserunt ipsum, corrupti consequuntur alias voluptates aliquid placeat animi porro neque vel nihil eum laboriosam. Aut inventore, vel eos dignissimos suscipit quam impedit.</p>
            <a href="" class="btn">Get In Touch</a>
        </div>
    </section>

    <!-- Subscribe -->
    <section class="subscribe" id="knowmore">
        <div class="subscribe-content">
            <h2>Let's Simply Being With PropertyLord</h2>
            <p>Lorem ipsum dolor sait amet consectetur, adipisicing elit. Numquam at autem aperiam laborum ratione maxime quaerat consequuntur.
             Enim odio deleniti commodi est. Reiciendis nulla vitae laudantium voluptas, culpa doloribus dicta.</p>
            <a href="" class="btn">Get Started</a>
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