<?php
// Read the version number from version.txt file
$versionFilePath = dirname(__FILE__) . '/version.MLCD';
$latestVersion = file_get_contents($versionFilePath);

// Set response content type to JSON
header('Content-Type: application/json');

// Return the latest version number in JSON format
echo json_encode(['version' => $latestVersion]);
?>
