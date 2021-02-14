<?php
session_start();
    $username = "";
    $email = "";
    $errors = array();


    //pjesa ku e kam lidhe me dataabaze
    $db = mysqli_connect('localhost', 'root','', 'registration');

    //nese butoni klikohet
    if (isset($_POST['register'])) {
       $username = $_POST['username'];
       $email = $_POST['email'];
       $password_1 = $_POST['password_1'];
       $password_2 = $_POST['password_2'];

    //ne rast qe fushat mbushen mire
        if(empty($username)) {
            array_push($errors,"Kërkohet përdoruesi");  // qekjo o kur bon error
        }
        if(empty($email)) {
            array_push($errors,"Kërkohet e-mail");  // qekjo o kur bon error
        }
        if(empty($password_1)) {
            array_push($errors,"Kërkohet fjalëkalimi");  // qekjo o kur bon error
        }

        if ($password_1 != $password_2) {
            array_push($errors, "Të dy fjalëkalimet nuk përputhen");
        }

        //ne rast qe nuk ka errore, atehere perdoruesi ruhet ne databaze
        if(count($errors) == 0){
            $password = md5($password_1); // e enkripton fjalkalimin para se me hy ndatabaze
            $sql = "INSERT INTO users (username, email, password)
                            VALUES ('$username', '$email', '$password')"; 
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Tani jeni identifikuar";
            header('location: home.php'); //te kthen ne faqen kryesore
        }
    }



//perdoruesi qe eshte i regjistruar kur i mbushe te dhenat
    if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

        if (empty($username)) {
            array_push($errors,"Kërkohet përdoruesi");
        }
        if (empty($password)) {
            array_push($errors,"Kërkohet fjalëkalimi");
        }
        if (count($errors) == 0){
        $password = md5($password); // e enkripton pasvordin tu e kqyr te meparshmin ne dataabaze
        $query = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1){
            //log user in
            }
            else{
                array_push($errors, "Kombinim i gabuar i përdoruesit ose fjalëkalimit, ju lutem kontrolloni përsëri");
                // header('location: home.php'); //te kthen ne home page
            }
        }
     }
   //logout
   if(isset($_GET['logout'])){
       session_destroy();
       unset($_SESSION['username']);
       header('location: register.php');
   }




?>