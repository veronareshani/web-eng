<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hyrja</title>
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


        <!--Fillimi header-->
        <div class="container">
            <div class="solid">
                <p class="tekstiAU"> Hyni këtu </p>
             </div>
        </div>  
        <!--Mbarimi  i header-->
</header>
    <div class="header">
        <h2>HYRJA</h2>
    </div>

 <form method="post" action="login.php">
     <!-- qetu shfaqen erroret-->
     <?php include('errors.php'); ?> 
    <div class="input-group">
        <label>Emri i përdoruesit:</label>
        <input type="text" name="username">
    </div> 
    <div class="input-group">
        <label>Fjalëkalimi:</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" name="login-btn" class="btn"> Hyni </button>
    </div>
    <p> Ende nuk jeni anëtar?
        <a href="register.php"> Regjistrohu</a>
    </p>


</form>
<footer> <p class="tekstifooter"> © 2020 Dhjetor </p></footer>
</body>
</html>