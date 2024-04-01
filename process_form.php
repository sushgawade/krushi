<?php
// Database credentials
$servername = "localhost";
$username = "root"; // Default username for localhost
$password = ""; // Default password for localhost
$dbname = "contact"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO contact_messages (email, mobile, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $email, $mobile, $message);

// Execute SQL statement
if ($stmt->execute() === TRUE) {
    echo "Message sent successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
