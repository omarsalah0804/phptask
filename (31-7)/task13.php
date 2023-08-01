<?php
$originalString = '0000000000000000000065702986535492.24';

// Remove leading zeroes
$modifiedString = ltrim($originalString, '0');

echo $modifiedString; // Output: '657022.24'
?>
