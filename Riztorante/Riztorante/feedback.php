<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "riztorante"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$service_feedback = $_POST['sc_feedback'];
$suggestion = $_POST['sc_suggestion'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO feedback (sc_feedback, suggest) VALUES (?, ?)");
$stmt->bind_param("ss", $service_feedback, $suggestion);

// Execute the statement
$response = array();
if ($stmt->execute()) {
    $response['status'] = 'success';
    $response['message'] = 'New feedback recorded successfully';
} else {
    $response['status'] = 'error';
    $response['message'] = 'Error: ' . $stmt->error;
}

echo json_encode($response);


// Close connections
$stmt->close();
$conn->close();
?>
