<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="<?php echo CSS_PATH ?>/login.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo CSS_PATH ?>/style.css">
    <title>A D D</title>
</head>

<body class="body">

<form action="<?php echo URLROOT ?>/recipes/store" method="POST" class="form">
    <div class="container">
        
        <div class="content">
            <h1 class="title"> Add New Recipe </h1>

            <div class="input">
                
                <input type="text" placeholder="Name of recipe" name="title" class="mainInput">
            </div>
            <div class="input">
                <select name="" id="" class="mainInput"> 
                    <option value="">1</option>
                    <option value="">2</option>
                </select>
                
            </div>
            <div class="input">

                <textarea name="" id="text" cols="30" rows="8" class="mainInput"></textarea>
            </div>

       
            <div class="">
                <label for="img" id="img_label"><i class="fas fa-arrow-up"></i></label>
                <input type="file" name="img" id="img" hidden>
        
            </div>

            <div class="btns"> 
           
            <input  type="submit" name="add" value="Add" class="Btn">
            </div>

        </div>
        <img src="<?php echo IMAGE ?>Fichier 3.svg" class="grande-image">
    </div>
  
</body>
</form>
</html>