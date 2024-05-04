<?php

$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);
    echo json_encode(array("error" => "Invalid JSON data"));
    exit;
}
$servername = "127.0.0.1";
$username = "dev";
$password = "dev";
$database = "cmpe272";

$conn = new mysqli($servername, $username, $password, $database);
try {
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    $username = $data['username'];
    $password = $data['password'];
    $first_name = $data['firstname'];
    $last_name = $data['lastname'];
    $email = $data['email'];
    $home_address = $data['address'];
    $home_phone = $data['homephone'];
    $cell_phone = $data['cellphone'];

    $sql = "INSERT INTO user_table (first_name, last_name, email, home_address, home_phone, cell_phone, username, password)
            VALUES ('$first_name', '$last_name', '$email', '$home_address', '$home_phone', '$cell_phone','$username','$password')";

    if ($conn->query($sql) === TRUE) {
        http_response_code(201);
        echo "User created successfully";
    } else {
        if ($conn->errno == 1062) {
            http_response_code(500);
            echo "Error: User $first_name  $last_name already exists.";
        } else {
            http_response_code(500);
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
} catch (Exception $e) {
    http_response_code(500);
    echo "Error: " . $e->getMessage();
}

?>
