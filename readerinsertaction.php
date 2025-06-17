<?php
require("connection.php"); 
$jname=$_REQUEST["rname"];
$jemail=$_REQUEST["remail"];
$jphoneno=$_REQUEST["rphoneno"];
$jpassword=$_REQUEST["rpassword"];

$res=$con->query("select * from `tb_rlogin` where `remail`='$jemail'");
$count=$res->num_rows;
if($count>0)

{
    echo"<script>alert('Already Existing Email');window.location.href='register.php';</script>";
}

else
{ 
$res = $con->query("insert into `tb_rlogin` (`rname`,`remail`,`rphoneno`,`rpassword`)
values('$jname','$jemail','$jphoneno','$jpassword')");
$count=mysqli_affected_rows($con);
header("location:readerlogin.php");
}
?>
