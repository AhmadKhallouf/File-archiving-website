<?php
include('../connect.php');
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

$sql = "SELECT * FROM wuser WHERE wusername='$n1' AND wpassword='$n2' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $count = $result->num_rows;
}
if  ($count > 0){
    session_start();
    $_SESSION['usernameworkfile'] = $n1;
     header('location:http://localhost/workfile/index.php');
}
else{
    header('location:http://localhost/workfile/login.php');
}
?>