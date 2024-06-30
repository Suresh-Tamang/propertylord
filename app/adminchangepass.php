<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['adminid'])){
    header('location:admin.php');
}
$userid = $_SESSION['adminid'];
if(isset($_POST['changepassu'])){
    $oldpass=$_POST['opassword'];
    $newpass=$_POST['password'];
    $cnewpass=$_POST['cpassword'];
    $sql = "select * from admin where id='$userid' and password='$oldpass'";
    $result = $conn -> query($sql);
    if($result->num_rows>0){
        if($newpass === $cnewpass){
        $updateQuery = "update admin set password='$newpass' where id='$userid'";
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
            <li><a href="adminportal.php#user" >Users</a></li>
            <li><a href="adminportal.php#property" >Properties</a></li>
            <li><a href="adminportal.php#category" >Category</a></li>
            <li><a href="adminportal.php#enquiry" >Enquiry</a></li>
            <li><a href="index.php" target="_blank" >Website</a></li>
        </ul>
        <div class="h-btn">
        <a href="adminprofile.php" class="h-btn2">Cancel</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- registration section -->
    <div class="icons">
        <a href=""></a>
    </div>
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

 </body>
 </html>
