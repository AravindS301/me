<?php
include 'config.php';

// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert admin user
$admin_user = "admin";
$admin_pass = password_hash("admin123", PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password)
        VALUES ('$admin_user', '$admin_pass')";

if ($conn->query($sql) === TRUE) {
    echo "Admin user created successfully.<br>";
} else {
    echo "Error inserting admin: " . $conn->error . "<br>";
}

$conn->close();
?>
