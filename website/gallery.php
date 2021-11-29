<?php
//gallery.php
include('config.php');
include('includes/header.php');

?>

<div id="wrapper">
<main>
<h1 class="gallery_heading">Welcome to my Gallery Page!</h1>
<?php
$mushroom = array (
    "morel_mushroom" => "morel_Morchella <em>esculenta</em>",
    "chanterellle_mushroom" => "chant_Cantharellus <em>cibariu</em>",
    "lobster_mushroom" => "lobst_Hypomyces <em>lactifluorum</em>",
    "porcini_mushroom" => "porci_Boletus <em>edulis</em>",
    "cauliflower_mushroom" => "cauli_Sparassis <em>crispa</em>"
);
//$name         $image
//$key          $value
?>

<table class="gallery">
<?php foreach($mushroom as $name => $image) :?>
<tr>
<td><img src="images/str_gallery/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name);?>"></td>
<td class="mushroom_common_name"><?php echo ucfirst(str_replace('_mushroom', ' ', $name));   ?></td>
<td><?php echo substr($image, 6);?></td>
<td><img src="images/str_gallery/<?php echo substr($image, 0, 5);?>alt.jpg" alt="<?php echo str_replace('_', ' ', $name);?>"></td>
</tr>
<?php endforeach;?>

</table>
</main>
</div> <!--end wrapper-->
<?php
include('includes/footer.php');
