<?php

include('config.php');

//if isset $_GET['today'] <class="">

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}else {
    header('Location: mushrooms.php');
}

$sql = 'SELECT * FROM mushrooms WHERE mushroom_id ='.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//create a variable $result?

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    //now time for the while loop - and the while loop will return the array
    while($row = mysqli_fetch_assoc($result)) {
        //we are not echoing, we are assigning our row first_name to $first_name
        $name = stripslashes($row['name']);
        $scientific_name = stripslashes($row['scientific_name']);
        $description = stripslashes($row['description']);
        $feedback = '';
    }
}else {
    $feedback = 'Something is not working!!';
}
include('includes/header.php');
// for the big assignment, you will now call out the header include


?>
<main>
<h1 class="mushroom_heading">Welcome to <?php echo $name ;?>'s Page!</h1>
<div class="mushroom_view">
<?php
if($feedback == '') {
echo '<ul>';
echo '<li><b>Common Name:</b> '.$name.'</li>';
echo '<li><b>Scientific Name:</b> '.$scientific_name.'</li>';
echo '</ul>';
echo '<p>'.$description.'</p>';
echo 'Return back to the <a href="mushrooms.php">Main Mushroom Page!</a>';
}
?>
</div>
</main>

<aside class="mushroom_view_aside">
<?php
if($feedback =='') {
    echo '<img class="center" src="images/database_gallery/mushroomalt'.$id.'.jpg" alt="'.$name.'">';
}
?>
</aside>


<?php

mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');