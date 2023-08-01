<?php
$url = 'http://www.orange.com/index.php';

// Extract the file name from the URL
$fileName = basename($url);

echo $fileName; // Output: 'index.php'
?>
