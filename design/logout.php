<?php
session_start();
if(isset($_SESSION['adminid'])){
    unset($_SESSION['adminid']);
    header("location:admin.php");
}

if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
    header("location:login.php");
}

?>