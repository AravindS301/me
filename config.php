<?php
// RDS Database configuration
$db_host = 'blackpearl-primary.ccj26mmiy2f6.us-east-1.rds.amazonaws.com';
$db_user = 'Clops_admin';
$db_pass = 'Clops1234';
$db_name = 'internshipdb';

// Create database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
