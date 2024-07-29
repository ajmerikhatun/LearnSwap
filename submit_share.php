<?php
// Database configuration
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "skill_sharing"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$title = $_POST['courseTitle'];
$description = $_POST['courseDescription'];
$instructor = $_POST['instructorName'];
$link = $_POST['courseLink'];
$category = $_POST['category'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO courses_share (title, description, instructor, link, category) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $title, $description, $instructor, $link, $category);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();

// Redirect to a thank you page or back to the form
header("Location: thank_you.php"); // You can create this page or redirect to your form page
exit;
?>
