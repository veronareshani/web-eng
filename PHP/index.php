<?php     
    include "../act/db.php";
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8">
        <title>Save Dogs</title>
        <link rel="stylesheet" href="../CSS/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <main>
      <div class="parent-container">
    <div class="bg-img">

        <header>
            <div class="logoofWeb">
               <a href="#"> <img class="logo" src="../images/doglogo1.png" alt="Logo"> </a>
            </div> 
            <?php include '../inc/menu.php'?>

		</header>
    
    <div class="tekstidhebutonatbrendafotos"> 
        <h1>Ndihmo kafshet ne nevoje </h1>
        <div class="butonat">  
            <a href="contact.php"><button class="info-btn">Dua te ndihmoj </button> </a>
            <a href="../PHP/register.php"> <button class="info-btn">Dua te jem pjese</button> </a>
        </div>   
    </div> 
    </div>
   
    <div class="Row2" id="testt"> 
        <div class="Column2">
            <img src="../images/phone.png" alt="puna" height="120px;" width="120px;">
        </div>
        <div class="Column2"><img src="../images/heart.png" alt="puna" height="120px;" width="120px;">
        </div>
      
        <div class="Column2"> <img src="../images/clock.png" alt="puna" height="120px;" width="120px;">
        
        </div>
         </div>


     <div class="Row3" id="testt"> 
        <div class="Column3">
            <h5  class="card-header"> Numri kontaktues </h5>
            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="Column">
            <h5 class="card-header">Deshironi te ofroni ndihme? </h5>
            <p class="card-text"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
         </div>
        <div class="Column3"> 
            <h5 class="card-header"> Orari i punes</h5>
            <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur </p>
      
        </div>
         </div> 
         
        
         </div>
        </div>  

        <div class="slidercontainer">  
            <div class="showSlide fade">  
                <img src="../images/SliderImages/dog1.jpg" />  
                <div class="content"></div>  
            </div>  
            <div class="showSlide fade">  
                <img src="../images/SliderImages/dog2.jpg" />  
                <div class="content">Slide2 heading</div>  
            </div>  
      
            <div class="showSlide fade">  
                <img src="../images/SliderImages/dog3.jpg" />  
                <div class="content"></div>  
            </div>  
            <div class="showSlide fade">  
                <img src="../images/SliderImages/dog4.jpg" />  
                <div class="content"></div>  
            </div>  
            <a class="left" onclick="nextSlide(-1)"><</a>  
            <a class="right" onclick="nextSlide(1)">></a>  
        </div>  
      
        <script src="../JS/script.js"></script>  
        

        </main>

    <?php
    include '../inc/footer.php' ?>
</body>
</html>