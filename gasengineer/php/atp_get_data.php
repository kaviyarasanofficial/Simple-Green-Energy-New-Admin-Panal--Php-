<?php
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'rectubmx_simplegreen');
define('DB_PASSWORD', '3N2h0DEwaDJ#');
define('DB_NAME', 'rectubmx_simplegreenenergy');

// Establish a database connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["recordId"])) {
    $recordId = $_POST["recordId"];

    // Prepare and execute a SELECT query to retrieve data based on the record ID
    $sql = "SELECT * FROM ATP WHERE `f.no` = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $recordId); // Assuming the ID is an integer
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Data found, fetch it as an associative array
            $row = $result->fetch_assoc();

            // Return the data as JSON
            header('Content-Type: application/json');
            echo json_encode($row);
        } else {
            // No data found
            echo json_encode(["error" => "No data found"]);
        }

        $stmt->close();
    }
}

// Close your database connection here
$conn->close();
?>
