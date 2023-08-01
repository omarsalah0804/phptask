<?php
$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$passwordLength = 8; // Set the desired password length

$password = '';
$charactersLength = strlen($characters);

// Generate random password characters
for ($i = 0; $i < $passwordLength; $i++) {
    $randomIndex = mt_rand(0, $charactersLength - 1);
    $password .= $characters[$randomIndex];
}

echo $password; // Output: '254ABCc' or 'h242sfeD' or 'AFEe32' (randomly generated)
?>
