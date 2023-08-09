<?php
function isLowerCase($str) {
    return $str === strtolower($str);
}

$input = readline("Enter a string: ");

if (isLowerCase($input)) {
    echo "Your String is Ok\n";
} else {
    echo "Your String contains uppercase characters\n";
}
?>
