<?php
$originalString = 'The brown fox<br>';
$insertString = 'quick';

// Insert the string at the specified position
$position = strpos($originalString, ' ') + 1;
$modifiedString = substr_replace($originalString, $insertString . ' ', $position, 0);

echo $modifiedString; // Output: 'The quick brown fox'
?>




<?php
$originalString = 'The quick brown fox';

// Get the first word of the sentence
$words = explode(' ', $originalString);
$firstWord = $words[0];

echo $firstWord; // Output: 'The'
?>
