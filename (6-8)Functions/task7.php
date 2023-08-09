<?php
function removeDuplicates($array) {
    $uniqueArray = array_unique($array);
    return array_values($uniqueArray);
}

$array1 = array(2, 4, 7, 4, 8, 4);
$resultArray = removeDuplicates($array1);

print_r($resultArray);
?>
