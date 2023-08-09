<?php
class MathUtil {
    public static function factorial($n) {
        if ($n < 0) {
            return "Factorial is not defined for negative numbers.";
        }

        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }

        return $result;
    }
}

$integer = 5;
echo "Factorial of $integer: " . MathUtil::factorial($integer) . "\n";
?>
