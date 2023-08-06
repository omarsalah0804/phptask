<?php

function calculate_total() {
    $total = 0;
    for ($i = 0; $i <= 30; $i++) {
        $total += $i;
    }
    return $total;
}

$total = calculate_total();
echo "Total: " . $total;

?>
