<?php
include('config.php');
include('includes/header.php'); ?>

</div> <!--end header inner-->
</header>
<div id="wrapper">
    
    <main>  
        <h1 class="switch_page_header"><?php echo $headline; ?></h1>
        <hr>
        <div class="recipe">  
            <h1><?php echo $recipe_name;?></h1>
            <hr>
            <h2>Ingredients</h2>
            <?php echo $ingredients; ?>
            <h2>Instructions</h2>
            <?php echo $instructions; ?>
        </div>
    </main>

    <aside>
        <img id="recipe_pic" src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <h2 class="recipe_links">Links to all the Recipes</h2>
        <ul id="daily_recipe">
            <li><a href="switch.php?today=Monday">Chicken of the Woods Salad</a></li>
            <li><a href="switch.php?today=Tuesday">Hedgehog Meatloaf</a></li>
            <li><a href="switch.php?today=Wednesday">Marinated Honey Mushrooms</a></li>
            <li><a href="switch.php?today=Thursday">Wild Mushroom Chowder</a></li>
            <li><a href="switch.php?today=Friday">Candy Cap Tres Leches</a></li>
            <li><a href="switch.php?today=Saturday">Puffball Gratin</a></li>
            <li><a href="switch.php?today=Sunday">Morels in Cream</a></li>
        </ul>
        
    </aside>
</div> <!--close wrapper-->
   
    <?php
    include('includes/footer.php'); 
   