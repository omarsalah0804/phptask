<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    
    return true;
}

$number = intval(readline("Enter a number: "));

if (isPrime($number)) {
    echo $number . " is a prime number\n";
} else {
    echo $number . " is not a prime number\n";
}
?>
