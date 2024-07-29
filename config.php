<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skill_sharing";

// Create a new MySQLi object to connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
