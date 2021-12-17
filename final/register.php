<?php //register.php

include('server.php');
include('includes/header-form.php');

/* first_name
last_name
user_name
email
password_1
password_2 */


?>
<div id="wrapper">
<h1>Register Today!</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
    <label for="first_name">First Name</label>
    <input id="first_name" type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">

    <label for="last_name">Last Name</label>
    <input id="last_name" type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">

    <label for="email">Email</label>
    <input id="email" type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

    <label for="username">Username</label>
    <input id="username" type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">

    <label for="password_1">Password</label>
    <input id="password_1" type="password" name="password_1" value="<?php if(isset($_POST['password_1'])) echo htmlspecialchars($_POST['password_1']) ;?>">

    <label for="password_2">Confirm your password</label>
    <input id="password_2" type="password" name="password_2" value="<?php if(isset($_POST['password_2'])) echo htmlspecialchars($_POST['password_2']) ;?>">

    <button type="submit" name="reg_user" class="btn">Register</button>

    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>

    <?php
    include('errors.php'); ?>


</fieldset>
</form>
<h3>Already a member?</h3>
<span class="block"><a href="login.php">Log in here!</a></span>

</div> <!--close wrapper-->
<?php 
include('includes/footer-form.php');
