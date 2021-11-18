<?php
// the if statement
// Logic - if the temperature is less than 90 degrees, all is well, else its going to be a cooker

$temp = 90;
if($temp <= 90) {
    echo 'not that hot';
} else {
    echo 'It\'s a scorcher';
    }

echo '<br>';
// we are going to extend the if statement, with an if else statement

$temp = 80;
if($temp <= 76){
    echo 'It is liveable';
} elseif($temp <= 85) {
    echo 'It\'s getting hotter';
} else {
    echo 'It\'s really hot';
}

// Fun with logic
// if my sales are over 800000, I will make 10% bonus of my base salary
// if my sales are => 600000, I will make a bonus of 5%
echo '<br>';

$sales = 400000;
$salary = 200000;
if($sales >= 800000){
    $salary *= 1.10;
    echo $salary;
} elseif($sales >= 600000) {
    $salary *= 1.05;
    echo $salary;
} else {
    echo $salary;
}