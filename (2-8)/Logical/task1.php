<?php
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        return true;
    } else {
        return false;
    }
}

$yearToCheck = 2013;

if (isLeapYear($yearToCheck)) {
    echo "This year is a leap year";
} else {
    echo "This year is not a leap year";
}
?>
