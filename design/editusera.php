

<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['adminid'])){
    header('location:admin.php');
}
if(isset($_GET['userid'])){
    $userid = $_GET['userid'];
    $sql = "select * from users where id='$userid'";
    $data = $conn ->query($sql);
    $user = $data->fetch_assoc();
if(isset($_POST['updateuser'])){
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
        <a href="adminportal.php">
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
            <a href="adminportal.php" class="h-btn2">Cancel</a>
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
                        <input type="submit" name="updateuser" id="login" value="Update" class="login-btn">
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