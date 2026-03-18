<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "userdb"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    error_log("Database Connection Failed: " . $conn->connect_error);
    http_response_code(500); 
    die("A technical error occurred. Please try again later.");
}
$conn->set_charset("utf8mb4");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = trim($_POST['name'] ?? ''); 
    $city = trim($_POST['city'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL); 
    $tourPackage = trim($_POST['tourPackage'] ?? '');
    $typeOfTour = trim($_POST['typeOfTour'] ?? '');
    $travelDate = $_POST['travelDate'] ?: null; 
    $duration = trim($_POST['duration'] ?? '');
    $adults = (int)($_POST['adults'] ?? 0);
    $children = (int)($_POST['children'] ?? 0);
    $requirements = trim($_POST['requirements'] ?? '');
    $flightAssistance = $_POST['flightAssistance'] ?? 'No';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
        http_response_code(400); 
        die("Error: Invalid email format.");
    }

    if (empty($name) || empty($phone) || empty($email) || empty($tourPackage)) {
        http_response_code(400); 
        die("Error: Please fill in all required fields.");
    }

    $sql = "INSERT INTO plan_tour_enquiries (name, city_of_residence, phone, email, tour_package, type_of_tour, travel_date, duration, num_adults, num_children, requirements, flight_assistance) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssssssssiiss", $name, $city, $phone, $email, $tourPackage, $typeOfTour, $travelDate, $duration, $adults, $children, $requirements, $flightAssistance);

    if ($stmt->execute()) {
        echo "<!DOCTYPE html><html><head><title>Success</title></head><body>";
        echo "<div style='text-align: center; padding: 50px;'>";
        echo "<h1>Submission Successful!</h1>";
        echo "<p>One of our travel experts will contact you soon.</p>";
        echo "<a href='home.php'>Go Home</a>";
        echo "</div></body></html>";
    
    exit();
    } else {
        error_log("SQL Error: " . $stmt->error);
        http_response_code(500);
        die("Submission failed. Please contact support.");
    }

    $stmt->close();
    $conn->close();

} else {
    header("Location: index.php"); 
    exit();
}
?>