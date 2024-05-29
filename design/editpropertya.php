

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
    <div class="login">
        <!-- <span class="close-btn"><a href="">x</a></span> -->
        <div class="title">
            <h1>Edit Property Details</h1>
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
                        <input type="password" name="cpassword" id="cpassword" placeholder="Price in Rs."required>
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
                        <input type="file" name="cpassword" id="cpassword" placeholder="Confirm Password"required>
                    </div>
                    <!-- <div class="input">
                        <a href="">Forgot password? </a>
                    </div> -->
                    <div class="input">
                        <input type="submit" name="editpropertya" id="addproperty" value="Add Property" class="login-btn">
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