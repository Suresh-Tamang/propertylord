<?php 
require 'connection.php';
session_start();
if(isset($_POST['addproperty'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $area = $_POST['area'];
    $price = $_POST['price'];
    $purpose = $_POST['purpose'];
    $category = $_POST['category'];
    $imgname = $_FILES['pimg']['name'];
    $targetDirectory = "uploads/";
    $imagePath=$targetDirectory.$imgname;
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
        <a href="#">
            <img src="img/logo.png" alt="">
        </a>
        <ul class="navbar open">
            <li><a href="#">Home</a></li>
            <li><a href="index.php#aboutus">About Us</a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="#">Renting</a></li>
            <li><a href="#">Selling</a></li>
        </ul>
        <div class="h-btn">
            <!-- <a href="#" class="h-btn1 login">Cancel</a> -->
            <a href="user.php" class="h-btn2">Cancel</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- registration section -->
    <section>
    <div class="login">
        <!-- <span class="close-btn"><a href="">x</a></span> -->
        <div class="title">
            <h1>Add your property</h1>
        </div>
        <div class="container">
            <form action="">
                <div class="login-forms">
                    <div class="input">
                        <label for="">Title</label>
                        <input type="text" name="title" id="title" placeholder="Enter Title" required>
                    </div>
                    <div class="input">
                        <label for="">Description</label>
                        <input type="text" name="description" id="description" placeholder="Enter Description" required>
                    </div>
                    <div class="input">
                        <label for="">Location</label>
                        <select name="locatin" class="loca">
                            <option class="option" value="select">select</option>
                        </select>
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
                        </select>
                    </div>
                    <div class="input">
                        <label for="">Category</label>
                        <select name="category" class="loca">
                            <option class="option" value="select">select</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="">Please select the image of property</label>
                        <input type="file" name="pimg" id="pimg" placeholder="Confirm Password"required>
                    </div>
                    <div class="input">
                        <input type="submit" name="addproperty" id="addproperty" value="Add Property" class="login-btn">
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, et.
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