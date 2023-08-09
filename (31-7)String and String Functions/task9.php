<?php
$string1 = 'dragonball';
$string2 = 'dragonboll';

// Find the first difference between the two strings
$length = min(strlen($string1), strlen($string2));

for ($i = 0; $i < $length; $i++) {
    if ($string1[$i] !== $string2[$i]) {
        $position = $i + 1;
        $char1 = $string1[$i];
        $char2 = $string2[$i];
        break;
    }
}

// Handle the case where one string is a substring of the other
if (!isset($position)) {
    if (strlen($string1) > $length) {
        $position = $length + 1;
        $char1 = $string1[$length];
        $char2 = '-';
    } elseif (strlen($string2) > $length) {
        $position = $length + 1;
        $char1 = '-';
        $char2 = $string2[$length];
    }
}

// Output the result
if (isset($position)) {
    echo "First difference between two strings at position $position: \"$char1\" vs \"$char2\"";
} else {
    echo "Both strings are identical.";
}
?>
