<?php
class DateDifference {
    private $startDate;
    private $endDate;

    public function __construct($startDate, $endDate) {
        $this->startDate = new DateTime($startDate);
        $this->endDate = new DateTime($endDate);
    }

    public function calculateDifference() {
        $interval = $this->startDate->diff($this->endDate);

        $years = $interval->y;
        $months = $interval->m;
        $days = $interval->d;

        return "Difference: $years years, $months months, $days days.";
    }
}

$startDate = '1981-11-03';
$endDate = '2013-09-04';

$dateDifference = new DateDifference($startDate, $endDate);
$result = $dateDifference->calculateDifference();

echo $result . "\n";
?>
