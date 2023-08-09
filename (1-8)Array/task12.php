<?php
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

// Initialize variables to store the shortest and longest lengths
$shortestLength = PHP_INT_MAX; // Set to a large value initially
$longestLength = 0;

// Loop through the words to find the shortest and longest lengths
foreach ($words as $word) {
    $length = strlen($word);
    
    // Check for the shortest length
    if ($length < $shortestLength) {
        $shortestLength = $length;
    }

    // Check for the longest length
    if ($length > $longestLength) {
        $longestLength = $length;
    }
}

// Display the output
echo "The shortest array length is $shortestLength. The longest array length is $longestLength.";
?>
