<?php
$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

// Sort the array by the capital (values) in ascending order
asort($cities);

// Get the keys (countries) and values (capitals) separately
$countries = array_keys($cities);
$capitals = array_values($cities);

// Display the capital and country name
$length = count($countries);
for ($i = 0; $i < $length; $i++) {
    echo "The capital of {$countries[$i]} is {$capitals[$i] }<br>" . PHP_EOL;
}
?>
