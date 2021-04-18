<?php     
    include "../act/db.php";
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8">
        <title>Bllogu </title>
        <link rel="stylesheet" href="../CSS/blog.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../CSS/all.css">
    
    </head>
    <body>
          
        <header>
            <div class="logoofWeb"> 
               <a href="#"> <img class="logo" src="../images/doglogo1.png" alt="Logo"> </a>
            </div>
            <?php include '../inc/menu.php'?> 
      
		</header>
            <main>

                <div class="container">
                    <div class="solid">
                        <p class="tekstiAU"> Lexoni per bllogun tone </p>
                     </div>
                </div>  

            
                <section>
                  <div class="contanier2">
                      <div class="site-content">
                          <div class="posts">
                            <div class="post-content">
                                <div class="post-image">
                                    <div>
                                        <img src="../blogimages/dog1.jpg" class="img" alt="dog pic">  
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                        <span><i class="fas fa-calendar text-gray"></i>&nbsp;&nbsp;30 Janar, 2020</span>
                                        <span>24 Comments</span>
                                    </div>
                                </div>
                                <div class="post-title">
                                    <a href="#">Pse duhet te  adoptosh nje qen?</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam voluptatibus nobis fugit vero, tempora, corrupti voluptatem aspernatur sed, minima at consequatur quod aliquid? Doloremque animi laudantium numquam voluptate quaerat repudiandae reiciendis quo, aliquam nam, maxime iste commodi in, iure porro.
                                      </p>
                                      <button class="btn post-btn">Lexo me shume &nbsp; <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                              <hr>
                              <div class="post-content">
                                <div class="post-image">
                                    <div>
                                        <img src="../blogimages/dog2.jpg" class="img" alt="dog pic">  
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                        <span><i class="fas fa-calendar text-gray"></i>&nbsp;&nbsp;30 Janar, 2020</span>
                                        <span>24 Comments</span>
                                    </div>
                                </div>
                                <div class="post-title">
                                    <a href="#">Pse duhet te  adoptosh nje qen?</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam voluptatibus nobis fugit vero, tempora, corrupti voluptatem aspernatur sed, minima at consequatur quod aliquid? Doloremque animi laudantium numquam voluptate quaerat repudiandae reiciendis quo, aliquam nam, maxime iste commodi in, iure porro.
                                      </p>
                                      <button class="btn post-btn">Lexo me shume &nbsp; <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                            <hr>
                            <div class="post-content">
                                <div class="post-image">
                                    <div>
                                        <img src="../blogimages/dog3.jpg" class="img" alt="dog pic">  
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                        <span><i class="fas fa-calendar text-gray"></i>&nbsp;&nbsp;30 Janar, 2020</span>
                                        <span>24 Comments</span>
                                    </div>
                                </div>
                                <div class="post-title">
                                    <a href="#">Pse duhet te  adoptosh nje qen?</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam voluptatibus nobis fugit vero, tempora, corrupti voluptatem aspernatur sed, minima at consequatur quod aliquid? Doloremque animi laudantium numquam voluptate quaerat repudiandae reiciendis quo, aliquam nam, maxime iste commodi in, iure porro.
                                      </p>
                                      <button class="btn post-btn">Lexo me shume &nbsp; <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                            <hr> 
                                <div class="post-content">
                                <div class="post-image">
                                    <div>
                                        <img src="../blogimages/dog4.jpg" class="img" alt="dog pic">  
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                        <span><i class="fas fa-calendar text-gray"></i>&nbsp;&nbsp;30 Janar, 2020</span>
                                        <span>24 Comments</span>
                                    </div>
                                </div>
                                <div class="post-title">
                                    <a href="#">Pse duhet te  adoptosh nje qen?</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam voluptatibus nobis fugit vero, tempora, corrupti voluptatem aspernatur sed, minima at consequatur quod aliquid? Doloremque animi laudantium numquam voluptate quaerat repudiandae reiciendis quo, aliquam nam, maxime iste commodi in, iure porro.
                                      </p>
                                      <button class="btn post-btn">Lexo me shume &nbsp; <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                            <div class="pagination flex-row">
                                <a href="#"><i class="fas fa-chevron-left"></i> </a>
                                <a href="#" class="pages" >1</a>
                                <a href="#" class="pages">2</a>
                                <a href="#" class="pages" >3</a>
                                <a href="#"><i class="fas fa-chevron-right"></i> </a>
                            </div>
                          </div>
                          <aside class="sidebar">
                            <div class="category">
                                <h2>Category</h2>
                                <ul class="category-list"> 
                                  <li class="list-items">
                                      <a href="#">Lorem ipsum</a>
                                      <span>05</span>
                                  </li> 
                                  <li class="list-items">
                                      <a href="#">Lorem ipsum</a>
                                      <span>09</span>
                                  </li> 
                                  <li class="list-items">
                                      <a href="#">Lorem ipsum</a>
                                      <span>11</span>
                                  </li> 
                                  <li class="list-items">
                                      <a href="#">Lorem ipsum</a>
                                      <span>01</span>
                                  </li> 
                                  <li class="list-items">
                                      <a href="#">Lorem ipsum</a>
                                      <span>02</span>
                                  </li> 
                                </ul>
                            </div>
                            <div>
                                <div class="popular-post">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div>
                                                <img src="../blogimages/dog5.jpg" class="img" alt="dog pic">  
                                            </div>
                                            <div class="post-info flex-row">
                                                <span><i class="fas fa-calendar text-gray"></i>&nbsp;&nbsp;30 Janar, 2020</span>
                                                <span>24 Comments</span>
                                            </div>
                                        </div>
                                        <div class="post-title">
                                            <a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, esse!</a>
                                             
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div>
                                                <img src="../blogimages/dog6.jpg" class="img" alt="dog pic">  
                                            </div>
                                            <div class="post-info flex-row">
                                                <span><i class="fas fa-calendar text-gray"></i>&nbsp;&nbsp;30 Janar, 2020</span>
                                                <span>24 Comments</span>
                                            </div>
                                        </div>
                                        <div class="post-title">
                                            <a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, esse!</a>
                                             
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div>
                                                <img src="../blogimages/dog7.jpg" class="img" alt="dog pic">  
                                            </div>
                                            <div class="post-info flex-row">
                                                <span><i class="fas fa-calendar text-gray"></i>&nbsp;&nbsp;30 Janar, 2020</span>
                                                <span>24 Comments</span>
                                            </div>
                                        </div>
                                        <div class="post-title">
                                            <a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, esse!</a>
                                             
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div>
                                                <img src="../blogimages/dog8.jpg" class="img" alt="dog pic">  
                                            </div>
                                            <div class="post-info flex-row">
                                                <span><i class="fas fa-calendar text-gray"></i>&nbsp;&nbsp;30 Janar, 2020</span>
                                                <span>24 Comments</span>
                                            </div>
                                        </div>
                                        <div class="post-title">
                                            <a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, esse!</a>
                                             
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div>
                                                <img src="../blogimages/dog89.jpg" class="img" alt="dog pic">  
                                            </div>
                                            <div class="post-info flex-row">
                                                <span><i class="fas fa-calendar text-gray"></i>&nbsp;&nbsp;30 Janar, 2020</span>
                                                <span>24 Comments</span>
                                            </div>
                                        </div>
                                        <div class="post-title">
                                            <a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, esse!</a>
                                             
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div>
                                                <img src="../blogimages/dog10.jpg" class="img" alt="dog pic">  
                                            </div>
                                            <div class="post-info flex-row">
                                                <span><i class="fas fa-calendar text-gray"></i>&nbsp;&nbsp;30 Janar, 2020</span>
                                                <span>24 Comments</span>
                                            </div>
                                        </div>
                                        <div class="post-title">
                                            <a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, esse!</a>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="newsletter">
                                <h2>  Newsletter</h2>
                            <div class="form-element">
                                <input type="text" class="input-element" placeholder="Email">
                            <button class="btn form-btn">Subscribe</button>
                            </div>
                            </div>
                          </aside> 
                      </div>                         
                </section>



               


            </main>