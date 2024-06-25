<?php
require 'connection.php';
session_start();
if(isset($_POST['logina'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    //sql for selecting the user//
    $sql = "select * from admin where email = '$email' and pass = '$password'";
    $data = $conn -> query($sql);
    if($data->num_rows>0){
        $admin = $data->fetch_assoc();
        $_SESSION['adminid'] =$admin['id']; 
        header('location:adminportal.php');
    }
    else{
        echo('<script>alert("Wrong Credientials");</script>');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propertylord</title>
    <link rel="stylesheet" href="admin.css">
    <!-- boxi icon links -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
     <!-- login form -->
     <section class="form-section">
        <div class="login">
            <!-- <span class="close-btn"><a href="index.php">x</a></span> -->
            <div class="container">
                <div class="login-img">
                    <h3>Welcome to Admin Portal</h3>
                    <p>
                    </p>
                </div>
                <form action="" method="post">
                    <div class="login-forms">
                        <div class="title">
                            <h1>ADMIN PORTAL</h1>
                        </div>
                        <div class="input">
                            <label for="">Email Address</label>
                            <input type="text" name="email" id="email" placeholder="Enter Your Email address">
                        </div>
                        <div class="input">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="input">
                            <input type="submit" name="logina" id="login" value="LOGIN" class="login-btn">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>

</body>

</html>
