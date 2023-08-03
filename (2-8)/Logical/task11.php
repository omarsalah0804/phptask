<?php
function checkNumberSign($number) {
    if ($number > 0) {
        return 'Positive';
    } elseif ($number < 0) {
        return 'Negative';
    } else {
        return 'Zero';
    }
}

$number = -60;
$sign = checkNumberSign($number);

// Display the output
echo $sign;
?>
