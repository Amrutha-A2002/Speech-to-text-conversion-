<?php
require("connection.php"); 
$jname=$_REQUEST["jname"];
$jemail=$_REQUEST["jemail"];
$jphoneno=$_REQUEST["jphoneno"];
$jpassword=$_REQUEST["jpassword"];
$id=$_REQUEST["id"];
$res = $con->query("update `tb_jlogin` set `jname`='$jname',`jemail`='$jemail',`jphoneno`='$jphoneno',`jpassword`='$jpassword' where `id`='$id'");

$count=mysqli_affected_rows($con);
header("location:home.php");

?>
