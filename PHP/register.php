<?php include('server.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Regjistrohu</title>
</head>
<body>
 <header><!--Beginning of header div-->
        <div class="logoofWeb"> <!--Beginning of logo div-->
           <a href="#"> <img class="logo" src="../images/doglogo1.png" alt="Logo"> </a>
        </div> <!--End of logo div-->
        
          <nav class="navbar" id="navbarr"> <!--Beginning of nav-->
              <ul>
              <li><a href="../HTML/index.html">SD</a></li>
                    <li><a href="../HTML/about.html">Rreth Nesh</a></li>
                    <li><a href="../HTML/contact.html">Sugjerimet</a></li>
                    <li><a href="../HTML/ourdogs.html">Kafshet tona</a></li>
                    <li><a href="../HTML/blog.html">Bllogu</a></li>
                     <li><a href="../PHP/register.php">Regjistrohu</a></li>
              </ul>
            </nav><!--End of navbar-->
  <!--Beginning of header div-->
</header>
        <!--Fillimi header-->
        <div class="container">
            <div class="solid">
                <p class="tekstiAU"> Regjistrohuni këtu </p>
             </div>
        </div>  
        
        <div class="history">
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt<br> magnam nulla rerum, fuga esse, a modi fugit in quam temporibus molestias et dolore, iste consequatur<br> facilis aliquid quae quod cum.</p>
        </div>
        <!--Mbarimi  i header-->

    <div class="header">
        <h2>REGJISTROHU</h2>
    </div>

 <form method="post" action="register.php"> 
 <!-- qetu shfaqen erroret-->
 <?php include('errors.php'); ?>
    <div class="input-group">
        <label> Emri i përdoruesit: </label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div> 
    <div class="input-group">
         <label>E-mail: </label>
        <input type="text" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Fjalëkalimi: </label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Konfirmo fjalëkalimin: </label>
        <input type="password" name="password_2">
    </div>  
    <div class="input-group">
        <button type="submit" name="register" class="btn"> Regjistrohu </button>
    </div>
    <p> Tashmë jeni anëtar?
        <a href="login.php"> Hyni</a>
    </p>


</form>
<footer> <p class="tekstifooter"> © 2020 Dhjetor </p></footer>
</body>
</html>