<?php
session_start();
require ("connection.php");
$U=$_REQUEST["email"];
$Pass=$_REQUEST["password"];
$res=$con->query("select * from `tb_rlogin` where `remail`='$U' AND `rpassword`='$Pass'");
$count=$res->num_rows;
if($count>0)
{
    $row=$res->fetch_assoc();
    $id=$row["Id"]; 
   $_SESSION["aa"]=$id;
  
header("location:readers.php");
}
else
{
    echo "<script>alert('invalid emailid or password!');window.location='readerlogin.php';</script>";
}
?>