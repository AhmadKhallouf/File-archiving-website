<?php
include('../../connect.php');
$n1=$_GET['n1'];
$sql = "DELETE FROM wuser WHERE wid='$n1'";
$result = $conn->query($sql);
header('location:http://localhost/workfile/ad/shuser.php');
?>