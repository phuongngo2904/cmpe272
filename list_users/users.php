<!DOCTYPE html>
<html>
<head>
    <title>List of Users</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        .user-list {
            list-style-type: none;
            padding: 0;
        }
        .user-list li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .user-list li:nth-child(even) {
            background-color: #e9e9e9;
        }
        .delete-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>List of Users</h2>

    <ul class="user-list">
        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "dev";
        $password = "dev";
        $dbname = "cmpe272";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to select data from the users table
        $sql = "SELECT first_name, last_name FROM users";

        // Execute query
        $result = $conn->query($sql);

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<li><i class='fas fa-user'></i> <strong>First Name:</strong> " . $row["first_name"]. " - <strong>Last Name:</strong> " . $row["last_name"]. "</li>";
            }
        } else {
            echo "<li>No users found.</li>";
        }

        // Close connection
        $conn->close();
        ?>
    </ul>
</div>

</body>
</html>
