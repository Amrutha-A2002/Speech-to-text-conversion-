<?php
require("connection.php");

$id = $_REQUEST["del"];
$res = $con->query("DELETE FROM `tb_rlogin` WHERE Id='$id'");
$count = mysqli_affected_rows($con);

if ($count > 0) {
    echo "<script>
            alert('Reader deleted successfully!');
            window.location.href='readers.php';
          </script>";
} else {
    echo "<script>
            alert('Failed to delete reader!');
            window.location.href='readers.php';
          </script>";
}
?>
