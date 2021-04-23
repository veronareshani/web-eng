<?php
include "db.php";

$signupError= "";

function test_input($data){
    $data=trim($data);
    $data= stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if(isset($_POST['regjistoru1'])){
    $username = test_input($_POST["emri"]);
    $user_email = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    $sql = "SELECT * FROM Klientat Where Username='$user_email'";
    $result2 = $conn->query($sql);

    if(mysqli_num_rows($result2)>0){
        $signupError = "Ky perdorues Ekziston!";
    }else{
        $sql2 = "INSERT INTO Klientat (`Emri`,`Username`,`Passwordi`)
         VALUES ('$username','$user_email','$password')";

        if($conn->query($sql2)==TRUE){
            $_SESSION['emri']= $username;
            $_SESSION['username']= $user_email;
            $_SESSION['password']= $password;

            header("Location: index.php ");
        }else{
            header("Location: contact.php");
        }

    }
    $conn->close();

}


?>