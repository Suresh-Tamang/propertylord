<?php
require 'connection.php';
    $cid=$_GET['clientid'];
    $oid=$_GET['ownerid'];
    $pid=$_GET['propertyid'];
    $deletemsg = "delete from messages where clientid='$cid'and ownerid='$oid' and propertyid='$pid'";
    $resultDelMsg = $conn ->query($deletemsg);
    if($resultDelMsg){
        header('location:adminportal.php');
    }