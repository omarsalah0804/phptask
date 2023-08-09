<?php
function convertToLowercase($inputArray) {
    $lowercaseArray = array();
    foreach ($inputArray as $value) {
        // Check if the element is a string, then convert to lowercase
        if (is_string($value)) {
            $lowercaseArray[] = strtolower($value);
        } else {
            $lowercaseArray[] = $value;
        }
    }
    return $lowercaseArray;
}

$colors = array("RED", "BLUE", "WHITE", "YELLOW");
$convertedColors = convertToLowercase($colors);

// Display the output
print_r($convertedColors);
?>
