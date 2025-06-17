<?php
session_start();
require("connection.php");

// Sanitize input parameters
$uname = $_REQUEST["uname"];
$psw = $_REQUEST["psw"];


// Check student credentials
$res1 = $con->query("SELECT * FROM `tb_adminlogin` WHERE `adminname`='$uname' AND  `password`='$psw'");
$count1= $res1->num_rows;

if ($count1 > 0) {
    $_SESSION["teacher"]=$uname;
  
            header("location:dashboard.php");
            
    
} else {
    // Invalid credentials
    echo "<script>alert('Invalid email or password!'); window.location='index.php';</script>";
    exit; // Stop execution
}
?>
