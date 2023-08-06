<?php

function generate_floyd_triangle($n) {
    $num = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo PHP_EOL;
    }
}

$n = 5; // Set the number of lines you want to generate
generate_floyd_triangle($n);

?>
