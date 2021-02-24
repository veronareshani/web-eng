<?php
include "db.php";
require 'verify.php';
$username = "";
$password = "";
if (isset($_POST['login_btn'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    if (variablesNotDefinedWell($username, $password)) {
        header('Location: ../PHP/login.php');
    } else if (usernameAndPasswordCorrect($username, $password)) {
        header('Location: ../PHP/index.php');
    } else {
        header('Location: ../PHP/login.php');
    }
}

function variablesNotDefinedWell($username, $password)
{
    if (empty($username) || empty($password)) {
        return true;
    }
}

function usernameAndPasswordCorrect($username, $password)
{
    global $users;
    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            $_SESSION['role'] = $user['role'];
            $_SESSION['username'] = $user['password'];
            $_SESSION['loginDate'] = date("Y-m-d");
            $_SESSION['loginTime'] = time();
            return true;
        }
    }
}
?>