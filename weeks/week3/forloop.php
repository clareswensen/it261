<?php
// for loops
// tricky!

for ($x = 0; $x <=21; $x+=3) {
    echo "The number is: $x <br>";
}
echo '<br>';
// is a for loop for our famouse celcius - far converter
// don not call out the celcius variable OUtside of the loop!!!!

for ($celcius = 0; $celcius <= 100; $celcius+=1) {
$far = ($celcius * 9/5) + 32;
$friendly_far = floor($far);
echo '<b> Farenheit:</b> '.$friendly_far.'<b> Celcius:</b> <span style="color:red; font-weight:bold;">'.$celcius.'</span><hr>';
}

//echo 'Here is my string: '.$celcius.' Additional string content'.$far.'';

echo '<br>';
//kilometers and we have miles
for ($kilometers = 50; $kilometers <= 500; $kilometers += 50) {
    $miles = ($kilometers * 1.60934);
    $friendly_miles = floor($miles);
    echo '<b> Miles:</b> '.$friendly_miles.'<b> Kilometers:</b> '.$kilometers.'<br>';
    }