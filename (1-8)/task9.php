<?php
function convertToUpperCase($inputArray) {
    $upperCaseArray = array();
    foreach ($inputArray as $value) {
        // Check if the element is a string, then convert to uppercase
        if (is_string($value)) {
            $upperCaseArray[] = strtoupper($value);
        } else {
            $upperCaseArray[] = $value;
        }
    }
    return $upperCaseArray;
}

$colors = array("red", "blue", "white", "yellow");
$convertedColors = convertToUpperCase($colors);

// Display the output
print_r($convertedColors);
?>
