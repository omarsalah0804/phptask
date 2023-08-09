<?php
function isArmstrongNumber($number) {
    $originalNumber = $number;
    $sum = 0;
    
    while ($number > 0) {
        $digit = $number % 10;
        $sum += $digit ** 3;
        $number = (int)($number / 10);
    }
    
    return $sum === $originalNumber;
}

$input = 407;

if (isArmstrongNumber($input)) {
    echo "$input is an Armstrong Number\n";
} else {
    echo "$input is not an Armstrong Number\n";
}
?>
