<?php
function changeFirstCharacterColor($inputString, $color) {
    $words = explode(' ', $inputString);
    $modifiedWords = array_map(function($word) use ($color) {
        $firstChar = substr($word, 0, 1);
        $restOfWord = substr($word, 1);
        return '<span style="color: ' . $color . ';">' . $firstChar . '</span>' . $restOfWord;
    }, $words);

    return implode(' ', $modifiedWords);
}

// Sample usage:
$inputString = "PHP Tutorial";
$color = "red";
$modifiedString = changeFirstCharacterColor($inputString, $color);
echo $modifiedString;
?>
