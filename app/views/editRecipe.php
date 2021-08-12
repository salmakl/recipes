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

<form action="<?php echo URLROOT ?>/recipes/update" method="POST" class="form" enctype="multipart/form-data">
    <div class="container">
        
        <div class="content">
            <h1 class="title"> Edit the Recipe </h1>

            <div class="input">
                
                <input type="text" value="<?= $data[2]['recipe'] ?>" name="name" class="mainInput">
                <input type="hidden" value="<?= $data[2]['id'] ?>" name="id" class="mainInput" >
            </div>
            <div class="input">

<textarea name="description" id="text" cols="30" rows="3" class="mainInput" placeholder="Description"><?= $data[2]['description']?></textarea>
</div>
            <div class="input">
                <select name="type" id="" class="mainInput"> 
                <?php
                    foreach($data[0] as $row){ ?>
                    <option value="<?=$row['id']?>"><?=$row['name']?></option>
                 <?php } ?>
                </select>
                
            </div>
            <div class="input">
                <select name="category" id="" class="mainInput"> 
                <?php
                    foreach($data[1] as $row){ ?>
                    <option value="<?=$row['id']?>"><?=$row['title']?></option>
                 <?php } ?>
                </select>
                
            </div>

            <div class="input">

                <textarea name="ingrediants" id="text" cols="30" rows="8" class="mainInput" placeholder="Ingrediants"><?= $data[2]['ingrediants']?></textarea>
            </div>

       
            <div class="">
                <label for="img" id="img_label"><i class="fas fa-arrow-up"></i></label>
                <input type="file" name="img" id="img" hidden>
        
            </div>

            <div class="btns"> 
           
            <input  type="submit" name="edit" value="Edit" class="Btn">
            </div>
            </div>
        

          
        <img src="<?php echo IMAGE ?>Fichier 3.svg" class="grande-image">
        </div>
        </form>
  
</body>

</html>