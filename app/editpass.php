<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['userid'])){
    header('location:login.php');
}
$userid = $_SESSION['userid'];
if(isset($_POST['changepassu'])){
    $oldpass=$_POST['opassword'];
    $newpass=$_POST['password'];
    $cnewpass=$_POST['cpassword'];
    $sql = "select * from users where uid='$userid' and password='$oldpass'";
    $result = $conn -> query($sql);
    if($result->num_rows>0){
        if($newpass === $cnewpass){
        $updateQuery = "update users set password='$newpass' where uid='$userid'"; 
        if($conn->query($updateQuery)){
            echo('<script>alert("Update successful");</script>');
        }
        else{
            echo('<script>alert("Update Unsuccessful");</script>');
        }
        }
        else{
            echo('<script>alert("The new password is missmatch .");</script>');
        }
    }
    else{
        echo('<script>alert("The old password is incorrect. ");</script>');
    }
}
?>

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
            <!-- <a href="user.php" class="h-btn1 login">EditProfile</a> -->
            <a href="userprofile.php" class="h-btn2">Cancel</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- registration section -->
    <section>
    <div class="login">
        <!-- <span class="close-btn"><a href="">x</a></span> -->
        <div class="title">
            <h1>Update Your Password</h1>
        </div>
        <div class="container">
            
            <form action="" method="post">
                <div class="login-forms">
                
                    <div class="input">
                        <label for="">Current Password</label>
                        <input type="password" name="opassword" id="0password" placeholder="Enter Current Password" required>
                    </div>
                    <div class="input">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter New Password" required>
                    </div>
                    <div class="input">
                        <label for="">Confirm Password</label>
                        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password"required>
                    </div>
                    <div class="input">
                        <input type="submit" name="changepassu" id="login" value="Change Password" class="login-btn">
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
    </section>s
    

    <!-- js file -->
    <script src="script.js"></script>
</body>

</html>
<?php

?>
