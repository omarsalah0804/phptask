<?php

function generate_pattern() {
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            if ($j <= 5 - $i) {
                echo "1 ";
            } else {
                echo $i . " ";
            }
        }
        echo PHP_EOL;
    }
}

generate_pattern();

?>
