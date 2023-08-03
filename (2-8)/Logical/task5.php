<?php
function isMultipleOfThree($number) {
    if ($number > 0 && $number % 3 === 0) {
        return true;
    } else {
        return false;
    }
}

$number = 20;
$isMultiple = isMultipleOfThree($number);

// Display the output
echo $isMultiple ? 'true' : 'false';
?>
