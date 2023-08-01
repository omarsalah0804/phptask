<?php
$colors = ['red', 'green', 'white'];

// Paragraph template with placeholders for colors
$paragraphTemplate = "The memory of that scene for me is like a frame of film forever frozen at that moment: the {color1} carpet, the {color2} lawn, the {color3} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

// Replace placeholders with colors from the $colors array
$paragraph = str_replace(['{color1}', '{color2}', '{color3}'], $colors, $paragraphTemplate);

echo $paragraph;
?>
