<?php     
    include "../act/db.php";
    session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta content="charset=utf-8">
        <title> Sugjerimet </title>
        <link rel="stylesheet" href="../CSS/contact.css">
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
    <?php include "../act/confun.php";?>
      <div class="row">
        <div class="Container" id="form_container">
            <h2 class="tekstikontaktM">Na Sugjeroni</h2>
            <p class="tekstikontaktV">
               Cdo sugjerim i juaji na jep nje ndihme rreth suksesit. Ju lutem na shkruani nje sugjerim.
            </p>
            <form role="form" method="post" id="reused_form">
    
                <div class="row">
                    <div class="col-sm-6 form-group">
                    <div class="emri5"><label for="name" class="dizajnipara">
                            Emri  :</label>
                          </div> 
                        <input type="text" class="form-control" id="name" name="firstName">
                    </div>
                    <div class="emri5"><label for="name" class="dizajnipara">
                             Mbiemri :</label>
                          </div> 
                        <input type="text" class="form-control" id="name" name="lastName">
                    </div>
                    
                    <div class="col-sm-6 form-group">
                      <div class="emri5"> <label for="email" class="dizajnipara">
                            E-maili juaj:</label>
                      </div> <input type="text" class="form-control email-validation" id="email" name="username" >
                    </div>
                  </div>
                
                <div class="row">
                  <div class="col-sm-12 form-group">
                    <div class="emri5"> <label for="message" class="dizajnipara">
                          Mesazhi juaj:</label>
                     </div> <textarea class="form-control1" type="submit" id="subject" name="subject" maxlength="6000" rows="7" style="width:400px; height:105px;" placeholder="Ju lutem shkruani sygjerimet tuaja"></textarea>
                     <div id="error-message"></div>
                    </div>
              </div>
    
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button type="submit" class="btn btn-lg btn-default pull-right" id="btnSub" name="submit">Dergo </button>
                    </div>
                </div>


    
            </form>
            <div id="success_message" style="width:100%; height:100%; display:none; ">
                <h3>Faleminderit per sugjerimin. Mesazhi juaj u dergua me sukses</h3>
            </div>
            <div id="error_message"
                    style="width:100%; height:100%; display:none; ">
                        <h3>Error</h3>
                        Na vjen keq nje gabim ndodhi ne mesazhin tuaj. Ju lutem kontrolloni perseri
    
            </div>
        </div>
    </div>

    </main>

    <?php
include '../inc/footer.php' ?>
    
    <script src="../JS/contact.js">
      </script>
    </body>
</html>