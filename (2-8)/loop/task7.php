<?php

function fibonacci($n) {
    $fib_sequence = array(0, 1); // Initialize the Fibonacci sequence with the first two numbers (0 and 1)

    for ($i = 2; $i < $n; $i++) {
        $fib_sequence[$i] = $fib_sequence[$i - 1] + $fib_sequence[$i - 2];
    }

    return $fib_sequence;
}

$length = 10; // Set the length of the Fibonacci sequence
$fib_sequence = fibonacci($length);
echo implode(', ', $fib_sequence);

?>
