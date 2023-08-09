<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Sorting the array by key in ascending order
ksort($fruits);

// Printing the sorted array
foreach ($fruits as $key => $value) {
    echo $key . ' = ' . $value . PHP_EOL;
}
?>
