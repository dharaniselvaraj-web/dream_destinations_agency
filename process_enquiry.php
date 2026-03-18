<?php

header('Content-Type: application/json');

// Only proceed if the request method is POST (to prevent the error you saw)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
    exit();
}

// Database Connection Details
$conn = new mysqli("localhost", "root", "", "userdb");

// Check connection
if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Database Connection failed: " . $conn->connect_error]);
    exit();
}

// Sanitize and escape input data
$full_name = $conn->real_escape_string($_POST['fullName'] ?? '');
$service_name = $conn->real_escape_string($_POST['serviceName'] ?? 'General Enquiry'); 
$email = $conn->real_escape_string($_POST['email'] ?? '');
$mobile_number = $conn->real_escape_string($_POST['mobileNumber'] ?? '');

// Basic Validation
if (empty($full_name) || empty($mobile_number) || empty($service_name)) {
    echo json_encode(["status" => "error", "message" => "Missing required fields."]);
    $conn->close();
    exit();
}

// Assuming table name is 'enquiries'
$sql = "INSERT INTO enquirie (full_name, service_name, email, mobile_number) VALUES (?, ?, ?, ?)";

// Use prepared statements for security
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $full_name, $service_name, $email, $mobile_number);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Enquiry submitted successfully!"]);
} else {
    echo json_encode(["status" => "error", "message" => "Error executing query: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>