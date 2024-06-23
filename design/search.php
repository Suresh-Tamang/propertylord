<?php
//This portion of the code is used to get keyword from the search bar in the index.php
if(isset($_POST['searchinput'])){
    $keyword = $_POST['searchproperty'];
    header('location:index.php?searchkey='.$keyword);
}

//for user search engine
if(isset($_POST['usersearch'])){
    $keyword = $_POST['searchproperty'];
    header('location:user.php?searchkey='.$keyword);
} 
