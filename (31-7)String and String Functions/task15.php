<?php
$originalString = 'The quick brown fox jumps over the lazy dog---';

// Remove trailing dashes from the string
$modifiedString = rtrim($originalString, '-');

echo $modifiedString; // Output: 'The quick brown fox jumps ------over the lazy dog'
?>
