<?php
  session_start();     
  include "../act/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hyrja</title>
    <script src="../JS/login.js"></script>
</head>
<body>
<?php include "../act/menuchange.php";?>
<div class="container">
    <div class="link-container">
      <a id="firstA" href="#" onclick="changeForm(0)">Login</a>
      <a href="#" onclick="changeForm(1)">Register</a>
    </div>
    <?php include "../act/loginfun.php";?>
    <form id="mainForm" method="POST" onsubmit="return validate()">
      <div class="login forms form-style">
        <label for="">Username:</label>
        <input type="text" id='username' class="input login-element" name="username" placeholder="username..." required/>
        <label for="">Password:</label>
        <input type="password" class="input login-element" name="password" placeholder="password..." required/>
        <button id="submit" type="submit" class="input submit" name = "login_btn" value="Log in" onclick="validate(0)">KYQU</button>
      </div>
    </form>
    <?php include "../act/signupfunction.php";?>
    <form  method="POST">
      <div class="register forms hidden"id="formasec">
        <label for="">Name:</label>
        <input type="text" name="emri" class="input register-element" placeholder="Name..." required/>
        <label for="">Username:</label>
        <input type="text" name="username" class="input register-element" placeholder="username..." required/>
        <label for="">Password:</label>
        <input type="password" name="password" class="input register-element" placeholder="password..." required/>
        <button id="submit" type="submit" name='regjistoru1' class="input submit" value="regjistrohu" onclick="validate(1)">REGJISTROHU</button> 
      </div>
    </form>
  </div>
<?php include '../inc/footer.php' ?>
</body>
</html>