<?php
$sentence = 'That new trainee is so genius.';
$wordToReplace = 'Our';

// Use regular expression to replace the first word of the sentence
$pattern = '/^\w+/'; // Matches the first word
$replacement = $wordToReplace;
$newSentence = preg_replace($pattern, $replacement, $sentence, 1);

echo $newSentence; // Output: 'Our new trainee is so genius.'
?>
