<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo CSS_PATH ?>/style.css">

    <link rel="stylesheet" href="<?php echo CSS_PATH ?>/recipes.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH ?>/profile.css">
    <title>P R P O F I L E</title>
</head>
<body>
<script src="<?php echo JS?>menu.js"></script>
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
                    <li><a href="<?php echo URLROOT ?>/recipes/getByUser">Profile</a></li>
                    <li><a href="<?php echo URLROOT ?>/recipes/Wishlist">Wishlist</a></li>
                    <li><a href="<?php echo URLROOT ?>/recipes/addRecipe">Add Recipes</a></li>
                    <li><a href="<?php echo URLROOT ?>/users/logout">logout</a></li>
                </ul>
            </div>
            </div>  
        <svg class="menu"  viewBox="0 0 100 80" width="40" height="40" fill="#f55e27c4" onclick="toggle()">
        <rect width="100" height="20"></rect>
        <rect y="30" width="100" height="20"></rect>
        <rect y="60" width="100" height="20"></rect>
        </svg>      
            
        <nav class="hum" id="menu-display" style="display:none" >
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
    <section class="buttons">
    <div>
    <input type="button" class="btn modal-btn" value="Reset Pssword">
    </div>
    <div>
    <input type="button"class="btn modal-btn1" value="Edit Profile">
    </div>
</section>

<form  id="reset">  
<section class="profil">
 
<div class="modal">
<h2>Reset Pssword</h2>

<input type="text" class="reset-form" name="old" placeholder="Old Password" >
<input type="text" class="reset-form" name="new" placeholder="New Password" >
<input type="submit" class="btn" name="reset" value="Reset">
<span class="modal-close">X</span>


</div>

</section>
</form>
<form  id="reset-profil">  
<section class="profile-setting">
 
<div class="modal1">
<h2>Profile Settings</h2>

<input type="text" class="reset-form" name="fname" placeholder="First name" >
<input type="text" class="reset-form" name="lname" placeholder="Last name" >
<input type="email" class="reset-form" name="email" placeholder="E-mail" >
<input type="submit" class="btn" name="setting" value="Reset">
<span class="modal-close1">X</span>


</div>

</section>
</form>
    <!-- <section class="container">
            <input type="text" placeholder="Search" class="search">
            <i class="fas fa-search"></i>
        </section> -->
    <section class="container">
                    <?php
                    
                    foreach ($data as $row){
                
                    ?>
          
           <div class="row">
                    <div class="col">
                        <div class="item">
                            <a href="<?php echo URLROOT ?>/recipes/getById/<?php echo $row['id'] ?>"><img class="img" src="<?PHP echo IMAGE.$row['img'] ?>" alt=""></a>
                            
                            <p class="title"><?= $row['name'] ?></p>
                        
                        </div>
                        <div class="item1">
                            <!-- <a href="<?php echo URLROOT ?>/recipes/edit/<?php echo $row['id']?>" class="btn edit" ><input  type="submit" name="signin" value="Edit" ></a> -->
                            <a href="<?php echo URLROOT ?>/recipes/edit/<?php echo $row['id']?>"  ><i class="fas fa-pen edit"></i></a>
                            <a href="<?php echo URLROOT ?>/recipes/delete/<?php echo $row['id']?>" ><i class="fas fa-minus delete"></i></a>
                         
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
                <p>Copyright 2021 All Right Reserved By Salma Zwina</p>
            </div>
        </div>

    </div>
</footer>
<script src="<?php echo JS?>/modal.js"></script>
<script>
    let form = document.getElementById('reset')
    form.addEventListener('submit', (e)=>{
    e.preventDefault();
    updatePassword();
})
    let forms = document.getElementById('reset-profil')
    forms.addEventListener('submit', (e)=>{
    e.preventDefault();
    updateProfile();
})
      
            let old = document.querySelector('input[name="old"]')
            let newP = document.querySelector('input[name="new"]')
            var profil=document.querySelector(".profil");
  
        async function updatePassword() {
      const resp = await fetch(
        "<?php echo URLROOT?>/users/editPassword",
        {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
          },
          body: JSON.stringify({
            old: old.value,
            new: newP.value,
            
          }),
        }
      )
      const key  = await resp.json();
      if(key){
          alert('Password updated !');
          profil.classList.remove("profil-active");
      }
        }



        let fname = document.querySelector('input[name="fname"]')
        let lname = document.querySelector('input[name="lname"]')
        let email = document.querySelector('input[name="email"]')
        var setting=document.querySelector(".profile-setting");
  
        async function updateProfile() {
      const resp = await fetch(
        "<?php echo URLROOT?>/users/editProfil",
        {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
          },
          body: JSON.stringify({
            fname: fname.value,
            lname: lname.value,
            email: email.value,
            
          }),
        }
      )
      const key  = await resp.json();
      if(key){
          alert('Password updated !');
          setting.classList.remove("profil-active1");
      }
        }
</script>
</body>
</html>