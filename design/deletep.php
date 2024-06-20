<?php
require 'connection.php';
if(isset($_GET['pid'])){
    $pid = $_GET['pid'];
    $deletesql="delete from properties where id='$pid'";
    if($conn->query($deletesql)){
        header('location:userprofile.php');
    }
}