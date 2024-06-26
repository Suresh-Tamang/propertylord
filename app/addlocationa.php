
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
            <a href="adminportal.php#location" class="h-btn2">Cancel</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- registration section -->
    <section>
    <div class="login">
        <!-- <span class="close-btn"><a href="">x</a></span> -->
        <div class="title">
            <h1>Add New Location</h1>
        </div>
        <div class="container">
            
            <form action="">
                <div class="login-forms">
                    <div class="input">
                        <label for="">Location name</label>
                        <input type="text" name="email" id="email" placeholder="Enter location name" required>
                    </div>
                    <div class="input">
                        <input type="submit" name="addlocationa" id="login" value="AddLocation" class="login-btn">
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