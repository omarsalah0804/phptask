<?php
function calculateAverageScore($scores) {
    $totalScores = count($scores);
    $sum = array_sum($scores);
    return $sum / $totalScores;
}

function calculateGrade($averageScore) {
    if ($averageScore < 60) {
        return 'F';
    } elseif ($averageScore < 70) {
        return 'D';
    } elseif ($averageScore < 80) {
        return 'C';
    } elseif ($averageScore < 90) {
        return 'B';
    } else {
        return 'A';
    }
}

$scores = array(60, 86, 95, 63, 55, 74, 79, 62, 50);
$averageScore = calculateAverageScore($scores);
$grade = calculateGrade($averageScore);

// Display the output
echo "Average Score: " . number_format($averageScore, 2) . PHP_EOL;
echo "Grade: " . $grade;
?>
