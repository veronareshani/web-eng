<?php
$serverName="localhost";
$dbUser="root";
$dbPass="";
$dbName="databaza";

$conn =new mysqli($serverName,$dbUser,$dbPass,$dbName);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}


?>