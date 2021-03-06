
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
    <script src="<?php echo JS?>menu.js"></script>
            <!--begin header-->
            <header>
                <div id="logo">Quick<span id="logo-s">Cook</span></div>
                <ul class="nav">
                    <li ><a href="<?php echo URLROOT ?>">Home</a></li>
                    <li ><a href="<?php echo URLROOT ?>/recipes">Recipes</a></li>
                    <li class="active"><a href="<?php echo URLROOT ?>/Types">Cuisine Types</a></li>  
                    <li ><a href="<?php echo URLROOT ?>/categories">Categories</a></li>  
                </ul>
    
                <?php if(empty($_SESSION['id'])): ?>
                <a href="<?php echo URLROOT ?>/users"><input  type="submit" name="signin" value="Sign in" class="Btn"></a>
                <?php else: ?>
                    <div class="drop-trigger"><img class="icon" src="<?php echo IMAGE ?>Asset 1.svg" alt="">
            <div class="drop-down">
            
                <ul>
                    <li><a href="<?php echo URLROOT ?>/recipes/getByUser">Profile</a></li>
                    <li><a href="<?php echo URLROOT ?>/recipes/Wishlist">Wishlist</a></li>
                    <li><a href="<?php echo URLROOT ?>/recipes/addRecipe">Add Recipe</a></li>
                    <li><a href="<?php echo URLROOT ?>/users/logout">logout</a></li>
                </ul>
            </div>
            </div>                
            <?php endif;?>    
            <svg class="menu"  viewBox="0 0 100 80" width="40" height="40" fill="#f55e27c4" onclick="toggle()">
        <rect width="100" height="20"></rect>
        <rect y="30" width="100" height="20"></rect>
        <rect y="60" width="100" height="20"></rect>
        </svg>  
            <nav class="hum" id="menu-display" style="display:none">
        <ul>
            <li ><a href="<?php echo URLROOT ?>">Home</a></li>
            <li ><a href="<?php echo URLROOT ?>/recipes">Recipes</a></li>
            <li ><a href="<?php echo URLROOT ?>/Types">Cuisine Types</a></li>  
            <li ><a href="<?php echo URLROOT ?>/categories">Categories</a></li>
            <?php if(!empty($_SESSION['id'])): ?>
            <li><a href="<?php echo URLROOT ?>/recipes/getByUser">Profile</a></li>
            <li><a href="<?php echo URLROOT ?>/recipes/favoris">Wishlist</a></li>
            <li><a href="<?php echo URLROOT ?>/recipes/addRecipe">Add Recipe</a></li>
            <li><a href="<?php echo URLROOT ?>/users/logout">logout</a></li>   
            <?php else: ?>
            <li><a href="<?php echo URLROOT ?>/users">login</a></li>  
            <?php endif;?>   
        </ul>
        </nav>
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
                                <a href="<?php echo URLROOT ?>/types/getByType/<?php echo $row['id'] ?>"><img class="img" src="<?PHP echo IMAGE.$row['img'] ?>" alt=""></a>
                                
                                <p class="title"><?= $row['name'] ?></p>
                               
                            </div>
                        </div>
                        </div>
                        </div>
                        <?php }?>
                   
        
    
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
                            <li>Types</li>
                            
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