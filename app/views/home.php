<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo CSS_PATH ?>/style.css">
    <title>H O M E</title>
</head>

<body>


    <!--begin header-->
    <header>
        <a href="index.php"><img src="images/logo.png" alt="LOGO"></a>
        <ul>
            <li class="active"><a href="<?php echo URLROOT ?>">Home</a></li>
            <li><a href="<?php echo URLROOT ?>/recipes">Recipes</a></li>
            <li><a href="<?php echo URLROOT ?>/categories">Categories</a></li>  
        </ul>
        <?php if(empty($_SESSION['id'])): ?>
        <a href="<?php echo URLROOT ?>/users"><input  type="submit" name="signin" value="Sign in" class="Btn"></a>
        <?php else: ?>
        <div class="drop-trigger"><img class="icon" src="<?php echo IMAGE ?>Asset 1.svg" alt="">
            <div class="drop-down">
                <ul>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">My Recipes</a></li>
                    <li><a href="#">logout</a></li>
                </ul>
            </div>
            </div>
        <?php endif;?>
  
    </header>
    
    <!--End header-->
    <!--begin main-->
    <main>
    
        <!-- begin slider -->
        <dic class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">

                <div class="slide first">
                    <img src="<?php echo IMAGE ?>1.jpg" alt=""> 
                </div>

                <div class="slide ">
                    <img src="<?php echo IMAGE ?>2.jpg" alt=""> 
                </div>

                <div class="slide ">
                    <img src="<?php echo IMAGE ?>home.jpg" alt=""> 
                </div>
<!-- auto navigation -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>

                </div>

                <div class="navigation-manuel">
                    <label for="radio1" class="manuel-btn"></label>
                    <label for="radio2" class="manuel-btn"></label>
                    <label for="radio3" class="manuel-btn"></label>
                </div>



            </div>
        </dic>

        <!-- End slider -->
            
        
        <!-- <div class="BGhome main">
            <img  class="mySlides w3-animate-fading " src="images/home.jpg" alt="">
            <img  class="mySlides w3-animate-fading" src="images/2.jpg" alt="">
            <img  class="mySlides w3-animate-fading" src="images/1.jpg" alt="">
        </div> -->
    </main>


    <section>

        <h1>Popular Categories</h1>
        <div class="adv-cont">
            <div class="adv">
                <img src="<?php echo IMAGE ?>icons/cake-slice.svg" alt="Icon">
                <h3>Lorem, ipsum.</h3>
                
            </div>
            <div class="adv">
                <img src="<?php echo IMAGE ?>icons/chicken-leg.svg" alt="Icon">
                <h3>Lorem, ipsum.</h3>
                
            </div>
            <div class="adv">
                <img src="<?php echo IMAGE ?>icons/drink.svg" alt="Icon">
                <h3>Lorem, ipsum.</h3>
                
            </div>
            <div class="adv">
                <img src="<?php echo IMAGE ?>icons/spaguetti.svg" alt="Icon">
                <h3>Lorem, ipsum.</h3> 
            </div>
            <div class="adv">
                <img src="<?php echo IMAGE ?>icons/salad.svg" alt="Icon">
                <h3>Lorem, ipsum.</h3> 
            </div>
        </div>
      
   

    </section>
    
    <section>
        <h1>Quick & Easy</h1>
        <div class="popular">
            <div class="slides">
                <img class="img" src="images/3.jpg" alt="">
                <img class="favoris" src="images/icons/heart.svg" alt="">
            </div>
            <div class="slides">
                <img class="img" src="images/4.jpg" alt="">
                <img class="favoris" src="images/icons/heart.svg" alt="">
            </div>
            <div class="slides">
                <img class="img" src="images/3.jpg" alt="">
                <img class="favoris" src="images/icons/heart.svg" alt="">
            </div>
            <div class="slides">
                <img class="img" src="images/4.jpg" alt="">
                <img  class="favoris" src="images/icons/heart.svg" alt="">
            </div>
            <div class="slides">
                <img class="img" src="images/3.jpg" alt="">
                <img class="favoris" src="images/icons/heart.svg" alt="">
            </div>
        </div>

    </section>


    <section>
        <h1>Juices</h1>
        <div class="popular">
            <div class="slides">
                <img class="img" src="images/juce1.jpg" alt="">
                <img class="favoris" src="images/icons/heart.svg" alt="">
            </div>
            <div class="slides">
                <img class="img" src="images/juce2.jpg" alt="">
                <img class="favoris" src="images/icons/heart.svg" alt="">
            </div>
            <div class="slides">
                <img class="img" src="images/juce3.jpg" alt="">
                <img class="favoris" src="images/icons/heart.svg" alt="">
            </div>
            <div class="slides">
                <img class="img" src="images/juce1.jpg" alt="">
                <img  class="favoris" src="images/icons/heart.svg" alt="">
            </div>
            <div class="slides">
                <img class="img" src="images/juce2.jpg" alt="">
                <img class="favoris" src="images/icons/heart.svg" alt="">
            </div>
        </div>

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
                    <p>Copyright 2021 All Right Reserved By Salma Zwina</p>
                </div>
            </div>

        </div>
    </footer>
    <script>
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("slide");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 6000);    
        }
        </script>
        <script src="https://kit.fontawesome.com/0407d298dc.js" crossorigin="anonymous"></script>
</body>
</html>