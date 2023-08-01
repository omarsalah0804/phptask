<?php
$originalString = 'The quick brown fox jumps over the lazy dog';
$substringToRemove = 'brown';

// Remove the substring from the original string
$modifiedString = str_replace($substringToRemove, '', $originalString);

echo $modifiedString; // Output: 'The quick fox  jumps over the lazy dog'
?>
