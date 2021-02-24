<?php     
    include "../act/db.php";
    session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta content="text/html; charset=utf-8">
        <title>Rreth Nesh</title>
        <link rel="stylesheet" href="../CSS/about.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header><!--Beginning of header div-->
            <div class="logoofWeb"> <!--Beginning of logo div-->
               <a href="#"> <img class="logo" src="../images/doglogo1.png" alt="Logo"> </a>
            </div> <!--End of logo div-->
            <?php include '../inc/menu.php'?><!--End of navbar-->
      <!--Beginning of header div-->
		</header>
        <main>
            <div class="container">
                <div class="solid">
                    <p class="tekstiAU"> About us </p>
                 </div>
            </div>
      </div>
    <div>
        <div class="Row2" id="testt"> 
            <div class="Fotot">
                <img src="../images/vera.jpg" alt="ID"  height="250px;" width="250px;">
                <h3 class="ID">192048291</h3>
                <h6 class="emrimbiemri">Verona R. Reshani</h6>
            </div>
            <div class="Fotot">
                <img src="../images/blend.jpg" alt="ID" height="250px;" width="250px;">
                <h3 class="ID">192048804</h3>
                <h6 class="emrimbiemri">Blend Sh. Buzuku</h6>
            </div>
      </div>

      <div class="socialmedia"> 
      <div class="contact ">
            
        <h2>Kontakti </h2>
        <p>+383 44 000 000</p>
        <p>info@company.com</p>
        <p>Rr. Prishtine, Kosova.</p>
    </div>
    <div class="comp ">
        <img src="../images/doglogo1.png" alt="">
       </div> 
       <div class="Social">
               <h2>Social Media</h2>
               <p><a href="https://www.facebook.com/">Facebook</a></p>
               <p><a href="https://www.Instagram.com/">Instagram</a></p>
               <p><a href="https://www.Twitter.com/">Twitter</a></p>
           </div>
        </div>
        </main>

        <?php include '../inc/footer.php' ?>
    
    </body>
</html>