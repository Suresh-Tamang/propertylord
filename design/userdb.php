<?php
if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if($pass !== $cpassword){
        echo('<script>alert("Password is not matched");</script>');
    }
    else{
        $sql = "insert into users values (null, '$fname','$lname','$email','$contact','$password')";
        if($conn -> query($sql)){
            echo('<script>alert("Registration Successful")</script>');
        }
        else{
            die('Error: '.$conn->error);
        }
    }
    
}




?>