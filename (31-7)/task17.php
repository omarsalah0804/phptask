<?php
$inputString = 'The quick brown fox jumps over the lazy dog';

// Split the string into an array of words
$words = explode(' ', $inputString);

// Select the first 5 words
$selectedWords = array_slice($words, 0, 5);

// Join the selected words back into a string
$selectedString = implode(' ', $selectedWords);

echo $selectedString; // Output: 'The quick brown fox jumps'
?>
