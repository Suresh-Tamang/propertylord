
<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['adminid'])){
    header('location:login.php');
}
$userid = $_SESSION['adminid'];
$date = date('m/d/Y h:i:s a',time());
if(isset($_POST['adminproperty'])){
    $randNum=rand(0,10000);
    $pid = $randNum+$userid;
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $area = $_POST['area'];
    $price = $_POST['price'];
    $purpose = $_POST['purpose'];
    $category = $_POST['category'];
    $Image=$_FILES['pimg'];
    $targetDirectory = "uploads/";
    $filePath = $targetDirectory.basename($Image['name']);
    $uploads = move_uploaded_file($Image['tmp_name'],$filePath);
    $sql = "insert into properties values($pid,'$title','$description','$location',$userid,$area,$price,'$purpose','$category','$date')";
    $sql1 = "insert into uploads values($pid,'$filePath',$userid)";
    $result1 = $conn -> query($sql);
    $result2 = $conn ->query($sql1);
    if($uploads && $result1 && $result2){ 
        echo('<script>alert("Property Add Successful !");</script>');
    }
    else{
        echo('<script>alert("Property Listing Failed!");</script>');
    }
    
}
$category="select * from category";
$categoryResult = $conn->query($category);
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
    <script>
        function validateForm(){
            var image=document.getElementById("pimg").value;
            var extension=image.split(".").pop().toLowerCase();
            var allowedExtension=["jpg","png","jpeg"];
            if(!allowedExtension.includes(extension)){
                alert("Please select a image file in .png, .jpeg, .jpg format!");
                return false;
            }
            return true;
        }
        </script>
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
            <a href="adminportal.php#property" class="h-btn2">Cancel</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- registration section -->
    <section id="property">
    <div class="login">
        <!-- <span class="close-btn"><a href="">x</a></span> -->
        <div class="title">
            <h1>Add your property</h1>
        </div>
        <div class="container">
            <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                <div class="login-forms">
                    <div class="input">
                        <label for="">Title</label>
                        <input type="text" name="title" id="title" placeholder="Enter Title of the product" required>
                    </div>
                    <div class="input">
                        <label for="">Description</label>
                        <input type="text" name="description" id="description" placeholder="Enter Description" required>
                    </div>
                    <div class="input">
                        <label for="">Location</label>
                        <input type="text" name="location" id="location" placeholder="Enter Location" required>
                    </div>
                    <div class="input">
                        <label for="">Total Area in square fit.</label>
                        <input type="number" name="area" id="area" placeholder="Enter total area sqare fit." required>
                    </div>
                    <div class="input">
                        <label for="">Price</label>
                        <input type="number" name="price" id="price" placeholder="Price in Rs."required>
                    </div>
                    <div class="input">
                        <label for="">Purpose</label>
                        <select name="purpose" class="loca">
                            <option class="option" value="select">select</option>
                            <option class="option" value="rent">Sell</option>
                            <option class="option" value="sell">Rent</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="">Category</label>
                        <select name="category" class="loca">
                            <?php
                            while($categoryData=($categoryResult->fetch_assoc()))
                            {
                            ?>
                            <option class="option" value="<?php echo $categoryData['type'];?>"><?php echo $categoryData['type'];?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input">
                        <label for="">Please select the image of property</label>
                        <input type="file" name="pimg" id="pimg" required>
                    </div>
                    <div class="input">
                        <input type="submit" name="adminproperty" id="addproperty" value="Add Property" class="login-btn">
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
<?php 

?>