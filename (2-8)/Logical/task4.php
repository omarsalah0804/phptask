<?php
function checkSumEquals30($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    if ($sum === 30) {
        return $sum;
    } else {
        return false;
    }
}

$firstInteger = 10;
$secondInteger = 10;
$result = checkSumEquals30($firstInteger, $secondInteger);

// Display the output
echo ($result !== false) ? $result : 'false';
?>
