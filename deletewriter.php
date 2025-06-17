<?php
require("connection.php");
$id=$_REQUEST["del"];

$res=$con->query("delete from `tb_jlogin` where id='$id'");
$count=mysqli_affected_rows($con);

if ($count > 0) {
    echo "<script>
            alert('writer deleted successfully!');
            window.location.href='writers.php';
          </script>";
} else {
    echo "<script>
            alert('Failed to delete the writer!');
            window.location.href='writers.php';
          </script>";
}

?>