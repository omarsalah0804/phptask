<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// Merge the two arrays
$mergedArray = array_merge($array1, $array2);

// Display the merged array
print_r($mergedArray);
?>

