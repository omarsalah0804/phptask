<?php

function print_pattern($rows) {
    $alphabet = range('A', 'Z');
    $mid_row = ceil($rows / 2);

    for ($i = 1; $i <= $rows; $i++) {
        $spaces = abs($mid_row - $i);

        // Print leading spaces
        echo str_repeat(' ', $spaces);

        // Print letters in ascending order
        for ($j = 0; $j < $i; $j++) {
            echo $alphabet[$j] . ' ';
        }

        echo "\n";
    }
}

$rows = 9; // Set the number of rows for the pattern
print_pattern($rows);

?>
