<?php
include('../../connect.php');
$wtype = $_POST['wtype'];
session_start();
$wuser = $_SESSION['usernameworkfile'];
$wtime = date('y-m-d');
$wtitle = $_POST['wtitle'];
$wsubject = $_POST['wsubject'];
$wto = $_POST['wto'];
$wattachment = $_FILES['wattachment']['name'];
$wattachmenttmb = $_FILES['wattachment']['tmp_name'];
$upload_file = '../file/';
$file_upload = $upload_file.$wattachment;
move_uploaded_file($wattachmenttmb , $file_upload);
$sql = "INSERT INTO wfile (wtype,wuser ,wtime ,wtitle ,wsubject ,wattachment ,wto )
VALUES ('$wtype','$wuser' ,'$wtime' ,'$wtitle' ,'$wsubject','$wattachment', '$wto' )";
$result = $conn->query($sql);
header('location:http://localhost/workfile/ad/fileadd.php')
?>