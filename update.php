<?php
require("connection.php");

$title = $_REQUEST["title"];
$type=$_REQUEST["storytype"];

$story=$_REQUEST["story"];

$image=$_FILES["image"]["name"];
$id=$_REQUEST["id"];

if(empty($_FILES["image"]["name"]))
{
$res = $con->query("update `tb_stories` set Title='$title',Storytype='$type',Story='$story' where id='$id'");
$count=mysqli_affected_rows($con);	
}
else
{
	$file=$_FILES["image"]["name"];
	$res = $con->query("update `tb_stories` set Title='$title',Storytype='$type',Story='$story',Image='$image' where id='$id'");
	move_uploaded_file($_FILES["image"]["tmp_name"],"storypics/".$image);

}

header("location:about.php");

?>