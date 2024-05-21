<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/public.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <div class="main-nav">
                <a href="userinterface.php"><img src="" alt="">PropertyLord</a>
                <div class="bar">
                    <ul>
                        <li><a href="">HOME</a></li>
                        <li><a href="">ABOUT</a></li>
                        <li><a href="">RENT</a></li>
                        <li><a href="">BUY</a></li>
                        <a href="login.php"><i class="fa-solid fa-right-to-bracket" id="login-icon"></i></a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- content start -->
    <!DOCTYPE html>
    <html lang="en">


    <div class="upperpart">
        <!-- search menu  -->
        <img src="assets/img/bg.jpg" class="img1">
        <div class="text-container">

            <div class="txt1">Explore top real estate in Nepal</div>
            <div class="txt2">Find houses,lands for sale or rent</div>
            <div class="search">
                <form>
                    <input type="text" placeholder="Search for House, Land, Room">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>


    <!-- house for sale menu -->
    <div class="mainbar-container">
        <div class="sub-bar">
            <div class="card">
                <a href="">
                    <span style="margin-left: 60px; ">House</span><br>
                    <span style="margin-left: 60px;">For Sale</span>
                </a>
            </div>
            <div class="card">
                <a href="">
                    <span style="margin-left: 60px;">Land</span><br>
                    <span style="margin-left: 60px;">For Sale</span>
                </a>
            </div>
            <div class="card">
                <a href="">
                    <span style="margin-left: 40px;">House, Room</span><br>
                    <span style="margin-left: 60px;">For Rent</span>
                </a>
            </div>

            <!-- for contact menu -->
            <div class="sub-bar2">
                <div class="card-2">
                    <center>
                        <i class="fa-solid fa-phone" style="display: block; margin-bottom: 5px;"></i>
                    </center>
                    <span style="cursor: pointer;">9808715126</span>
                </div>
                <div class="card-2">
                    <center>
                        <i class="fa-solid fa-envelope" style="display: block; margin-bottom: 5px;"></i>
                    </center>
                    <a href="mailto:ronixmalla21@gmail.com">Email Us</a>
                </div>
                <div class="card-2">
                    <center>
                        <i class="fa-solid fa-message" style="display: block; margin-bottom: 5px;"></i>
                    </center>
                    <a href="contact.php">Message Us</a>
                </div>
                <div class="card-2">
                    <center>
                        <i class="fa-brands fa-facebook" style="display: block; margin-bottom: 5px;"></i>
                    </center>
                    <a href="https://www.facebook.com/" target="_blank">Contact Via</a>
                </div>
            </div>

            <!-- info of website -->
            <div class="sub-bar3">
                <div class="card-3">
                    <div class="txt-head">
                        <p>Sell / Rent Your Property</p>
                    </div>
                    <div class="txt">
                        <p>Owners, Agencies and Agents can directly contact us an provide there desirable property to
                            sale on this
                            real estate platform to generate sales.</p>
                    </div>
                    <a href="saleform.php" class="learnmore">Learn More</a>
                </div>
                <div class="card-3">
                    <div class="txt-head">
                        <p>Buy Verified Properties</p>
                    </div>
                    <div class="txt">
                        <p>Search through our listing of real estate properties in Nepal and contact Owner, agency
                            directly to make
                            a
                            deal. With fast pace Replies.</p>
                    </div>
                    <a href="websitedetails.php" class="learnmore">Learn More</a>
                </div>
            </div>
        </div>
        <div class="post-demand">
            <span>hello</span>
        </div>
    </div>
    <div class="housesale">

    </div>

</body>

</html>
<?php
  include("footer.php");
?>



<!-- content end -->
<footer>
    <div class="footer">
        <div class="footer-content">
            <a href="">
                <h1>PropertyLord.com</h1>
            </a>
            <p>Here , where you get your dream property</p>
            <div class="icons">
                <a href=""><i class='bx bxl-facebook-circle'></i></a>
                <a href=""><i class='bx bxl-instagram'></i></a>
                <a href=""><i class='bx bxl-linkedin'></i></a>
                <a href=""><i class='bx bxl-twitter'></i></a>
                <a href=""><i class='bx bxl-youtube'></i></a>
            </div>
        </div>
        <div class="footer-content">
            <h4>Projects</h4>
            <li><a href="">Houses</a></li>
            <li><a href="">Rooms</a></li>
            <li><a href="">Flats</a></li>
            <li><a href="">Appartments</a></li>
        </div>
        <div class="footer-content">
            <h4>Company</h4>
            <li><a href="">How we work</a></li>
            <li><a href="">Capital</a></li>
            <li><a href="">Security</a></li>
            <li><a href="">Sellings</a></li>
        </div>
        <div class="footer-content">
            <h4>Movement</h4>
            <li><a href="">Movement</a></li>
            <li><a href="">Pricing</a></li>
            <li><a href="">Renting</a></li>
            <li><a href="">Sellings</a></li>
        </div>
        <div class="footer-content">
            <h4>Help</h4>
            <li><a href="">Privacy</a></li>
            <li><a href="">Condition</a></li>
            <li><a href="">Blogs</a></li>
            <li><a href="">FAQ</a></li>
        </div>
    </div>
</footer>
</body>

</html>