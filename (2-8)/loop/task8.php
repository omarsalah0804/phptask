<?php

function count_character($text, $character) {
    $count = 0;
    $text_length = strlen($text);
    
    for ($i = 0; $i < $text_length; $i++) {
        if ($text[$i] === $character) {
            $count++;
        }
    }
    
    return $count;
}

$text = "Orange Coding Academy";
$character_to_count = "c";

$count = count_character($text, $character_to_count);
echo "Occurrences of '$character_to_count' in the text: $count";

?>
