<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="http://localhost/Recipes/public/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="http://localhost/Recipes/public/css/style.css">
    <title>S I G N U P</title>
</head>

<body class="body">

<form action="<?php echo URLROOT ?>/users/store" method="POST">
    <div class="container">
        
        <div class="content">
            <h1 class="title"> Create Account </h1>

            <div class="input">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="First name" name="fname" class="mainInput">
            </div>
            <div class="input">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Last name" name="lname" class="mainInput">
            </div>
            <div class="input">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="E-mail" name="email" class="mainInput">
            </div>
            <div class="input">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="pwd" class="mainInput">
            </div>

            <!-- <div class="input">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirm Password" name="rpwd" class="mainInput">
            </div> -->

            <div class="btns"> 
           
            <input  type="submit" name="singup" value="Sign up" class="Btn">
            </div>

        </div>
        <img src="http://localhost/Recipes/public/images/Fichier 2.svg" class="grande-image">
    </div>
  
</body>
</form>
</html>