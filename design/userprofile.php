
<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['userid'])){
    header('location:login.php');
}
$userid = $_SESSION['userid'];
$sql = "select * from users where id='$userid'";
$result=$conn -> query($sql);
$user = $result->fetch_assoc();

$propertyQuery="select * from properties where userid='$userid'";
$property=$conn -> query($propertyQuery);
?>

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
            <li><a href="user.php">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="#">Renting</a></li>
            <li><a href="#">Selling</a></li>
        </ul>
        <div class="h-btn">
            <a href="editprofile.php" class="h-btn1">EditProfile</a>
            <a href="addproperty.php" class="h-btn2">AddProperty</a>
            <a href="logoutu.php" onclick="return confirm('Are you sure want to logou?');" class="h-btn2">LogOut</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- user detail section-->
    <section class="udetails">
        <div class="userdetails">
            <h1>Your Details are below</h1>
            <div class="row">
                <div class="th"><p>User Id :</p></div>
                <div class="td"><p><?php echo $user['id'] ?><p></div>
            </div>
            <div class="row">
                <div class="th"><p>First Name :</p></div>
                <div class="td"><p><?php echo $user['firstname'] ?></p></div>
            </div>
            <div class="row">
                <div class="th"><p>Last Name :</p></div>
                <div class="td"><p><?php echo $user['lastname'] ?></p></div>
            </div>
            <div class="row">
                <div class="th"><p>Email Address :</p></div>
                <div class="td"><p><?php echo $user['email'] ?></p></div>
            </div>
            <div class="row">
                <div class="th"><p>Contact :</p></div>
                <div class="td"><p><?php echo $user['contact'] ?></p></div>
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
            <th>category</th>
            <th>date</th>
            <th colspan="2">action</th>
        </tr>
        <?php
        while($data=$property->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['title'] ?></td>
            <td><?php echo $data['description'] ?></td>
            <td><?php echo $data['location'] ?></td>
            <td><?php echo $data['area'] ?></td>
            <td><?php echo $data['price'] ?></td>
            <td><?php echo $data['purpose'] ?></td>
            <td><?php echo $data['category'] ?></td>
            <td><a href="editp.php?pid=<?php echo $data['id'];?>"class="actionbtnu">Edit</a></td>
            <td><a href="deletep.php?pid=<?php echo $data['id'];?>" class="actionbtnd" onclick="return confirm('Are you sure want to delete?');">Delete</a></td>
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
    </section>
    <!-- js file -->
    <script src="script.js"></script>
</body>

</html>