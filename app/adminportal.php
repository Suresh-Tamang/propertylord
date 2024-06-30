<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['adminid'])){
    header('location:admin.php');
}

$user = "select * from users";
$userdata = $conn->query($user);

$property = "select * from properties";
$properties = $conn->query($property);

$category = "select * from category";
$categorydata=$conn->query($category);


?>
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
            <li><a href="#enquiry" >Enquiry</a></li>
            <li><a href="index.php" target="_blank" >Website</a></li>
        </ul>
        <div class="h-btn">
            <a href="adminprofile.php" class="h-btn1 login">Profile</a>
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
                    while($userrow = $userdata->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $userrow['uid'];?></td>
                        <td><?php echo $userrow['firstname'];?></td>
                        <td><?php echo $userrow['lastname'];?></td>
                        <td><?php echo $userrow['email'];?></td>
                        <td><?php echo $userrow['contact'];?></td>
                        <td><?php echo $userrow['password'];?></td>
                        <td><a href="editusera.php?userid=<?php echo $userrow['uid'];?>" class="actionbtnu">Edit</a></td>
                        <td><a href="deletep.php?userid=<?php echo $userrow['uid'];?>" onclick="return confirm('Are you sure to delete this user?');" class="actionbtnd">Delete</a></td>
                    </tr>
                    <?php }?>
        </table>
        </div>
        <div class="addbutton">
            <button><a href="addusera.php">Create User</a></button>
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
                <th>userid</th>
                <th>area</th>
                <th>price</th>
                <th>purpose</th>
                <th>category</th>
                <th>publishdate</th>
                <th colspan="2">action</th>
            </tr>
            <?php while($propertydata=$properties->fetch_assoc()) {?>
            <tr>
                <td><?php echo $propertydata['id']; ?></td>
                <td><?php echo $propertydata['title']; ?></td>
                <td><?php echo $propertydata['description']; ?></td>
                <td><?php echo $propertydata['location']; ?></td>
                <td><?php echo $propertydata['userid']; ?></td>
                <td><?php echo $propertydata['area']; ?></td>
                <td><?php echo $propertydata['price']; ?></td>
                <td><?php echo $propertydata['purpose']; ?></td>
                <td><?php echo $propertydata['category']; ?></td>
                <td><?php echo $propertydata['publishdate']; ?></td>
                <td><a href="editpropertya.php?propertyid=<?php echo $propertydata['id'];?>" class="actionbtnu">Edit</a></td>
                <td><a href="deletep.php?propertyid=<?php echo $propertydata['id'];?>" onclick="return confirm('Are you sure to delete?');" class="actionbtnd">Delete</a></td>
            </tr>
            <?php }?>
        </table>
        </div>
        <div class="addbutton">
            <button><a href="addpropertya.php">AddProperty</a></button>
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
                <th>CategoryName</th>
                <th>action</th>
            </tr>
            <?php while($cdata = $categorydata->fetch_assoc()) 
            { ?>
            <tr>
                <td><?php echo $cdata['id'];?></td>
                <td><?php echo $cdata['type'];?></td>
                <td><a href="deletep.php?categoryid=<?php echo $cdata['id']; ?>" onclick="return confirm('Are you sure to delete?');" class="actionbtnd">Delete</a></td>
            </tr>
            <?php } ?>
        </table>
        </div>
        <div class="addbutton">
            <button><a href="addcategorya.php">AddCategory</a></button>
        </div>
        </div>
    </section>
<section id="enquiry">
    <div class="propertydetails" id="message">
        <h1>Enquiry Messages</h1>
        <div class="tables">
    <table class="ptable">
        <tr>
            <th>From Clientid</th>
            <th>To Owner id</th>
            <th>Message</th>        
            <th>On Property id</th>    
            <th>Title</th>
            <th>Action</th>
        </tr>
        <?php 
        $messageQuery = "select * from  messages";
        $messageResult = $conn->query($messageQuery);
        while($mdata = $messageResult->fetch_assoc()){?>
        <tr>
            <td><?php echo $mdata['clientid'];?></td>
            <td><?php echo $mdata['ownerid'];?></td>  
            <td><?php echo $mdata['message'];?></td>    
            <td><?php echo $mdata['propertyid'];?></td>  
            <td><?php echo $mdata['title'];?></td>  
            <td><a href="deletep.php?cid=<?php echo $mdata['clientid'];?>&oid=<?php echo $mdata['ownerid'];?>&pid=<?php echo $mdata['propertyid'];?>"  onclick="return confirm('Are you sure to delete?');" class="actionbtnd">Delete</a></td>
            </tr>
        <?php } ?>
        </table>
    </div>
    </div>
</section>
    <!-- js file -->
    <script src="script.js"></script>s
</body>

</html>