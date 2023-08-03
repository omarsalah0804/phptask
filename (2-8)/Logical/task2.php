<?php
function checkSeason($temperature) {
    if ($temperature < 20) {
        return "It is wintertime!";
    } else {
        return "It is summertime!";
    }
}

$temperature = 27;
$season = checkSeason($temperature);

// Display the output
echo $season;
?>
