<?php
    $servername = "localhost";
    $username = "dev";
    $password = "dev";
    $dbname = "cmpe272";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT first_name, last_name FROM user_table";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $users = array();
        while($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        $json = json_encode($users);
        echo $json;
    } else {
        echo "No users found.";
    }
    $conn->close();
?>
