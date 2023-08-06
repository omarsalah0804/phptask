<?php

function generate_pattern() {
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            if ($i == $j) {
                echo $i . " ";
            } else {
                echo "0 ";
            }
        }
        echo PHP_EOL;
    }
}

generate_pattern();

?>
