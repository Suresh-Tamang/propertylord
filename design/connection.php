<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "propertylord";
$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error) {
    die("<script>alert ('Connectino error');</script>". $db->connect_error);
}
