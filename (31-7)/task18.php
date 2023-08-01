<?php
$numericString = '2,543.12';

// Remove commas from the numeric string
$modifiedString = str_replace(',','', $numericString);

echo $modifiedString; // Output: '2543.12'
?>
