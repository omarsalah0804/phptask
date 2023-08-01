<?php
$numericString = '085120';

// Split the numeric string into hours, minutes, and seconds
$hours = substr($numericString, 0, 2);
$minutes = substr($numericString, 2, 2);
$seconds = substr($numericString, 4, 2);

// Format the time as HH:MM:SS
$timeFormatted = $hours . ':' . $minutes . ':' . $seconds;

echo $timeFormatted; // Output: 08:51:19
?>
