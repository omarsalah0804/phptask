<?php
$sentence = 'I am a full stack developer at orange coding academy';
$word = 'Orange';

// Convert both the sentence and the word to lowercase for case-insensitive comparison
$sentenceLowercase = strtolower($sentence);
$wordLowercase = strtolower($word);

// Check if the word exists in the sentence
if (strpos($sentenceLowercase, $wordLowercase) !== false) {
    echo 'Word Found!';
} else {
    echo 'Word Not Found!';
}
?>
