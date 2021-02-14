<?php
include "db.php";
require 'verify.php';
$username = "";
$password = "";
if(isset($_POST['login-btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(variablesNotDefinedWell($username,$password)){
        header('Location: ../php/login.php');
    }else if(usernameAndpPasswordCorrect($usernem,$password)){
        header('Location: ../php/index.php');
    }else{
        header('Locaiotn: ../php/login.php');
    }
}

function variablesNotDefinedWell($username,$password){
    if(empty($username)|| empty($password)){
        return true;
    }
}
function usernameAndpPasswordCorrect($username,$password){
    global $users;
    foreach($users as $user){
        if($user['username']==$username && $user['password']==$password){
            $_SESSION['role']=$user['role'];
            $_SESSION['username']=$user['password']
            $_SESSION['loginDate']= date('D-M-Y');
            $_SESSION['loginTime']=time();
            return true;
        }
    }
}
