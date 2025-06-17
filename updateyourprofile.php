<?php
require("connection.php"); 
$jname=$_REQUEST["jname"];
$jemail=$_REQUEST["jemail"];
$jphoneno=$_REQUEST["jphoneno"];
$jpassword=$_REQUEST["jpassword"];
$id=$_REQUEST["id"];
$res = $con->query("update `tb_rlogin` set `rname`='$jname',`remail`='$jemail',`rphoneno`='$jphoneno',`rpassword`='$jpassword' where `Id`='$id'");

$count=mysqli_affected_rows($con);
header("location:readers.php");

?>
