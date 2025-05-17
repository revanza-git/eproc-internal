<?php
// Database connection test
$conn = new mysqli('127.0.0.1', 'root', '', 'eproc_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>