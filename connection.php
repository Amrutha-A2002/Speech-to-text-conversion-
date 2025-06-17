<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_literaryhub";
$port = 3306; // Change this if your MySQL is running on a different port

$con = mysqli_connect($host, $user, $password, $database, $port);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
