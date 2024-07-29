<?php
session_start();
require_once 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found
        $_SESSION['username'] = $user;
        header("Location: home2.php");
    } else {
        // Invalid credentials
        echo "Invalid username or password";
    }
}
?>