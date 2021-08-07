
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
        <script src="https://kit.fontawesome.com/0407d298dc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo CSS_PATH ?>/style.css">
        <link rel="stylesheet" href="<?php echo CSS_PATH ?>/recipes.css">
        <title>C A T E G O R I E S</title>
    </head>
    <body>
            <!--begin header-->
            <header>
                <a href="index.php"><img src="images/logo.png" alt="LOGO"></a>
                <ul>
                    <li ><a href="<?php echo URLROOT ?>">Home</a></li>
                    <li ><a href="<?php echo URLROOT ?>/recipes">Recipes</a></li>
                    <li class="active"><a href="<?php echo URLROOT ?>/categories">Categories</a></li>  
                </ul>
    
                <?php if(empty($_SESSION['id'])): ?>
                <a href="<?php echo URLROOT ?>/users"><input  type="submit" name="signin" value="Sign in" class="Btn"></a>
                <?php else: ?>
                <a href="login.html"><img class="icon" src="<?php echo IMAGE ?>Asset 1.svg" alt=""></a>
                <?php endif;?>    
          
            </header>
            
            <!--End header-->
    
            <!-- begin main -->
            <section class="container">
                <input type="text" placeholder="Search" class="search">
                <i class="fas fa-search"></i>
            </section>
    
            <section class="container">
                        <?php
                        
                        foreach ($data as $row){
                          
                        ?>
              
               <div class="row">
                        <div class="col">
                            <div class="item">
                                <a href="<?php echo URLROOT ?>/categories/getByType/<?php echo $row['id'] ?>"><img class="img" src="<?PHP echo IMAGE.$row['img'] ?>" alt=""></a>
                                
                                <p class="title"><?= $row['name'] ?></p>
                               
                            </div>
                        </div>
               
                        <?php }?>
                   
                        
                   
                        
                    
                        
                       
                        
                    
                        
      
                        
                      
                        
               
                        
                 
                     
                        
                <!-- </div>
                <div class="grid-container">
                   <div class="grid-item" >
                    <img  src="images/3.jpg" alt="">
                   </div>
                   <div class="grid-item">
                    <img  src="images/3.jpg" alt="">
                   </div>
                   <div class="grid-item">
                    <img  src="images/3.jpg" alt="">
                   </div>
                   <div class="grid-item">
                    <img  src="images/3.jpg" alt="">
                   </div>
                   <div class="grid-item">
                    <img  src="images/3.jpg" alt="">
                   </div>
                </div> -->
    
            </section>
    
            <footer>
    
    
                <div>
                    <div class="contact">
                        <h2>Quick<strong class="black"></strong>Cook</strong></h2>
                        <br>
                    </div>
                    <div>
                        <ul>
                            <li>Home</li>
                            <li>Recipes</li>
                            <li>Categories</li>
                            
                        </ul>
                    </div>
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-whatsapp"></i>
        
                    <div class="copyright">
                        <div class="container">
                            <p>Copyright 2021 All Right Reserved By Salma zwina</p>
                        </div>
                    </div>
        
                </div>
            </footer>
    </body>
    </html>