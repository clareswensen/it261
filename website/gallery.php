<?php
//gallery.php
//config file
//credentials
// don't forget, this needs to be UPLOADED onto your server, will not work on localhost

include('config.php');

include('includes/header.php');

//for your big database assignment, your header include would go right here

// we need to grab our table and assign it to a variable
?>
<div id="wrapper">
<main>
<h1 class="gallery_heading">Welcome to my Gallery Page!</h1>

<?php
$sql = 'SELECT  * FROM gallery';


//we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//create a variable $result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

//time for the if statement -- if we have more than 0 rows...life is good

if(mysqli_num_rows($result) > 0) {
//now time for the while loop - and the while loop will return the array
while($row = mysqli_fetch_assoc($result)) {
    
    echo '<table>';
    echo '<tr>';
    echo '<td class="mushroom_image"><img  src="images/gallery'.$row['gallery_id'].'.jpg" alt="'.$row['name'].'"></td>';
    echo '<td class="mushroom_name">'.$row['name'].'</td>';
    echo '<td>'.$row['description'].'</td>';
    echo '<td class="mushroom_image"><img  src="images/galleryalt'.$row['gallery_id'].'.jpg" alt="'.$row['name'].'"></td>';
    echo '</tr>';
    echo '</table>';
   
}//close while loop

}else {
    echo 'Houston, we have a problem';

}//close if statement

mysqli_free_result($result);
mysqli_close($iConn);

?>
</main>

<?php
include('includes/footer.php');