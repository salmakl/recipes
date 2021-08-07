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
    <title>L O G I N </title>
</head>

<body class="body">

<form action="<?php echo URLROOT ?>/users/find" method="POST">
    <div class="container">
        <img src="http://localhost/Recipes/public/images/Fichier 1.svg" class="grande-image">
        <div class="content">
            <h1 class="title"> Member Login </h1>
            <div class="input">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="E-mail" name="email" class="mainInput">
            </div>

            <div class="input">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="pwd" class="mainInput">
            </div>

            <div class="btns"> 
            <input  type="submit" name="signin" value="Sign in" class="Btn">
            <a href="http://localhost/Recipes/users/registerpage"><input  type="button" name="singup" value="Sign up" class="Btn2"></a>
            
            </div>

        </div>
    </div>
</body>
</form>
</html>