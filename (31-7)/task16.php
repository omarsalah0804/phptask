<?php
$inputString = '\"\1+2/3*2:2-3/4*3';

// Remove special characters from the string
$pattern = '/[^0-9 ]/'; // Regular expression to match any character that is not a digit or space
$replacement = '';
$modifiedString = preg_replace($pattern, $replacement, $inputString);

echo $modifiedString; // Output: '12322343'
?>
