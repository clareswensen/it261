<?php

include('config.php');
include('includes/header.php');

//your header include would go right here

// we need to grab our table and assign it to a variable
?>
</div> <!--end header inner-->
</header>
<div id="wrapper">
<main>
<h1>Mushroom Products</h1>
<hr>

<?php
$sql = 'SELECT  * FROM products';


//we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//create a variable $result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

//time for the if statement -- if we have more than 0 rows...life is good

if(mysqli_num_rows($result) > 0) {
//now time for the while loop - and the while loop will return the array
while($row = mysqli_fetch_assoc($result)) {
    
    echo '<ul id="product_list">';
    echo '<li id="product_name">'.$row['product_name'].'</li>';
    echo '<li id="product_details">Product Details click <a href="product-view.php?id='.$row['product_id'].'"> here!</a></li>';
    echo '</ul>';
    
   
}//close while loop

}else {
    echo 'Houston, we have a problem';

}//close if statement

mysqli_free_result($result);
mysqli_close($iConn);

?>
</main>
<aside>
    <img src="images/mushroomclusteredited.jpg" alt="mushroom cluster">
</aside>
</div> <!--end wrapper-->
<?php
include('includes/footer.php');