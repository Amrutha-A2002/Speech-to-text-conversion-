<?php
require("connection.php");

$id = $_REQUEST["del"];
$res = $con->query("SELECT * FROM `tb_stories` WHERE id='$id'"); 
$count = $res->num_rows;

if ($count > 0) {
    $row = $res->fetch_assoc();
    $upload = $row["image"];
    
    if (!empty($upload) && file_exists("coursepics/$upload")) {
        unlink("coursepics/$upload"); // Delete the image file
    }

    $res = $con->query("DELETE FROM `tb_stories` WHERE id='$id'");
    $count = mysqli_affected_rows($con);

    if ($count > 0) {
        echo "<script>
                alert('Story deleted successfully!');
                window.location.href='stories.php';
              </script>";
    } else {
        echo "<script>
                alert('Failed to delete the story!');
                window.location.href='stories.php';
              </script>";
    }
} else {
    echo "<script>
            alert('Story not found!');
            window.location.href='stories.php';
          </script>";
}
?>
