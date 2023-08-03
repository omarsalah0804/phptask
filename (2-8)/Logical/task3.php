<?php
function calculateSumAndTriple($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    if ($firstInteger === $secondInteger) {
        $tripleSum = $sum * 3;
        return "($firstInteger + $secondInteger) * 3 = $tripleSum";
    } else {
        return "It is summertime!";
    }
}

$firstInteger = 2;
$secondInteger = 2;
$result = calculateSumAndTriple($firstInteger, $secondInteger);

// Display the output
echo $result;
?>
