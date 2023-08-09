<?php
function isPalindrome($str) {
    $str = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $str)); // Remove non-alphanumeric characters and convert to lowercase
    $reversed = strrev($str);
    
    return $str === $reversed;
}

$input = "Eva, can I see bees in a cave?";

if (isPalindrome($input)) {
    echo "Yes, it is a palindrome\n";
} else {
    echo "No, it is not a palindrome\n";
}
?>
