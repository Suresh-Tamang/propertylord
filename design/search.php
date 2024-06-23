<?php
//This portion of the code is used to get keyword from the search bar in the index.php
if(isset($_POST['search'])){
    $keyword = $_POST['searchproperty'];
    header('location:index.php?searchkey='.$keyword);
}
else{
    header('location:index.php');
}

//for user search engine
if(isset($_POST['usersearch'])){
    $keyword = $_POST['searchproperty'];
    header('location:user.php?searchkey='.$keyword);
} 
else{
    header('location:user.php');
}