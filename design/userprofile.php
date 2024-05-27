

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propertylord</title>
    <link rel="stylesheet" href="addproperty.css">
    <link rel="stylesheet" href="userprofile.css">
    <!-- boxi icon links -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">    
    <style>
    </style>
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
            <a href="editprofile.php" class="h-btn1">EditProfile</a>
            <a href="addproperty.php" class="h-btn2">AddProperty</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- user detail section-->
    <section class="udetails">
        <div class="userdetails">
            <h1>Your Details are below</h1>
            <div class="row">
                <div class="th"><p>User Id :</p></div>
                <div class="td"><p>1</p></div>
            </div>
            <div class="row">
                <div class="th"><p>First Name :</p></div>
                <div class="td"><p>Suresh</p></div>
            </div>
            <div class="row">
                <div class="th"><p>Last Name :</p></div>
                <div class="td"><p>Tamang</p></div>
            </div>
            <div class="row">
                <div class="th"><p>Email Address :</p></div>
                <div class="td"><p>sureshjimba3333@gmail.com</p></div>
            </div>
            <div class="row">
                <div class="th"><p>Contact :</p></div>
                <div class="td"><p>9741847684</p></div>
            </div>
            <div class="row">
                <a href="editprofile.php" class="editbtn">Edit Profile</a>
                <a href="editpass.php" class="editbtn">Change Password</a>
            </div>
        </div>
</section>
<!-- properties display -->
<section>
    <div class="propertydetails">
        <h1>Your Listed Properties </h1>
        <div class="tables">
    <table class="ptable">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>location</th>
            <th>area</th>
            <th>price</th>
            <th>purpose</th>
            <th colspan="2">action</th>
        </tr>
        <?php
        $count =10;
        for ($i = 0; $i < $count; $i++) {
            
            ?>
        <tr>
            <td><?php echo $i+1 ?></td>
            <td>House for rent</td>
            <td>This house is located inside the ringroad</td>
            <td>Thamel</td>
            <td>1290sq fit</td>
            <td>Rs 200000/month</td>
            <td>rent</td>
            <td><a href="editp.php" class="actionbtnu">Edit</a></td>
            <td><a href="deletep.php" class="actionbtnd">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
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