<?php
include 'db.php';

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])){
    $firstName = test_input($_POST['fisrtName']);
    $lastName = test_input($_POST['lastName']);
    $username = test_input($_POST['username']);
    $message = test_input($_POST['topic']);

    $sql = "INSERT INTO mesazhet ('fistName','lastName','username','message')
    VALUES ('$fistName','$lastName','$username','$message')";

    if($conn->query($sql)){
        echo"<scipt>alert('Done!');</script>";
    }
}
$conn->close();
?>