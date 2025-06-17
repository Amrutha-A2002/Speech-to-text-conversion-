<?php
require("connection.php"); 
$jname=$_REQUEST["jname"];
$jemail=$_REQUEST["jemail"];
$jphoneno=$_REQUEST["jphoneno"];
$jpassword=$_REQUEST["jpassword"];

$res=$con->query("select * from `tb_jlogin` where `jemail`='$jemail'");
$count=$res->num_rows;
if($count>0)

{
    echo"<script>alert('Already Existing Email');window.location.href='register.php';</script>";
}

else
{ 
$res = $con->query("insert into `tb_jlogin` (`jname`,`jemail`,`jphoneno`,`jpassword`)
values('$jname','$jemail','$jphoneno','$jpassword')");
$count=mysqli_affected_rows($con);
header("location:login.php");
}
?>
