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
            <li><a href="index.php#aboutus">About Us</a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="#">Renting</a></li>
            <li><a href="#">Selling</a></li>
        </ul>
        <div class="h-btn">
            <!-- <a href="#" class="h-btn1 login">Cancel</a> -->
            <!-- <a href="#" class="h-btn2">SignUp</a> -->
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- registration section -->
    <section>
    <div class="login">
        <span class="close-btn"><a href="">x</a></span>
        <div class="title">
            <h1>List your property</h1>
        </div>
        <div class="container">
            
            <form action="">
                <div class="login-forms">
                    <div class="input">
                        <label for="">First Name</label>
                        <input type="text" name="email" id="email" placeholder="Enter First Name" required>
                    </div>
                    <div class="input">
                        <label for="">Last Name</label>
                        <input type="text" name="email" id="email" placeholder="Enter Last Name" required>
                    </div>
                    <div class="input">
                        <label for="">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter Email " required>
                    </div>
                    <div class="input">
                        <label for="">Contact</label>
                        <input type="number" name="contact" id="contact" placeholder="Phone Number" required>
                    </div>
                    <div class="input">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password" required>
                    </div>
                    <div class="input">
                        <label for="">Confirm Password</label>
                        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password"required>
                    </div>
                    <!-- <div class="input">
                        <a href="">Forgot password? </a>
                    </div> -->
                    <div class="input">
                        <input type="submit" name="login" id="login" value="Register" class="login-btn">
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