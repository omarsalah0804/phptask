<?php
class ArraySorter {
    public static function sortArray($array) {
        sort($array);
        return $array;
    }
}

$inputArray = array(11, -2, 4, 35, 0, 8, -9);
$sortedArray = ArraySorter::sortArray($inputArray);
print_r($sortedArray);
?>
