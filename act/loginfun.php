<?php
    include 'db.php';
    $loginError="";
    if(isset($_POST['login_btn'])){
        $username=$_POST["username"];
        $password=$_POST["password"];

        $sql="SELECT * FROM users WHERE Username ='$username' and Passwordi = '$password'";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result)>0){
            while($row= $result->fetch_assoc()){
                $_SESSION['id']=$row['id'];
                $_SESSION['username']=$row['Username'];
                $_SESSION['password']=$row['Passwordi'];
                $_SESSION['admin']=$row['admin'];
            }
            header("Location : index.php");
        }
        else{
            $loginError= "Gabim useri/passwordi!";
        }
    }
    $conn->close();

?>