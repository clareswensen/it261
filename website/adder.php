<!doctype html> 
<html>
<head>
<title>My Adder Assignment</title>
<style>
    form {
        width: 350px;
        margin: 0 auto;
        padding: 10px;
        border: 1px solid red;
    }
    p {
        text-align: center;
        color: red;
    }
    h1 {
        text-align: center;
        color: green;
    }
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    h3 {
        text-align: center;
    }
</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post"> 
    <label>Enter the first number:</label>
    <input type="text" name="num1"><br> 
    <label>Enter the second number:</label> 
    <input type="text" name="num2"><br>
    <input type="submit" value="Add Em!!">  
</form>

<?php  
if(isset($_POST['num1'], 
         $_POST['num2'])) {
$num1 = $_POST['num1'];
$int_num1 = intval($num1); 
$num2 = $_POST['num2'];
$int_num2 = intval($num2); 
$myTotal = $int_num1 + $int_num2;
if(empty($int_num1 && $int_num2)) {
    echo '<h3>Please fill out the input fields</h3>';
} else {
    echo '
    <h2>You added '. $int_num1 .' and '.$int_num2.'</h2> 
    <p> and the answer is <br>'.$myTotal.'!</p> 
    <p><a href="">Reset page</a></p> 
    ';
} // end else

} // end isset
?>

</body>
</html>
<!--Missing !doctype html on Line 1--> 
<!--Move the php to the end before the closing body tag-->
<!--place all styling within the style tags for clarity and easy editing-->
<!--line 31, extra "\" before form, missing method -->
<!--line 32, missing <label>-->
<!--line 33, num1 was improperly capitalized -->
<!--line 34, add <label> and move </label> to end -->
<!-- -->
<!-- -->
<!--line 41 missing $_POST['num2'] value-->
<!--line 46 $num2 variable was incorrectly capitalized -->
<!--line 43, 45 convert variables num1 & num2 to int values-->
<!--create an if/else statement to output error message if inputs are empty-->

<!--line 51 improper use of quotations--> 
<!--line 52 improper use of quotation and missing . before $myTotal, removed inline style--> 
<!--line 53, missing </p> --> 
<!--line 54, missing semicolon at end of echo--> 
<!--line 61, moved closing php ?> above closing </body> and end of php, removed uneccesary characters-->

