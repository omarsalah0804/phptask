<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Error: Division by zero is not allowed.";
    }
}

// Sample usage of the calculator
$num1 = 10;
$num2 = 5;

echo "Addition: " . add($num1, $num2) . PHP_EOL;
echo "Subtraction: " . subtract($num1, $num2) . PHP_EOL;
echo "Multiplication: " . multiply($num1, $num2) . PHP_EOL;
echo "Division: " . divide($num1, $num2) . PHP_EOL;
?>
