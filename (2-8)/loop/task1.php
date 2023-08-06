<?php

function display_numbers_with_dashes() {
    $numbers = range(1, 10);  // Create an array of numbers from 1 to 10
    $formatted_numbers = implode('-', $numbers);  // Join the numbers with dashes as a string
    echo $formatted_numbers;
}

display_numbers_with_dashes();

?>
