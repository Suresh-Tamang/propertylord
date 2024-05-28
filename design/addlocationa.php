<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propertylord</title>
    <link rel="stylesheet" href="adminportal.css">
    <!-- boxi icon links -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <header class="sticky">
        <a href="#">
            <img src="img/logo.png" alt="">
        </a>
        <ul class="navbar open">
            <li><a href="#user" >Users</a></li>
            <li><a href="#property" >Properties</a></li>
            <li><a href="#category" >Category</a></li>
            <li><a href="#location" >Location</a></li>
            <li><a href="index.php" target="_blank" >Website</a></li>
        </ul>
        <script>
            let user = document.getElementById
        </script>
        <div class="h-btn">
            <a href="login.php" class="h-btn1 login">LoginOut</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <section id="user">
        <div class="propertydetails">
            <h1>Users</h1>
            <div class="tables">
                <table class="ptable">
                    <tr>
                        <th>id</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Password</th>
                        <th colspan="2">action</th>
                    </tr>
                    <?php
                            $count =5;
                            for ($i = 0; $i < $count; $i++) {
                                
                                ?>
                    <tr>
                        <td>
                            <?php echo $i+1 ?>
                        </td>
                        <td>House for rent</td>
                        <td>This house is located inside the ringroad</td>
                        <td>Thamel</td>
                        <td>1290sq fit</td>
                        <td>Rs 200000/month</td>
                        <td><a href="editp.php" class="actionbtnu">Edit</a></td>
                        <td><a href="deletep.php" class="actionbtnd">Delete</a></td>
                    </tr>
                    <?php } ?>
        </table>
        </div>
        <div class="addbutton">
            <button><a href="">AddUser</a></button>
        </div>
        </div>
        
    </section>
    <section id="property">
        <div class="propertydetails">
            <h1>All Listed Properties </h1>
            <div class="tables">
        <table class="ptable">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>description</th>
                <th>location</th>
                <th>area</th>
                <th>price</th>
                <th>purpose</th>
                <th colspan="2">action</th>
            </tr>
            <?php
            $count =10;
            for ($i = 0; $i < $count; $i++) {
                
                ?>
            <tr>
                <td><?php echo $i+1 ?></td>
                <td>House for rent</td>
                <td>This house is located inside the ringroad</td>
                <td>Thamel</td>
                <td>1290sq fit</td>
                <td>Rs 200000/month</td>
                <td>rent</td>
                <td><a href="editp.php" class="actionbtnu">Edit</a></td>
                <td><a href="deletep.php" class="actionbtnd">Delete</a></td>
            </tr>
            <?php } ?>
        </table>
        </div>
        <div class="addbutton">
            <button><a href="">AddProperty</a></button>
        </div>
        </div>
    </section>
    <section id="category">
        <div class="propertydetails">
            <h1>Property Categories </h1>
            <div class="tables">
        <table class="ptable">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>description</th>
                <th>location</th>
                <th>area</th>
                <th>price</th>
                <th>purpose</th>
                <th colspan="2">action</th>
            </tr>
            <?php
            $count =10;
            for ($i = 0; $i < $count; $i++) {
                
                ?>
            <tr>
                <td><?php echo $i+1 ?></td>
                <td>House for rent</td>
                <td>This house is located inside the ringroad</td>
                <td>Thamel</td>
                <td>1290sq fit</td>
                <td>Rs 200000/month</td>
                <td>rent</td>
                <td><a href="editp.php" class="actionbtnu">Edit</a></td>
                <td><a href="deletep.php" class="actionbtnd">Delete</a></td>
            </tr>
            <?php } ?>
        </table>
        </div>
        <div class="addbutton">
            <button><a href="">AddCategory</a></button>
        </div>
        </div>
    </section>
    <section id="location">
        <div class="propertydetails">
            <h1>Available location for listing </h1>
            <div class="tables">
        <table class="ptable">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>description</th>
                <th>location</th>
                <th>area</th>
                <th>price</th>
                <th>purpose</th>
                <th colspan="2">action</th>
            </tr>
            <?php
            $count =10;
            for ($i = 0; $i < $count; $i++) {
                
                ?>
            <tr>
                <td><?php echo $i+1 ?></td>
                <td>House for rent</td>
                <td>This house is located inside the ringroad</td>
                <td>Thamel</td>
                <td>1290sq fit</td>
                <td>Rs 200000/month</td>
                <td>rent</td>
                <td><a href="editp.php" class="actionbtnu">Edit</a></td>
                <td><a href="deletep.php" class="actionbtnd">Delete</a></td>
            </tr>
            <?php } ?>
        </table>
        </div>
        <div class="addbutton">
            <button><a href="">AddLocation</a></button>
        </div>
        </div>
    </section>
    <!-- js file -->
    <script src="script.js"></script>s
</body>

</html>