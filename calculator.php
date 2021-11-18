<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Trip Calculator</title>
<link rel="stylesheet" type="text/css" href="css/calculatorstyles.css">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
    <label for="name">NAME</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">

    <label for="miles">How many miles will you be driving?</label>
    <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);?>">

    <label for="hours">How many hours per day would you like to drive?</label>
    <input type="number" name="hours" min="0" max="24" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']);?>">

    <label for="price">Price per gallon</label>
    <ul>
        <li><input type="radio" name="price" value="3.00"
        <?php  if(isset($_POST['price']) && $_POST['price'] == '3.00') echo 'checked="checked" '  ;?>>$3.00</li>
        <li><input type="radio" name="price" value="3.50"
        <?php  if(isset($_POST['price']) && $_POST['price'] == '3.50') echo 'checked="checked" '  ;?>>$3.50</li>
        <li><input type="radio" name="price" value="4.00"
        <?php  if(isset($_POST['price']) && $_POST['price'] == '4.00') echo 'checked="checked" '  ;?>>$4.00</li>
        
    </ul>

    <label for="efficiency">Fuel Efficiency</label>

    <select name="efficiency">
    <option value=""NULL 
    <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == NULL) echo 'selected="unselected"';?>>Select Fuel Efficiency</option>

    <option value="10"
    <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '10') echo 'selected="selected"';?>>Terrible</option>

    <option value="20"
    <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '20') echo 'selected="selected"';?>>Getting Better</option>

    <option value="30"
    <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '30') echo 'selected="selected"';?>>Good</option>

    <option value="50"
    <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '50') echo 'selected="selected"';?>>Great</option>
    

    </select>

    <input type="submit" value="Calculate">
    <p><a href="">Reset</a></p>

    </fieldset>
    </form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['name'])) {
        echo '<span class="error">Please fill out your name.</span>';
    }
    if(empty($_POST['miles'])) {
        echo '<span class="error">How many miles will you be driving?</span>';
    }
    if(empty($_POST['hours'])) {
        echo '<span class="error">Please enter how many hours you would like to drive each day.</span>';
    }
    if(empty($_POST['price'])) {
        echo '<span class="error">Please choose your price per gallon.</span>';
    }

    //if post efficiency is NULL, please select your efficiency

    if($_POST['efficiency'] == NULL) {
        echo '<span class="error">Please choose your fuel efficiency!</span>';
    }

    if(isset(
        $_POST['name'],
        $_POST['miles'],
        $_POST['hours'],
        $_POST['price'],
        $_POST['efficiency'])
    ) {
        $name = $_POST['name'];
        $miles = intval($_POST['miles']);
        $hours = $_POST['hours'];
        $price = $_POST['price'];
        $efficiency = (int)$_POST['efficiency'];

        $averageSpeed = 65;
        if($efficiency == 0){
            $efficiency = 1;
        }
        $gallons = intval($miles) / intval($efficiency);
        $gasCost = $price * $gallons;
        if($hours == 0){
            $hours = 1;
        }
        $days = $miles / ($hours * $averageSpeed);

        if (($efficiency != 0) && ($efficiency != 1) && (!empty($name && $miles && $hours && $price))){
        echo '
        <div class="box">
            <h2>Calculator Results</h2>
            <p>'.$name.', you will be driving <b>'.$miles.' miles</b></p>
            <p>Your vehicle has an efficiency rating of <b>'.$efficiency.'</b> miles per gallon.</p>
            <p>Your total cost for gas will be <b>$'.ceil($gasCost).' dollars</b></p>
            <p>If you drive <b>'.$hours.' hours a day</b> with an average speed of 65 mph, this trip will take you a total of <b>'.ceil($days).' day(s).</b></p>
        </div>
        '; }
     } //close isset



    }//server request

?>
</body>
</html>