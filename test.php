<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Function testing</title>

</head>

<body>
<?php 
function area_volume($length, $width, $height) {
    $area = $length * $width;
    $volume = $length * $width * $height;
    return array($area, $volume);
}
$result_array = area_volume(2,5,10);
echo 'Area: '.$result_array[0].'';
echo '<br>';
echo 'Volume: '.$result_array[1].'';
echo '<br>';

list($area_result, $volume_result) = area_volume(10,2,8);
echo 'Area:  '.$area_result.'';
echo '<br>';
echo 'Volume: ' .$volume_result.'';
?>

</body>
</html>