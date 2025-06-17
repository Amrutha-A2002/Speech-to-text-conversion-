<?php
session_start();
require("connection.php");
$wid=$_SESSION["aaaa"];
$title = $_POST["title"];
$type=$_POST["storytype"];


$story=$_POST["tx"];

$image=$_FILES["image"]["name"];

$res = $con->query("insert into `tb_stories`(`Title`,`Storytype`,`Story`,`Image`,`w_id`) values('$title','$type','$story','$image','$wid')");
$count=mysqli_affected_rows($con);

move_uploaded_file($_FILES["image"]["tmp_name"],"storypics/".$image);
header("location:home.php");



?>