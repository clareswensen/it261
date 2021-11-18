<?php
// the date function

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");
echo '<br>';
// uppercas "H" is 24 hour clock
echo date("H:i");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date("H:i");
//why did I change the time from a 12 hour clock to a 24 hour clock??
//I will use an if/else if statement, resulting in a different message based on the time of day
// if the time is less than 11, it's morning
//if the time is less than 16, its afternoon
//else, it's evening
//We need to assign our time to a variable!!
$time = date("H:i");
if($time <= 11) {
    echo '<h2 style="color:green;">Good Morning Clare</h2>';
}elseif($time <= 16) {
    echo '<h2 style="color:blue;">Good Afternoon Clare</h2>';
}else {
    echo '<h2 style="color:red;">Good Evening Clare</h2>';
}
// we can place html elements inside our echo

?>