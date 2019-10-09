<?php
include('../inculdes/connect.php');

$productid= mysqli_real_escape_string($con, $_GET['id']);
echo $productid;
//$password= mysqli_real_escape_string($con, $_POST['password']);

?>