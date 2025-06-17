<?php
require("connection.php");
$id=$_REQUEST["delete"];
$res = $con->query("select * from `tb_stories` where id='$id'"); 
$count=$res->num_rows;
if($count>0)
	$row=$res->fetch_assoc();
$upload=$row["Image"];
unlink("storypics/$upload");
$res=$con->query("delete from `tb_stories` where id='$id'");
$count=mysqli_affected_rows($con);

if($count>0)
{
	header("location:about.php");
}
else
{
    header("location:about.php");
}
?>