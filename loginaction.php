<?php
session_start();
require ("connection.php");
$U=$_REQUEST["email"];
$Pass=$_REQUEST["password"];
$res=$con->query("select*from `tb_jlogin` where `jemail`='$U' AND `jpassword`='$Pass'");
$count=$res->num_rows;
if($count>0)
{
    $row=$res->fetch_assoc();
 $id=$row["id"]; 
$_SESSION["aaaa"]=$id;
header("location:home.php");
}
else
{
    echo "<script>alert('invalid emailid or password!');window.location='login.php';</script>";
}
?>