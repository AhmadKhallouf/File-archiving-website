<?php
include('../../connect.php');
$wto=$_POST['wto'];
$wid=$_POST['wid'];
$wtype = $_POST['wtype'];
session_start();
$wuser = $_SESSION['usernameworkfile'];
$wtime = date('y-m-d');
$wtitle = $_POST['wtitle'];
$wsubject = $_POST['wsubject'];
$wattachment = $_FILES['wattachment']['name'];
if($wattachment== null){
    $wattachment=$_POST['wold'];
} else{
    unlink("../file/".$_POST['wold']);
    $wattachmenttmb = $_FILES['wattachment']['tmp_name'];
$upload_file = '../file/';
$file_upload = $upload_file.$wattachment;
move_uploaded_file($wattachmenttmb , $file_upload);
}


$sql = "UPDATE wfile SET 
wto='$wto',
wtype='$wtype',
wuser='$wuser',
wtime='$wtime',
wtitle='$wtitle',
wsubject='$wsubject',
wattachment='$wattachment'
WHERE wid='$wid' ";
$result = $conn->query($sql);
header('location:http://localhost/workfile/ad/search.php');
?>