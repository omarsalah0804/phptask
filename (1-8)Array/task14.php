<?php
function findLowestNonZeroInteger($inputArray) {
    $lowestNonZero = PHP_INT_MAX; // Initialize to a large value

    foreach ($inputArray as $num) {
        if ($num !== 0 && $num < $lowestNonZero) {
            $lowestNonZero = $num;
        }
    }

    return $lowestNonZero;
}

$array1 = array(2, 0, 10, 12, 6);
$lowestNonZeroInteger = findLowestNonZeroInteger($array1);

// Display the output
echo $lowestNonZeroInteger;
?>
