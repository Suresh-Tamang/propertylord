
<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['userid'])){
    header('location:login.php');
}
$userid = $_SESSION['userid'];
$sql = "select * from users where id='$userid'";
$data = $conn ->query($sql);
$user = $data->fetch_assoc();
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
            <li><a href="user.php#aboutus">About Us</a></li>
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
            <h1>Update Your Info</h1>
        </div>
        <div class="container">
            
            <form action="" method="post">
                <div class="login-forms">
                    <div class="input">
                        <label for="">First Name</label>
                        <input type="text" name="fname" id="fname" value="<?php echo $user['firstname'];?>" placeholder="Enter First Name" required>
                    </div>
                    <div class="input">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" id="lname" value="<?php echo $user['lastname'];?>" placeholder="Enter Last Name" required>
                    </div>
                    <div class="input">
                        <label for="">Email Address</label>
                        <input type="email" name="email" id="email" value="<?php echo $user['email'];?>" placeholder="Enter Email " required>
                    </div>
                    <div class="input">
                        <label for="">Contact</label>
                        <input type="number" name="contact" id="contact" value="<?php echo $user['contact'];?>" placeholder="Phone Number" required>
                    </div>
                    <div class="input">
                        <input type="submit" name="updateprofile" id="login" value="Update" class="login-btn">
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
<?php
if(isset($_POST['updateprofile'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $sql = "update users set firstname='$fname', lastname='$lname',email='$email', contact='$contact' where id='$userid'";
    if($conn->query($sql)){
        echo('<script>alert("Update Successful");</script>');
    }
    else{
        echo('<script>alert("Update Unsuccessful");</script>');
    }
}

?>