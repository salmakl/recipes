<header>
        <div id="logo">Quick<span id="logo-s">Cook</span></div>
            <ul>
                     <li ><a href="<?php echo URLROOT ?>">Home</a></li>
                    <li class="active"><a href="<?php echo URLROOT ?>/recipes">Recipes</a></li>
                    <li ><a href="<?php echo URLROOT ?>/Types">Cuisine Types</a></li>  
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
                    <li><a href="<?php echo URLROOT ?>/recipes/addRecipe">My Recipes</a></li>
                    <li><a href="<?php echo URLROOT ?>/users/logout">logout</a></li>
                </ul>
            </div>
            </div>        <?php endif;?>
      
        </header>