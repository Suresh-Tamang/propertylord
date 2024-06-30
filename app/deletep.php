<?php
require 'connection.php';
//delete for property by user
if(isset($_GET['pid'])){
    $pid = $_GET['pid'];
    $deletesql="delete from properties where id='$pid'";
    $deletesql1="delete from uploads where propertyid='$pid'";
    $result=$conn->query($deletesql);
    $result1=$conn->query($deletesql1);
    if($result && $result1){
        header('location:userprofile.php');
    }
}
//delete for user by admin
if(isset($_GET['userid'])){
    $userid = $_GET['userid'];
    $deleteuser="delete from users where id='$userid'";
    $result=$conn->query($deleteuser);
    if($result){
        header('location:adminportal.php#user');
    }
}
//delete property from admin//
if(isset($_GET['propertyid'])){
    $propertyid = $_GET['propertyid'];
    $deleteproperty="delete from properties where id='$propertyid'";
    $result=$conn->query($deleteproperty);
    if($result){
        header('location:adminportal.php#property');
    }
}
//delete property from admin//
if(isset($_GET['categoryid'])){
    $categoryid = $_GET['categoryid'];
    $deletecategory="delete from category where id='$categoryid'";
    $result=$conn->query($deletecategory);
    if($result){
        header('location:adminportal.php#category');
    }
}

if(isset($_GET['cid'])&isset($_GET['oid'])&isset($_GET['pid'])){
    $cid=$_GET['cid'];
    $oid=$_GET['oid'];
    $pid=$_GET['pid'];
    $deletemsg = "delete from messages where clientid='$cid'and ownerid='$oid' and propertyid='$pid'";
    $result = $conn ->query($deletemsg);
    if($result){
        header('location:adminportal.php#enquiry');
    }
}



