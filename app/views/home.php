<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo CSS_PATH ?>/style.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH ?>/slider.css">
    <title>H O M E</title>
</head>

<body>


    <!--begin header-->
    <header>
     <div id="logo">Quick<span id="logo-s">Cook</span></div>
        
        <ul class="nav">
            <li ><a href="<?php echo URLROOT ?>">Home</a></li>
            <li ><a href="<?php echo URLROOT ?>/recipes">Recipes</a></li>
            <li ><a href="<?php echo URLROOT ?>/Types">Cuisine Types</a></li>  
            <li ><a href="<?php echo URLROOT ?>/categories">Categories</a></li>  
        </ul>
        
        <div class="drop-trigger"><img class="icon" src="<?php echo IMAGE ?>Asset 1.svg" alt="">
            <div class="drop-down">
                <ul>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">logout</a></li>
                </ul>
            </div>
            </div>  
        <svg class="menu" viewBox="0 0 100 80" width="40" height="40" fill="#f55e27c4" onclick="nav()">
        <rect width="100" height="20"></rect>
        <rect y="30" width="100" height="20"></rect>
        <rect y="60" width="100" height="20"></rect>
        </svg>      
            
        <nav class="hum" >
        <ul>
            <li ><a href="<?php echo URLROOT ?>">Home</a></li>
            <li ><a href="<?php echo URLROOT ?>/recipes">Recipes</a></li>
            <li ><a href="<?php echo URLROOT ?>/Types">Cuisine Types</a></li>  
            <li ><a href="<?php echo URLROOT ?>/categories">Categories</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">logout</a></li>  
        </ul>
        </nav>
  
    </header>
    <!--End header-->
    <!--begin main-->
    <main>
    
        <!-- begin slider -->
        
        <div class="slide">
		<!-- fade css -->
        
		<div class="myslide fade">
        <div class="txt">
				
				<p>A RECIPE <br>IS A STORY THAT ENDS<br> WITH A GOOD MEAL</p>
			</div>
			<img src="<?php echo IMAGE?>home.jpg" style="width: 100%; height: 100%;">
		</div>
		<div class="myslide fade">
		<div class="txt">
				
				<p>A RECIPE <br>IS A STORY THAT ENDS<br> WITH A GOOD MEAL</p>
			</div>
			<img src="<?php echo IMAGE?>hero.jpg" style="width: 100%; height: 100%;">
		</div>
		<div class="myslide fade">
			<div class="txt">
				
				<p>A RECIPE <br>IS A STORY THAT ENDS<br> WITH A GOOD MEAL</p>
			</div>
			<img src="<?php echo IMAGE?>img.jpg" style="width: 100%; height: 100%;">
		</div>
		<div class="myslide fade">
			<div class="txt">
				
				<p>A RECIPE <br>IS A STORY THAT ENDS<br> WITH A GOOD MEAL</p>
			</div>
			<img src="<?php echo IMAGE?>1.jpg" style="width: 100%; height: 100%;">
		</div>


        	<!-- /fade css -->
		
		<!-- onclick js -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
		<div class="dotsbox" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
			
		</div>
		<!-- /onclick js -->
        </dic>

        <!-- End slider -->
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

       
       <script src="https://kit.fontawesome.com/0407d298dc.js" crossorigin="anonymous"></script>
       <script src="<?php echo JS ?>/slider.js"></script>
</body>
</html>