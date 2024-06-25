<?php
// require 'connection.php';
// if(isset($_GET['pid'])){
//     $pid = $_GET['pid'];
//     $intpid = $pid;
//     echo gettype($pid);
//     $selectSql = "select * from properties where id='$pid'";
//     $result3=$conn->query($selectSql);
//     $propertydata=$result3->fetch_assoc();
//     $titles=$propertydata['title'];
    
// if(isset($_POST['updateproperty'])){
//     $randNum=rand(0,10000);
//     $id = $randNum+$userid;
//     $title = $_POST['title'];
//     $description = $_POST['description'];
//     $location = $_POST['location'];
//     $area = $_POST['area'];
//     $price = $_POST['price'];
//     $purpose = $_POST['purpose'];
//     // $category = $_POST['category'];
//     $Image=$_FILES['pimg'];
//     $targetDirectory = "uploads/";
//     $filePath = $targetDirectory.basename($Image['name']);
//     $uploads = move_uploaded_file($Image['tmp_name'],$filePath);
//     $sql = "UPDATE properties SET id = '$id', title = '$title', description = '$description', location = '$location', area = '$area', price = '$price', purpose = '$purpose', category = '$category', date = '$date' WHERE id = '$pid'";
//     if($conn->query($sql)){
//         echo('<script>alert("successful");</script>');
        
//     }
    
// }
// }
// else{
//     echo "hahah";
// }
if(isset($_POST['search'])){
    $keyword = $_POST['searchproperty'];
    echo $keyword;
}
?>