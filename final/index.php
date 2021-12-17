<?php //index.php
//this index page is the homepage of your wonderful website
//also, after creating thsi index.php page, you will not be able to access it unless you login as a user or register first, then login!

session_start();

include('config.php');

// if the user has not logged in correctly, they will be directed to the login page

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must log in first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');

// Notification message
// if successful, welcom the end user!!!

if(isset($_SESSION['success'])) :?>

<div class="success">
    <h3>
        <?php echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    </h3> 
</div> <!--end div sucess-->
<?php endif ; 
if(isset($_SESSION['username'])) : ?>

<div class="welcome-logout">
<h3>Hello
<?php echo $_SESSION['username'];?>
</h3>
<p><a href="index.php?logout='1'">Logout</a></p>
</div> <!--end welcome-logout div -->
<?php endif;?>
</div> <!--end header inner-->
</header>

<div id="wrapper">
<h1 class="home_page_header"><?php echo $headline ?></h1>
<p class="home_page_body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id neque tempor, hendrerit lorem eu, porttitor massa. Mauris bibendum et urna sed pulvinar. Morbi gravida lectus diam, id rutrum sem consectetur eget. Duis aliquam consequat erat, et dapibus tortor ultricies feugiat. Donec pretium pellentesque nibh sit amet commodo. Nullam venenatis vitae purus quis viverra. Vivamus nunc ex, finibus ut turpis vitae, semper faucibus odio. Nunc ipsum ligula, ultrices sit amet auctor sed, ultrices quis mauris. Aliquam est orci, vehicula eu ligula a, porta placerat neque. Quisque sed nisi sed turpis efficitur placerat nec vitae elit. Nullam viverra sagittis purus, at pretium leo scelerisque id. Cras a neque nulla. Vivamus pretium condimentum magna, in vulputate lectus posuere quis. Nullam consequat vestibulum dictum.</p>

<!--your footer include will be placed at the bottom of the page -->
</div> <!--end wrapper -->
<?php
include('includes/footer.php');

