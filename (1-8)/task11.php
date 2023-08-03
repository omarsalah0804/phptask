<?php
// Initialize an empty string to store the divisible numbers
$output = '';

// Loop through the numbers from 200 to 250
for ($i = 200; $i <= 250; $i++) {
    // Check if the number is divisible by 4
    if ($i % 4 === 0) {
        // Append the number to the output string
        $output .= $i . ',';
    }
}

// Remove the trailing comma from the output string
$output = rtrim($output, ',');

// Display the output
echo $output;
?>
