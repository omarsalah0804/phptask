<?php
function getNextLetter($inputChar) {
    $asciiValue = ord($inputChar); // Get the ASCII value of the input character

    // Check if the character is 'z', in which case the next letter will be 'a'
    if ($inputChar === 'z' || $inputChar === 'Z') {
        $nextAsciiValue = $asciiValue - 25;
    } else {
        $nextAsciiValue = $asciiValue + 1; // Increment the ASCII value by 1 to get the next letter
    }

    $nextLetter = chr($nextAsciiValue); // Convert the ASCII value back to a character
    return $nextLetter;
}

// Test cases
$inputChar1 = 'a';
$inputChar2 = 'z';

echo "Sample Character: '$inputChar1'\n";
echo "Expected Output: '" . getNextLetter($inputChar1) . "'\n\n";

echo "Sample Character: '$inputChar2'\n";
echo "Expected Output: '" . getNextLetter($inputChar2) . "'\n";
?>
