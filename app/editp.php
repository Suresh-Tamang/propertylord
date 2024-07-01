
<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['userid'])){
    header('location:login.php');
}
$userid = $_SESSION['userid'];
$date = date('m/d/Y h:i:s a',time());
if(isset($_GET['pid'])){
    $pid = $_GET['pid'];
    $selectSql = "select * from properties where id='$pid'";
    $result3=$conn->query($selectSql);
    $propertydata=$result3->fetch_assoc();
    $category1=$propertydata['category'];
    $type = $propertydata['purpose'];
    if(isset($_POST['updateproperty'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $location = $_POST['location'];
        $area = $_POST['area'];
        $price = $_POST['price'];
        $purpose = $_POST['purpose'];
        $category = $_POST['category'];
        $sql = "update properties set title='$title', description='$description',location='$location',area=$area,price=$price, purpose='$purpose',category='$category' where id='$pid'";
        $result1 = $conn -> query($sql);
        if($result1){ 
            echo('<script>alert("Property Update Successful !");</script>');
        }
        else{
            echo('<script>alert("Property Update Failed!");</script>');
        }
        
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
            <li><a href="user.php">Home</a></li>
            <li><a href="user.php#renting">Renting</a></li>
            <li><a href="user.php#selling">Selling</a></li>
            <li><a href="user.php#contactus">contactus</a></li>
            <li><a href="user.php#knowmore">AboutUs</a></li>
        </ul>
        <div class="h-btn">
            <!-- <a href="#" class="h-btn1 login">Cancel</a> -->
            <a href="userprofile.php#property" class="h-btn2">Cancel</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- registration section -->
    <section id="property">
    <div class="login">
        <!-- <span class="close-btn"><a href="">x</a></span> -->
        <div class="title">
            <h1>Edit your property</h1>
        </div>
        <div class="container">
            <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                <div class="login-forms">
                    <div class="input">
                        <label for="">Title</label>
                        <input type="text" name="title" id="title" value="<?php echo $propertydata['title']; ?>" placeholder="Enter Title of the product" required>
                    </div>
                    <div class="input">
                        <label for="">Description</label>
                        <input type="text" name="description" id="description" value="<?php echo $propertydata['description']; ?>" placeholder="Enter Description" required>
                    </div>
                    <div class="input">
                        <label for="">Location</label>
                        <input type="text" name="location" id="location" value="<?php echo $propertydata['location']; ?>" placeholder="Enter Location" required>
                    </div>
                    <div class="input">
                        <label for="">Total Area in square fit.</label>
                        <input type="number" name="area" id="area" value="<?php echo $propertydata['area'];?>"  placeholder="Enter total area sqare fit." required>
                    </div>
                    <div class="input">
                        <label for="">Price</label>
                        <input type="number" name="price" id="price" value="<?php echo $propertydata['price'];?>" placeholder="Price in Rs."required>
                    </div>
                    <div class="input">
                        <label for="">Purpose</label>
                        <select name="purpose" class="loca" required>
                        <option class="option" value="sell" <?php if($type == 'sell') {echo 'selected';} ?>>sell</option>
                        <option class="option" value="rent" <?php if($type == 'rent') {echo 'selected';} ?>>rent</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="">Category</label>
                            <select name="category" class="loca" required>
                            <option class="option" value="">select</option>                      
                            <option class="option" value="land" <?php if($category1 == 'land') {echo 'selected';} ?>>land</option>
                            <option class="option" value="office space" <?php if($category1 == 'office space') {echo 'selected';} ?>>office space</option>
                            <option class="option" value="room" <?php if($category1 == 'room') {echo 'selected';} ?>>room</option>
                            <option class="option" value="house" <?php if($category1 == 'house') {echo 'selected';} ?>>house</option>
                            <option class="option" value="apartment" <?php if($category1 == 'apartment') {echo 'selected';} ?>>apartment</option>
                        </select>
                    </div>
                    <!-- <div class="input">
                        <label for="">Please select the image of property</label>
                        <input type="file" name="pimg" id="pimg" required>
                    </div> -->
                    <div class="input">
                        <input type="submit" name="updateproperty" id="updateproperty" value="Update Property" onclick="return confirm('Are you sure want to update?');" class="login-btn">
                    </div>

                </div>
            </form>
        </div>

    </div>
</section>

    <!-- footer -->
    <section class="footer">
        <div class="footer-content">
            <img src="img/logo.png" alt="">
            <p>Propertylord Your Real Estate solution!
            </p>
            <div class="icons">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
        </div>
        <div class="footer-content links">
            <h4>Services</h4>
            <li><a href="#">Houses</a></li>
            <li><a href="#">Apartments</a></li>
            <li><a href="#">Flats</a></li>
            <li><a href="#">Renting</a></li>
        </div>
        <div class="footer-content links">
            <h4>About us</h4>
            <li><a href="#">Houses</a></li>
            <li><a href="#">Apartments</a></li>
            <li><a href="#">Flats</a></li>
            <li><a href="#">Renting</a></li>
        </div>
        
        <div class="footer-content links">
            <h4>Popular Projects</h4>
            <li><a href="#">Houses</a></li>
            <li><a href="#">Apartments</a></li>
            <li><a href="#">Flats</a></li>
            <li><a href="#">Renting</a></li>
        </div>
    </section>
    <section class="cp">
        <div class="copyright">
            <i class='bx bx-copyright'>PropertyLord All Right Reserved</i>
        </div>
    </section>s
    

    <!-- js file -->
    <script src="script.js"></script>
</body>

</html>
<?php 

?>