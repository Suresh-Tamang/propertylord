<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['adminid'])){
    header('location:admin.php');
}
$userid = $_SESSION['adminid'];
$sql = "select * from users where uid='$userid'"; 
$data=$conn->query($sql);
$admin = $data->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propertylord</title>
    <link rel="stylesheet" href="adminportal.css">
    <link rel="stylesheet" href="userprofile.css">
    <!-- boxi icon links -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header class="sticky">
        <a href="#">
            <img src="img/logo.png" alt="">
        </a>
        <ul class="navbar open">
            <li><a href="adminportal.php#user" >Users</a></li>
            <li><a href="adminportal.php#property" >Properties</a></li>
            <li><a href="adminportal.php#category" >Category</a></li>
            <li><a href="adminportal.php#enquiry" >Enquiry</a></li>
            <li><a href="index.php" target="_blank" >Website</a></li>
        </ul>
        <div class="h-btn">
            <a href="logouta.php" class="h-btn1 login" onclick="return confirm('Are you sure to logout?');">LogOut</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <div class="icons">
        <a href=""></a>
    </div>
    <section class="udetails">
        <div class="userdetails">
            <h1>Your Details are below</h1>
            <div class="row">
                <div class="th"><p>Admin Id :</p></div>
                <div class="td"><p><?php echo $admin['uid'] ?><p></div>
            </div>
            <div class="row">
                <div class="th"><p>First Name :</p></div>
                <div class="td"><p><?php echo $admin['firstname'] ?></p></div>
            </div>
            <div class="row">
                <div class="th"><p>Last Name :</p></div>
                <div class="td"><p><?php echo $admin['lastname'] ?></p></div>
            </div>
            <div class="row">
                <div class="th"><p>Email Address :</p></div>
                <div class="td"><p><?php echo $admin['email'] ?></p></div>
            </div>
            <div class="row">
                <div class="th"><p>Contact :</p></div>
                <div class="td"><p><?php echo $admin['contact'] ?></p></div>
            </div>
            <div class="row">
                <a href="admineditprofile.php" class="editbtn">Edit Profile</a>
                <a href="adminchangepass.php" class="editbtn">Change Password</a>
            </div>
        </div>
</section>
    <!-- js file -->
    <script src="script.js"></script>s
</body>

</html>