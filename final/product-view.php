<?php

include('config.php');

//if isset $_GET['today'] <class="">

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}else {
    header('Location: products.php');
}

$sql = 'SELECT * FROM products WHERE product_id ='.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//create a variable $result?

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    //now time for the while loop - and the while loop will return the array
    while($row = mysqli_fetch_assoc($result)) {
        //we are not echoing, we are assigning our row first_name to $first_name
        $product_name = stripslashes($row['product_name']);
        $product_price = stripslashes($row['product_price']);
        $product_description = stripslashes($row['product_description']);
        $feedback = '';
    }
}else {
    $feedback = 'Something is not working!!';
}
include('includes/header.php');
// for the big assignment, you will now call out the header include


?>
</div> <!--end header inner-->
</header>
<div id="wrapper">
<main>
<h1><?php echo $product_name ;?></h1>
<div class="product_view">
<?php
if($feedback == '') {
echo '<h2><b>Price: $</b> '.$product_price.'</h2>';
echo '<p>'.$product_description.'</p>';
echo 'Return back to the <a href="products.php">Main Product Page!</a>';
}
?>
</div>
</main>

<aside class="product_view_aside">
<?php
if($feedback =='') {
    echo '<img class="center" src="images/product'.$id.'.jpg" alt="'.$product_name.'">';
}
?>
</aside>

</div> <!--end wrapper -->
<?php

mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');