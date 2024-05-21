<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "propertylord";
$db = new mysqli($host, $user, $pass,$dbname);
if ($db->connect_error) {
    die("Connection unsuccessful". $db->connect_error );
}
?>