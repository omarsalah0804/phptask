<?php
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

// Calculate the average temperature
$averageTemperature = array_sum($temperatures) / count($temperatures);

// Sort the temperatures in ascending order
sort($temperatures);

// Display the average temperature
echo "Average Temperature is: " . number_format($averageTemperature, 1) . PHP_EOL;

// Display the list of five lowest temperatures
echo "List of seven lowest temperatures: ";
for ($i = 0; $i < 5; $i++) {
    echo $temperatures[$i] . ", ";
}
echo PHP_EOL;

// Display the list of five highest temperatures
echo "List of seven highest temperatures: ";
$length = count($temperatures);
for ($i = $length - 5; $i < $length; $i++) {
    echo $temperatures[$i] . ", ";
}
echo PHP_EOL;
?>
