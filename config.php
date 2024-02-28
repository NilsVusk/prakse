<?php
ini_set('display_errors', 1); // Display errors on the screen
// ini_set('log_errors', 1); // Log errors to a file
error_reporting(E_ALL); // Show all errors
error_reporting(E_ERROR | E_WARNING | E_PARSE); // Show only errors, warnings, and parse errors
error_reporting(E_ALL & ~E_NOTICE); // Show all errors, except for notices

$servername = "localhost";
$username = "admin1";
$password = "admin1";
$dbname = "prakse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


?>