<?php
require("connection.php");

$id = $_REQUEST["del"];
$res = $con->query("DELETE FROM `tb_comments` WHERE comment_id='$id'");
$count = mysqli_affected_rows($con);

if ($count > 0) {
    echo "<script>
            alert('Reader deleted successfully!');
            window.location.href='comments.php';
          </script>";
} else {
    echo "<script>
            alert('Failed to delete reader!');
            window.location.href='comments.php';
          </script>";
}
?>
