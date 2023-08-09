<?php
function reverseString($str) {
    $reversed = strrev($str);
    return $reversed;
}

$input = readline("Enter a string: ");
$reversedString = reverseString($input);

echo "Reversed string: " . $reversedString . "\n";
?>
