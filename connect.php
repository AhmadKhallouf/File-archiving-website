<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'workfile';
$conn = new mysqli($serverName , $username, $password, $dbname );
$conn->set_charset('utf8');

?>