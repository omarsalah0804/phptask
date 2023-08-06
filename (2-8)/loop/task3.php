<?php

function generate_pattern() {
    $alphabet = range('A', 'E'); // Create an array with letters A to E
    $size = count($alphabet);

    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            if ($j < $size - $i - 1) {
                echo "A ";
            } else {
                echo $alphabet[$i] . " ";
            }
        }
        echo PHP_EOL;
    }
}

generate_pattern();

?>
