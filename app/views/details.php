<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo CSS_PATH ?>/style.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH ?>/details.css">
    <title>R E C I P E</title>
</head>
<body>
<script src="<?php echo JS ?>menu.js"></script>


    <!--begin header-->
    <header>
     <div id="logo">Quick<span id="logo-s">Cook</span></div>
        
        <ul class="nav">
            <li ><a href="<?php echo URLROOT ?>">Home</a></li>
            <li ><a href="<?php echo URLROOT ?>/recipes">Recipes</a></li>
            <li ><a href="<?php echo URLROOT ?>/Types">Cuisine Types</a></li>  
            <li ><a href="<?php echo URLROOT ?>/categories">Categories</a></li>  
        </ul>
        
        <?php if(empty($_SESSION['id'])): ?>
        <a href="<?php echo URLROOT ?>/users"><input id="sign" type="submit" name="signin" value="Sign in" class="Btn"></a>
        <?php else: ?>
            <div class="drop-trigger"><img class="icon" src="<?php echo IMAGE ?>Asset 1.svg" alt="">
            <div class="drop-down">
                <ul>
                    <li><a href="<?php echo URLROOT ?>/recipes/getByUser">Profile</a></li>
                    <li><a href="<?php echo URLROOT ?>/recipes/Wishlist">Wishlist</a></li>
                    <li><a href="<?php echo URLROOT ?>/recipes/addRecipe">My Recipes</a></li>
                    <li><a href="<?php echo URLROOT ?>/users/logout">logout</a></li>
                </ul>
            </div>
            </div>        
            <?php endif;?>
        <svg class="menu" viewBox="0 0 100 80" width="40" height="40" fill="#f55e27c4" onclick="toggle()">
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
    
    <!--End header-->
<main class="container">
    <div class="cont">
            
                <div class="contents">
                
                    <img src="<?php echo IMAGE.$data[0]['img'] ?>" alt="" id="details">
                    
     <fieldset class="rating ">
        <input type="radio" id="star5" name="rating" value="5" /><label onclick="Rate(<?php echo $data[0]['id']?>,5)" class = "full" for="star5" title="Awesome - 5 stars"></label>
        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label onclick="Rate(<?php echo $data[0]['id']?>,4.5)" class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
        <input type="radio" id="star4" name="rating" value="4" /><label onclick="Rate(<?php echo $data[0]['id']?>,4)" class = "full" for="star4" title="Pretty good - 4 stars"></label>
        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label onclick="Rate(<?php echo $data[0]['id']?>,3.5)" class="half" for="star3half" title="Meh - 3.5 stars"></label>
        <input type="radio" id="star3" name="rating" value="3" /><label onclick="Rate(<?php echo $data[0]['id']?>,3)" class = "full" for="star3" title="Meh - 3 stars"></label>
        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label onclick="Rate(<?php echo $data[0]['id']?>,2.5)"class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
        <input type="radio" id="star2" name="rating" value="2" /><label onclick="Rate(<?php echo $data[0]['id']?>,2)"class = "full" for="star2" title="Kinda bad - 2 stars"></label>
        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label onclick="Rate(<?php echo $data[0]['id']?>,1.5)"class="half" for="star1half" title="Meh - 1.5 stars"></label>
        <input type="radio" id="star1" name="rating" value="1" /><label onclick="Rate(<?php echo $data[0]['id']?>,1)"class = "full" for="star1" title="Sucks big time - 1 star"></label>
        <input type="radio" id="starhalf" name="rating" value="half" /><label onclick="Rate(<?php echo $data[0]['id']?>,0.5)"class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
     </fieldset>
                  
     </div>
                
                <div class="col">
                    <div class="img-container" ><span>save</span><i class="far fa-heart"></i></div> 
                    <div class="description">
                        <h2><?php echo $data[0]['name']?></h2>
                        <p><?php echo $data[0]['description']?></p>
                    </div>
                    <div class="ingredients" id="">
                        <h2>Ingredients</h2>
                       <!-- <p> <input type="checkbox" name="" id=""> <?php echo $data[0]['ingrediants']?> </p> -->
                          <div id="ingredients">

                          </div>
                    </div>
                </div>
            
    </div>
 </main>

    <h2>More Recipes Like This</h2>
    <section class="container" style="overflow-x: scroll;">
        
    <?php
    // print_r($data[1]);
    foreach ($data[1] as $row){
    ?>
        <div class="row">
            <div class="col">
                <div class="item">
                    <img class="img" src="<?php echo IMAGE.$row['img'] ?>" alt="">
                    <p class="title"><?php echo $row['name'] ?></p>
                    <img class=" favoris" src="images/icons/heart.svg" alt="">
                </div>
            </div>
        </div>
        <?php } ?>
    
       
      

        
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
                <p>Copyright 2021 All Right Reserved By Salma Zwina</p>
            </div>
        </div>

    </div>
</footer>
<script>

let inputs = document.querySelectorAll('input[name="rating"]')
   let rating= <?php echo $data[2]['ratting_number'] ?? 0; ?>;
   inputs.forEach((e) => {

    if(e.value == rating){
        e.checked =true;
    }
   })

    let str = "<?php echo $data[0]['ingrediants'];?>";
      let list = document.getElementById("ingredients");
      let div = document.createElement("div");
      let label = document.createElement("label");
      let checkbox = document.createElement("input");
      checkbox.setAttribute("type", "checkbox");

      let ing = str.split(",");
      ing.forEach((element) => {
        label.innerHTML = element;
        div.appendChild(checkbox);
        div.appendChild(label);
        list.appendChild(div.cloneNode(true));
      });
let btns = document.querySelectorAll('.full')
btns.forEach((element) => {
    element.addEventListener("click",()=>{
        console.log(element)
    })
})
      async function Rate(id,rating) {
      const resp = await fetch(
        "<?php echo URLROOT?>/recipes/rate",
        {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
          },
          body: JSON.stringify({
            id_recipe: id,
            rating: rating,
            
          }),
        }
      )
      const key  = await resp.json();
 
    }
</script>
</body>
</html>