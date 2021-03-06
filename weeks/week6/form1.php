<?php
// can not echo above doctype
$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$wines = '';
$regions = '';
$comments = '';
$privacy = '';
$phone = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$gender_Err = '';
$wines_Err = '';
$regions_Err = '';
$comments_Err = '';
$privacy_Err = '';
$phone_Err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['first_name'])) {
        $first_name_Err = 'Please fill out your first name';
    }else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_Err = 'Please fill out your last name';
    }else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_Err = 'Please fill out your email name';
    }else {
        $email = $_POST['email'];
    }

    if(empty($_POST['gender'])) {
        $gender_Err = 'Please select your gender';
    }else {
        $gender = $_POST['gender'];
    }

    if(empty($_POST['wines'])) {
        $wines_Err = 'Please select your favorite wines';
    }else {
        $wines = $_POST['wines'];
    }

    if($_POST['regions'] == NULL) {
        $regions_Err = 'Please select your region';
    }else {
        $regions = $_POST['regions'];
    }

    if(empty($_POST['comments'])) {
        $comments_Err = 'Please share your commments with us.';
    }else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_Err = 'You must agree';
    }else {
        $privacy = $_POST['privacy'];
    }

    // the logic is if post wines IS NOT empty, then, 
    // we need to grab the wines adn display the, just like we did in our implode.php

    function my_wines() {
        $my_return = '';
        if(!empty($_POST['wines'])) {
            $my_return = implode(', ', $_POST['wines']);
        }
        return $my_return;

    } //close wine function

    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phone_Err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_Err = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        }
        }

    if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['wines'],
        $_POST['regions'],
        $_POST['comments'],
        $_POST['privacy']
    )){
        $to = 'clareswensen@gmail.com';
        $subject = 'Test email' .date('m/d/y') ;
        $body = '
        The first name is: '.$first_name.''.PHP_EOL.'
        The last name is: '.$last_name.''.PHP_EOL.'
        Email: '.$email.''.PHP_EOL.'
        Phone: '.$phone.''.PHP_EOL.'
        Gender: '.$gender.''.PHP_EOL.'
        Wines: '.my_wines().''.PHP_EOL.'
        Region: '.$regions.''.PHP_EOL.'
        Comments: '.$comments.''.PHP_EOL.'
        ';

        $headers = array(
            'from' => 'noreply@mystudentswa.com',
            'Reply-to' => ''.$email.''

        );
        
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
    }

}//end server request


?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Emailable Form Number 1</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
<label for="first_name">First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">
<span class="error"><?php echo $first_name_Err;?></span>

<label for="last_name">Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">
<span class="error"><?php echo $last_name_Err;?></span>

<label for="email">Email</label>
<input type="email" name="email"value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
<span class="error"><?php echo $email_Err;?></span>

<label for="phone">Phone Number</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
<span class="error"><?php echo $phone_Err;?></span>

<label for="gender">Gender</label>
<ul>
<li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"';?>>Female</li>
<li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"';?>>Male</li>
<li><input type="radio" name="gender" value="other" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'checked="checked"';?>>Other</li>
</ul>
<span class="error"><?php echo $gender_Err;?></span>


<label for="wines">Favorite Wines</label>
<ul>
<li><input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab',$wines)) echo 'checked="checked"';?>>Cabernet</li>
<li><input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot',$wines)) echo 'checked="checked"';?>>Merlot</li>
<li><input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah',$wines)) echo 'checked="checked"';?>>Syrah</li>
<li><input type="checkbox" name="wines[]" value="malbec" <?php if(isset($_POST['wines']) && in_array('malbec',$wines)) echo 'checked="checked"';?>>Malbec</li>
<li><input type="checkbox" name="wines[]" value="blend" <?php if(isset($_POST['wines']) && in_array('blend',$wines)) echo 'checked="checked"';?>>Red Blend</li>
</ul>
<span class="error"><?php echo $wines_Err;?></span>

<label for="regions">Regions</label>
<select name="regions">
<option value=""NULL <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected="unselected"';?>>Select One</option>
<option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected="unselected"';?>>Northwest</option>
<option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected="unselected"';?>>Southwest</option>
<option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'mw') echo 'selected="unselected"';?>>Midwest</option>
<option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected="unselected"';?>>Northeast</option>
<option value="se" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'se') echo 'selected="unselected"';?>>Southeast</option>
<option value="so" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'so') echo 'selected="unselected"';?>>South</option>
</select>
<span class="error"><?php echo $regions_Err;?></span>

<label for="comments"></label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
<span class="error"><?php echo $comments_Err;?></span>

<label for="privacy">Privacy</label>
    <ul>
        <li><input type="radio" name="privacy" value="agree" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked"';?>>I agree</li>
    </ul>
    <span class="error"><?php echo $privacy_Err;?></span>

<input type="submit" value="Send it">
<p><a href="">Reset</a></p>

</fieldset>
</form>


</body>
</html>