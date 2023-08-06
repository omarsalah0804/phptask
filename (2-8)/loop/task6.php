<?php

function factorial($number) {
    if ($number < 0) {
        return "Invalid input. Factorial is not defined for negative numbers.";
    }

    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

$number = 5;
$factorial = factorial($number);
echo "Factorial of $number is: $factorial";

?>
