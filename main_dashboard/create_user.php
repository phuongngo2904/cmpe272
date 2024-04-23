<?php
    $servername = "localhost";
    $username = "dev";
    $password = "dev";
    $dbname = "cmpe272";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $home_address = $_POST['home_address'];
    $home_phone = $_POST['home_phone'];
    $cell_phone = $_POST['cell_phone'];
    $sql = "INSERT INTO user_table (first_name, last_name, email, home_address, home_phone, cell_phone)
            VALUES ('$first_name', '$last_name', '$email', '$home_address', '$home_phone', '$cell_phone')";

    if ($conn->query($sql) === TRUE) {
        echo "User created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>