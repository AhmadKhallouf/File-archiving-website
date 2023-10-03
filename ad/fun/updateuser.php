<?php
include('../../connect.php');
$status = $_GET['status'];
$wid=$_GET['wid'];
$sql = "UPDATE wuser SET status='$status' WHERE wid='$wid'";
$result = $conn->query($sql);
header('location:http://localhost/workfile/ad/shuser.php');
?>