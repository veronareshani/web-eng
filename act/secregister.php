<?php

    if(isset($_POST["submit"])){
        echo"Gjithqka ne rregull";
    }
    else{
        header("Location: ../PHP/login.php");
    }
?>