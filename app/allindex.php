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
            <li><a href="#">Home</a></li>
            <li><a href="#aboutus">AboutUs</a></li>
            <li><a href="#">contactus</a></li>
            <li><a href="#">Renting</a></li>
            <li><a href="#">Selling</a></li>
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
            <img src="img/hero.png" alt="">
        </div>
        <div class="home-text">
            <h1>Your House is Waiting For You!</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus unde amet earum quasi non, cumque
                animi minus nihil atque quod.</p>
            <div class="h-search">
                <form action="">
                    <input type="search" name="" id="" placeholder="Search by Location...." class="search-input">
                    <input type="submit" value="Search">
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
    <section class="property">
        <div class="center-left">
            <h2>Search results</h2>
        </div>
        <div class="property-content">
            <div class="row">
                <img src="img/p3.png" alt="">
                <h5>Aliva Priva Jalvin</h5>
                <p>1090 pin oak Drive, clinton , Nepal</p>
                <div class="list">
                    <a href="" class="Residence-list">
                        <i class="bx bx-bed"></i>
                        4 BedSS
                    </a>
                    <a href="" class="Residence-list">
                        <i class="bx bx-bath"></i>
                        Bed
                    </a>
                    <a href="" class="Residence-list">
                        <i class="bx bx-square"></i>
                        1290 sq.
                    </a>
                </div>
            </div>
            <div class="row">
                <img src="img/p3.png" alt="">
                <h5>Aliva Priva Jalvin</h5>
                <p>1090 pin oak Drive, clinton , Nepal</p>
                <div class="list">
                    <a href="" class="Residence-list">
                        <i class="bx bx-bed"></i>
                        4 BedSS
                    </a>
                    <a href="" class="Residence-list">
                        <i class="bx bx-bath"></i>
                        Bed
                    </a>
                    <a href="" class="Residence-list">
                        <i class="bx bx-square"></i>
                        1290 sq.
                    </a>
                </div>
            </div>
            <div class="row">
                <img src="img/p3.png" alt="">
                <h5>Aliva Priva Jalvin</h5>
                <p>1090 pin oak Drive, clinton , Nepal</p>
                <div class="list">
                    <a href="" class="Residence-list">
                        <i class="bx bx-bed"></i>
                        4 BedSS
                    </a>
                    <a href="" class="Residence-list">
                        <i class="bx bx-bath"></i>
                        Bed
                    </a>
                    <a href="" class="Residence-list">
                        <i class="bx bx-square"></i>
                        1290 sq.
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--properties section-->
    <section class="property">
        <div class="center-left">
            <h2>Popular Residents</h2>
        </div>
        <div class="property-content">

            <?php for ($i = 0; $i < 10; $i++) {?>
            <div class="row">
                <img src="img/p3.png" alt="">
                <h5>Aliva Priva Jalvin</h5>
                <p>1090 pin oak Drive, clinton , Nepal</p>
                <div class="list">
                    <a href="" class="Residence-list">
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
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="center-btn">
            <a href="" class="btn">View All Properties</a>
        </div>
    </section>

    <!-- about section -->
    <section class="about" id="aboutus">
        <div class="about-img">
            <img src="img/Group 1.png" alt="">
        </div>
        <div class="about-text">
            <h2>We Help People To Find Homes</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi reiciendis iste sint delectus eius dicta
                rem, nemo commodi deleniti eum dignissimos illo, consequuntur facere magnam esse. Quo, deserunt ipsum,
                corrupti consequuntur alias voluptates aliquid placeat animi porro neque vel nihil eum laboriosam. Aut
                inventore, vel eos dignissimos suscipit quam impedit.</p>
            <a href="" class="btn">Get In Touch</a>
        </div>
    </section>

    <!-- Subscribe -->
    <section class="subscribe">
        <div class="subscribe-content">
            <h2>Let's Simply Being With PropertyLord</h2>
            <p>Lorem ipsum dolor sait amet consectetur, adipisicing elit. Numquam at autem aperiam laborum ratione
                maxime quaerat consequuntur.
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