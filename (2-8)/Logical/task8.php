<?php
function calculateElectricityBill($units) {
    $bill = 0;

    // For first 50 units
    if ($units <= 50) {
        $bill = $units * 2.50;
    }
    // For next 100 units
    elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    }
    // For next 100 units
    elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    }
    // For units above 250
    else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

    return $bill;
}

$units = 300;
$electricityBill = calculateElectricityBill($units);

// Display the output
echo "Monthly Electricity Bill: " . $electricityBill . " JOD";
?>
