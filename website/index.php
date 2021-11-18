<?php
    include('config.php');
    include('includes/header.php'); ?>
    
    <div id="wrapper">
    <div id="hero">

    <?php
    echo random_pics($photos);
    ?>
    <h2 class="function">
    <pre>
    <br>
    function random_pics($photos) {
        $i = rand(0, 4);
        $selected_image = ''.$photos[$i].'.jpeg';
        echo '&ltimg src="images/'.$selected_image.' "  alt=" '.$photos[$i].' ">';
    }
    </pre>
    </h2>
    </div> <!--end hero-->

        
    <main>
        <h1><?php echo $headline; ?></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper nulla sed est tincidunt, commodo dictum nisl tempor. Aenean fringilla erat faucibus sapien finibus pretium. In hac habitasse platea dictumst. In quis condimentum lacus. Maecenas viverra venenatis odio, a pulvinar enim blandit id. Donec eu nibh sit amet neque bibendum dictum a vehicula purus. Aenean quis tempor ante. Etiam eget diam consequat, euismod dui at, porta magna. Quisque vitae vestibulum eros. </p>
    </main>
    <aside>
    <h3>Here is my aside</h3>

    </aside>

    <?php
    include('includes/footer.php'); ?>
   