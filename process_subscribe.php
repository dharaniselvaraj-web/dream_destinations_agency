<?php
header('Content-Type: application/json'); 

$conn = new mysqli("localhost", "root", "", "userdb");

if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Database Connection failed: " . $conn->connect_error]);
    exit();
}

$message = ""; 
$email = $_POST['email'] ?? '';

if (empty($email)) {
    echo json_encode(["status" => "error", "message" => "Email is required."]);
    $conn->close();
    exit();
}

$email = $conn->real_escape_string($email);

$stmt_check = $conn->prepare("SELECT email FROM subscribers WHERE email = ?");
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows > 0) {
    $message = "You are already subscribed...!";
    $status = "info"; 
} else {
    $stmt_insert = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
    $stmt_insert->bind_param("s", $email);
    
    if ($stmt_insert->execute()) {
        $message = "Subscription successful...!";
        $status = "success";
    } else {
        $message = "Error: " . $conn->error;
        $status = "error";
    }
    $stmt_insert->close();
}

$stmt_check->close();
$conn->close();

echo json_encode(["status" => $status, "message" => $message]);
exit();
?>