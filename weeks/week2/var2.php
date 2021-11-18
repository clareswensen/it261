<?php
// More on variables, arithemetic and additional set functions

$a = '20';
$b = '30';
$c = $a + $b;
echo $c;
echo '<br>';

$a = '700';
$b = '330';
$c = $a - $b;
echo $c;
echo '<br>';

$a = '50';
$b = '5';
$c = $a * $b;
echo $c;
echo '<br>';

$money = 100;
$money /= 7;
$friendly_money = number_format($money, 2);
echo $friendly_money;
echo '<br>';
// two new functions rounding up and rounding down (floor and ceil)
$friendly_money = floor($money);
echo $friendly_money;
echo '<br>';
$friendly_money = ceil($money);
echo $friendly_money;
echo '<br>';

// Logic and calculations!!
// Circumference of a circle Circumference = 2 pie r

$radius = '10';
$pie = 3.14;
$circumference = 2 * $pie * $radius;
echo $circumference;

// always think logic first
// 22 degrees celcius = ? in far?
// far = (_Celcius * 9/5) + 32

$celcius = 22;
$far = $celcius * (9/5) + 32;
$friendly_far = floor($far);
echo '<br>';
echo ''.$far.' degrees';
echo '<br>';
echo ''.$friendly_far.' degrees';

// logic and the exchange rate
// canadian dollars = 100
// exchange rate = .79

$canada = 1433;
$canada *= .79;
echo '<br>';
echo $canada;
echo '<br>';
echo 'I have <b>$'.$canada.'</b> American dollars! ';

$canada = 1433;
$canada *= .79;
$friendly_canada = ceil($canada);
echo '<br>';
echo 'I have <b>$'.$friendly_canada.'</b> American dollars! ';




