<?php
$email = 'omarsalah251@gmail.com';

// Split the email address based on the "@" symbol
$emailParts = explode('@', $email);

// Extract the username part
$username = $emailParts[0];

echo $username; // Output: 'info'
?>
