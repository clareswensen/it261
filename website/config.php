<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// create a functino for our navigation, so the function is called out on our header.php page

function my_nav($nav){
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return.='<li><a href="'.$key.'" class="current">'.$value.'</a></li>';
        } else {
            $my_return.='<li><a href="'.$key.'">'.$value.'</a></li>';
        }//end else
    }//end for each
    return $my_return;
}// close nav function

switch(THIS_PAGE) {
    case 'index.php':
    $title = 'Home page of our IT 261 Website';
    $body = 'home';
    $headline = 'Welcome to our Home page of our IT 261 Website';
    break;

    case 'about.php':
    $title = 'About page of our IT 261 Website';
    $body = 'about inner';
    $headline = 'Welcome to our About page of our IT 261 Website';
    break;

    case 'daily.php':
    $title = 'Daily page of our IT 261 Website';
    $body = 'daily inner';
    $headline = 'Welcome to my Daily Page';
    break;

    case 'project.php':
    $title = 'Project page of our IT 261 Website';
    $body = 'project inner';
    $headline = 'Welcome to our Project page of our IT 261 Website';
    break;

    case 'contact.php':
    $title = 'Contact page of our IT 261 Website';
    $body = 'contact inner';
    $headline = 'Welcome to our Contact page of our IT 261 Website';
    break;

    case 'gallery.php':
    $title = 'Gallery page of our IT 261 Website';
    $body = 'gallery';
    $headline = 'Welcome to our Gallery page of our IT 261 Website';
    break;

    case 'thx.php':
        $title = 'Thank you page of our form on contact page of our IT 261 Website';
        $body = 'thanks';
        $headline = 'Thank you page page of our IT 261 Website';
        break;
}

// Begining of Homework 3

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch

switch($today) {

case 'Sunday' :
    $color = '<body style="background-color: whitesmoke">';
    $mushroom = '<h2>Sunday is Shaggy Mane Day</h2>';
    $pic = 'shaggyMane.jpg';
    $alt = 'Shaggy Mane';
    $description = '<p>The shaggy mane is usually found in groups along roads and paths around parking lots and compost heaps, on lawns, and in other areas where the ground has been disturbed. They are partial to cool or cold weather.</p>';
    break;

case 'Monday' :
    $color = '<body style="background-color: darkbrown">';
    $mushroom = '<h2>Monday is Morel Day!</h2>';
    $pic = 'morel.jpg';
    $alt = 'Morel';
    $description = '<p>The morel is found on the ground in many habitats: woods, fruit orchards, gardens, sandy soil, wood chips, landscaped areas, etc. It appears in the spring. A good place to check is under cottonwood and alder along streams</p>';
    break;

case 'Tuesday' :
    $color = '<body style="background-color: goldenrod">';
    $mushroom = '<h2>Tuesday is Chanterelle Day</h2>';
    $pic = 'chanterelle.jpg';
    $alt = 'Chaneterelle';
    $description = '<p>Chanterelles are found on the ground under conifers and oaks, often in groups but not in fused clusters.</p>';
    break;

case 'Wednesday' :
    $color = '<body style="background-color: tan">';
    $mushroom = '<h2>Wednesday is Chicken of the Woods Day</h2>';
    $pic = 'chickenofthewoods.jpg';
    $alt = 'Chicken of the Woods';
    $description = '<p>Chicken of the woods are found in clusters growing on logs, trunks, and stumps of both hardwood and conifers.</p>';
    break;

case 'Thursday' :
    $color = '<body style="background-color: orange">';
    $mushroom = '<h2>Thursday is Hedgehog Day</h2>';
    $pic = 'hedgehog.jpg';
    $alt = 'Hedgehog';
    $description = '<p>Hedgehog mushrooms can be found growing on the ground in forests and at their edges, often in large numbers. It prefers pine, spruce, and other conifers but sometimes grows with oak. It usually fruits late in the season - during winter or spring in coastal areas with a mild climate</p>';
    break;

case 'Friday' :
    $color = '<body style="background-color: lightskyblue">';
    $mushroom = '<h2>Friday is Lobster Day</h2>';
    $pic = 'lobster.jpg';
    $alt = 'Lobster';
    $description = '<p>Lobster mushrooms are found on the ground in the woods. It is a parasitic fungi to the Russula species. Commonly found under conifers.</p>';
    break;

case 'Saturday' :
    $color = '<body style="background-color: burlywood">';
    $mushroom = '<h2>Saturday is Cauliflower Day</h2>';
    $pic = 'cauliflower.jpg';
    $alt = 'Cauliflower';
    $description = '<p>Cauliflower mushrooms are often found at or near the bases of conifers(especially pine) or sometimes on stumps. It favors older trees or those in poor health, and will fruit year after year in the same spot.</p>';
    break;

}

//emailable form php

$first_name = '';
$last_name = '';
$email = '';
$exp_level = '';
$mushrooms = '';
$uses = '';
$comments = '';
$privacy = '';
$phone = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$exp_level_Err = '';
$mushrooms_Err = '';
$uses_Err = '';
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

    if(empty($_POST['exp_level'])) {
        $exp_level_Err = 'Please select your experience level';
    }else {
        $exp_level = $_POST['exp_level'];
    }

    if(empty($_POST['mushrooms'])) {
        $mushrooms_Err = 'Please select your favorite mushrooms';
    }else {
        $mushrooms = $_POST['mushrooms'];
    }

    if($_POST['uses'] == NULL) {
        $uses_Err = 'Please select your primary use';
    }else {
        $uses = $_POST['uses'];
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

    // the logic is if post mushrooms IS NOT empty, then, 
    // we need to grab the mushrooms adn display the, just like we did in our implode.php

    function my_mushrooms() {
        $my_return = '';
        if(!empty($_POST['mushrooms'])) {
            $my_return = implode(', ', $_POST['mushrooms']);
        }
        return $my_return;
    } //close mushroom function

    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phone_Err = 'Your phone number please!';
        unset($_POST['phone']);
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_Err = 'Invalid format!';
        unset($_POST['phone']);
        } else{
        $phone = $_POST['phone'];
        }
        }
        
        
           
   
    
    if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['exp_level'],
        $_POST['mushrooms'],
        $_POST['uses'],
        $_POST['comments'],
        $_POST['privacy']
    )){
        $to = ' szemeo@mystudentswa.com';
        $subject = 'Test email' .date('m/d/y') ;
        $body = '
        The first name is: '.$first_name.''.PHP_EOL.'
        The last name is: '.$last_name.''.PHP_EOL.'
        Email: '.$email.''.PHP_EOL.'
        Phone: '.$phone.''.PHP_EOL.'
        Experience Level: '.$exp_level.''.PHP_EOL.'
        Primary Uses: '.$uses.''.PHP_EOL.'
        Favorite wild mushrooms: '.my_mushrooms().''.PHP_EOL.'
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

//my random images!
$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';


function random_pics($photos){
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.jpeg';
    echo '<img src="images/'.$selected_image.' "  alt=" '.$photos[$i].' ">';
}


?>

