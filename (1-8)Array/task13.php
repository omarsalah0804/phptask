<?php
function generateUniqueRandomNumbers($min, $max, $count) {
    // Check if the range is valid
    if ($min > $max || $count > ($max - $min + 1)) {
        return false;
    }

    // Create an array with all the numbers in the range
    $numbers = range($min, $max);

    // Shuffle the array to randomize the order
    shuffle($numbers);

    // Return the first $count elements of the shuffled array
    return array_slice($numbers, 0, $count);
}

$min = 11;
$max = 20;
$count = 10;

// Generate 10 unique random numbers within the range (11 to 20)
$randomNumbers = generateUniqueRandomNumbers($min, $max, $count);

// Display the output
echo implode(' ', $randomNumbers);
?>
