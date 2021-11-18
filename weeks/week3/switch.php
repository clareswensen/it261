<?php
// class coffee exercise
// if today is thursday, it will be a pumpkin latte day
// we will start with the isset() function
// then we will introduce our first GLOBAL variable
// our switch


//$variable = 'Life is good!';
//if(isset($variable)) {
//    echo 'Yippy Skippy';
//}else {
//    echo 'Not';
//}

// starting the switch
// if something is set, $today, then all is well
// else today is today

// GLOBAL VARIABLES are capitalized adn start with a $_GET


if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch

switch($today) {
    case 'Monday' :
        $color = '<body style="background-color: burlywood">';
        $coffee = '<h2>Monday is Pumpkin Latte Day!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = 'The <b>Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional autumn spice flavors, steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The beverage is most commonly associated with Starbucks, which first offered the drink in 2003, and the season of fall.';
        break;
    
    case 'Tuesday' :
        $color = '<body style="background-color: skyblue">';
        $coffee = '<h2>Tuesday is our Greek Frappe Day!</h2>';
        $pic = 'frappe.jpg';
        $alt = 'Greek Frappe';
        $content = 'A frappé coffee, <b>Greek frappé</b>, Nescafé frappé, or just frappé is a Greek iced coffee drink made from instant coffee, water, sugar, and milk. The word is often written frappe. The frappé was invented through experimentation by Dimitris Vakondios, a Nescafe representative, in 1957 in Thessaloniki.';
        break;

    case 'Wednesday' :
        $color = '<body style="background-color: burlywood">';
        $coffee = '<h2>Wednesday is our Latte Day!</h2>';
        $pic = 'latte.jpg';
        $alt = 'Latte';
        $content = 'Caffè latte, often shortened to just latte in English, is a coffee drink of Italian origin made with espresso and steamed milk.';
        break;
    
    case 'Thursday' :
        $color = '<body style="background-color: beige">';
        $coffee = '<h2>Thursday is our Cappucino Day!</h2>';
        $pic = 'cap.jpg';
        $alt = 'Cappucino';
        $content = 'A <b>cappuccino</b> is an espresso-based coffee drink that originated in Italy, and is prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.';
        break;

    case 'Friday' :
        $color = '<body style="background-color: whitesmoke">';
        $coffee = '<h2>Friday is our Americano Day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = '<b>Caffè Americano</b> is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. The strength of an Americano varies with the number of shots of espresso and the amount of water added.';
        break;

    case 'Saturday' :
        $color = '<body style="background-color: lightgray">';
        $coffee = '<h2>Saturday is our Regular Joe Day!</h2>';
        $pic = 'coffee.png';
        $alt = 'Coffee';
        $content = '<b>Coffee</b> is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain Coffea species. From the coffee fruit, the seeds are separated to produce a stable, raw product: Unroasted green coffee.';
        break;

    case 'Sunday' :
        $color = '<body style="background-color: lightgreen">';
        $coffee = '<h2>Sunday is our Green Tea Day!</h2>';
        $pic = 'green-tea.jpg';
        $alt = 'Green Tea';
        $content = '<b>Green tea</b> is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas. Green tea originated in China, and since then its production and manufacture has spread to other countries in East Asia. ';
        break;  

}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Switch Classwork Exercise</title>
<style> 
    #wrapper {
    width: 940px;
    margin: 20px auto;
    }
</style>
</head>

<body>
<div id="wrapper">
    <h1>My Wonderful Switch Classwork Exercise!</h1>
    <?php
    echo $coffee;
    echo $color;
    ?>
    <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    <p><?php echo $content;?></p>

    <h2>Check out our daily specials</h2>
    <ul>
        <li><a href ="switch.php?today=Thursday">Thursday</a></li>
        <li><a href ="switch.php?today=Friday">Friday</a></li>
        <li><a href ="switch.php?today=Saturday">Saturday</a></li>
        <li><a href ="switch.php?today=Sunday">Sunday</a></li>
        <li><a href ="switch.php?today=Monday">Monday</a></li>
        <li><a href ="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href ="switch.php?today=Wednesday">Wednesday</a></li>
    </ul>
</div> <!--end wrapper-->
</body>
</html>