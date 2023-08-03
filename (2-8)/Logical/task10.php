<?php
function isEligibleToVote($age) {
    return $age >= 18;
}

$age = 15;
$eligibleToVote = isEligibleToVote($age);

// Display the output
echo $eligibleToVote ? 'is eligible to vote' : 'is not eligible to vote';
?>
