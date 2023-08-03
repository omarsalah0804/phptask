<?php
function findLargestNumber($numbers) {
    return max($numbers);
}

$inputNumbers = [1, 5, 9];
$largestNumber = findLargestNumber($inputNumbers);

// Display the output
echo $largestNumber;
?>
