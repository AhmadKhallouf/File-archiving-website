<?php
include('../connect.php');
$wname = $_GET['wname'];
$wusername = $_GET['wusername'];
$sql = "SELECT * FROM wuser WHERE wusername='$wusername' ";

$result = $conn->query($sql);
global $count;
while($row = $result->fetch_assoc()){
    $count = $result->num_rows;
}
if($count > 0){
    header('location:http://localhost/workfile/adduser.php?q1=1');
    exit();
} 
$wdate = $_GET['wdate'];
$wpassword = $_GET['wpassword'];
$wpassword2 = $_GET['wpassword2'];
if($wpassword !== $wpassword2){
    header('location:http://localhost/workfile/adduser.php?q1=2');
    exit();
} 
$wtele = $_GET['wtele'];
$wsex = $_GET['wsex'];
$wcountry = $_GET['wcountry'];
$sql = "INSERT INTO wuser (wname,wusername ,wdate ,wpassword ,wtele ,wsex ,wcountry ,status )
VALUES ('$wname','$wusername' ,'$wdate' ,'$wpassword' ,'$wtele','$wsex' ,'$wcountry','user')";
$result = $conn->query($sql);
session_start();
$_SESSION['usernameworkfile'] = $wusername;
header('location:http://localhost/workfile/index.php')
?>