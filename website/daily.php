<?php
include('config.php');
include('includes/header.php'); ?>
    
    <div id="wrapper">
        
    <main>    
        <h1><?php echo $headline; ?></h1>
        <p>On my daily page, I will be featuring an edible mushroom each day and decribing where it can be found.</p>
        <h2>Mushroom Menu</h2>
        <ul id="dailyMushroom">
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
            <li><a href="daily.php?today=Sunday">Sunday</a></li>
        </ul>
        
    </main>

    <aside>
    <?php
        echo $mushroom;
        echo $description;
        echo $color;
        ?>
        <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        
    </aside>

    <?php
    include('includes/footer.php'); ?>
   