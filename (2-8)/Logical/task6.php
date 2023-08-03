<?php
function isInRange($number) {
    return ($number >= 20 && $number <= 50);
}

$number = 50;
$isInRange = isInRange($number);

// Display the output
echo $isInRange ? 'true' : 'false';
?>
