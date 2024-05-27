

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
<section>
    <div class="admindiv">
        <div class="row">
            <div class="img">
                <img src="img/logo.png" alt="">
                <h1>This is Admin portal</h1>
            </div>    
            <div class="menus">
                <li><a href="">Users</a></li>
                <li><a href="">Properties</a></li>
                <li><a href="">Category</a></li>
                <li><a href="">locations</a></li>

            </div>
        </div>
        <div class="propertydetails">
        <h1>Total number of user are <?php echo 10;?> </h1>
        <div class="tables">
        <table class="ptable">
        <tr>
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>contact</th>
            <th>password</th>
            <th colspan="2">action</th>
        </tr>
        <?php
        $count =10;
        for ($i = 0; $i < $count; $i++) {
            
            ?>
        <tr>
            <td>1</td>
            <td>Suresh</td>
            <td>Tamang</td>
            <td>sureshjimba3333@gmail.com</td>
            <td>9741847684</td>
            <td>dhfan</td>
            <td><a href="editp.php?hello" class="actionbtnu">Edit</a></td>
            <td><a href="deletep.php" class="actionbtnd">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
    </div>
</section>
</body>

</html>
<?php
if(isset($_REQUEST['uuser'])){
    echo "<script> alert ('Update user button is clicked');</script>";
}
?>