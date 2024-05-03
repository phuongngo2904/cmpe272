<?php
session_start(); // Start session

// Database connection parameters
$servername = "127.0.0.1";
$username = "dev";
$password = "dev";
$dbname = "cmpe272";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function sanitizeInput($input) {
    return htmlspecialchars(stripslashes(trim($input)));
}

$input_username = "";
$input_password = "";  
if(isset($_GET["username"]) && isset($_GET["password"])) {
    $input_username = sanitizeInput($_GET["username"]);
    $input_password = sanitizeInput($_GET["password"]);
}  else if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
    $input_username = sanitizeInput($_SESSION["username"]);
    $input_password = sanitizeInput($_SESSION["password"]);
} else {
    header("location: https://phuocle.website/main");
    exit(); // Terminate script execution after redirect
}

// Prepare and execute the SQL query
$stmt = $conn->prepare("SELECT * FROM user_table WHERE username=? AND password=?");
$stmt->bind_param("ss", $input_username, $input_password);
$stmt->execute();
    
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    // Store username and password in session
    $_SESSION["username"] = $input_username;
    $_SESSION["password"] = $input_password;
} else {
    // Redirect if user is not authenticated
    header("location: https://phuocle.website/main");
    exit(); // Terminate script execution after redirect
}

$stmt->close();
$conn->close();
?>
