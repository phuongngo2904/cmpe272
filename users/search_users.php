<?php
    // Database connection
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

    // Initialize variables
    $searchTerm = "";
    $searchBy = "";
    $result = null;

    // Handling form submission
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['searchTerm']) && isset($_GET['searchBy'])) {
            $searchTerm = $_GET['searchTerm'];
            $searchBy = $_GET['searchBy'];
            $sql = "SELECT first_name, last_name, email, home_phone,cell_phone FROM user_table WHERE $searchBy LIKE '%$searchTerm%'";
            $result = $conn->query($sql);
        }
    }
    if ($result && $result->num_rows > 0) {
        echo "<h3>Search Results:</h3>";
        echo "<table border='1'>";
        echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Home Phone</th><th>Cell Phone</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["home_phone"] . "</td><td>" . $row["cell_phone"] . "</td></tr>";
        }
        echo "</table>";
    } elseif ($result && $result->num_rows == 0) {
        echo "<p>No results found.</p>";
    }

    $conn->close();
?>