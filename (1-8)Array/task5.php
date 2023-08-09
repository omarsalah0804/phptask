<?php
$array = array(1, 2, 3, 4, 5);
$position = 4; // Location to insert the new item (1-based index)
$newItem = '$'; // New item to insert

// Insert the new item into the array at the specified position
array_splice($array, $position - 1, 0, $newItem);

// Output the modified array
echo implode(' ', $array); // Output: '1 2 3 $ 4 5'
?>
