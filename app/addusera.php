<?php
session_start();
if(!isset($_SESSION['adminid'])){
    header('location:admin.php');
}
require 'connection.php'; 
if(isset($_POST['adduser'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $emailcheck = "select * from users where email='$email'";
    $result = $conn->query($emailcheck);
    if($result->num_rows > 0){
        echo('<script>alert("User with that email address already exists. Please use different email address.");</script>');
    }
    else{
    if($password !== $cpassword){
        echo('<script>alert("Password is not matched");</script>');
    }
    else{
        $sql = "insert into users values (null, '$fname','$lname','$email','$contact','$password')";
        if($conn -> query($sql)){
            echo('<script>alert("User added Successfully")</script>');
        }
        else{
            die('Error: '.$conn->error);
        }
    }
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
            <li><a href="adminportal.php#user">Users</a></li>
            <li><a href="adminportal.php#property">Properties</a></li>
            <li><a href="adminportal.php#category">Category</a></li>
            <li><a href="adminportal.php#location">Location</a></li>
            <li><a href="index.php" target="_blank">Website</a></li>
        </ul>
        <div class="h-btn">
            <!-- <a href="user.php" class="h-btn1 login">EditProfile</a> -->
            <a href="adminportal.php#user" class="h-btn2">Cancel</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- registration section -->
    <section>
    <div class="login">
        <span class="close-btn"><a href="">x</a></span>
        <div class="title">
            <h1>Create New User Account</h1>
        </div>
        <div class="container">
            
            <form action="" method="post">
                <div class="login-forms">
                <div class="input">
                        <label for="">First Name</label>
                        <input type="text" name="fname"  placeholder="Enter First Name" required>
                    </div>
                    <div class="input">
                        <label for="">Last Name</label>
                        <input type="text" name="lname"  placeholder="Enter Last Name" required>
                    </div>
                    <div class="input">
                        <label for="">Email Address</label>
                        <input type="email" name="email"   placeholder="Enter Email " required>
                    </div>
                    <div class="input">
                        <label for="">Contact</label>
                        <input type="number" name="contact" min="9700000000" max="9999999999"  placeholder="Phone Number" required>
                    </div>
                    <div class="input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter Password" required>
                    </div>
                    <div class="input">
                        <label for="">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password"required>
                    </div>
                    <div class="input">
                        <input type="submit" name="adduser" id="login" value="Create" class="login-btn" style="font-size: 24px;">
                    </div>
                    
                </div>
            </form>
        </div>

    </div>
</section>

    

    <!-- js file -->
    <script src="script.js"></script>
</body>

</html>