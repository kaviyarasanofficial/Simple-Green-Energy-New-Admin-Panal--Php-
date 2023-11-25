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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    // Get the record ID from the AJAX request
    $recordId = $_POST["id"];

    // Prepare and execute a DELETE query to remove the record
    $sql = "DELETE FROM `users` WHERE `f.no` = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $recordId);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Record deleted successfully
            // You can optionally return a success response if needed
            echo "success";
        } else {
            // Record not found or not deleted
            // You can return an error response if needed
            echo "error";
        }

        $stmt->close();
    }
}

// Close your database connection here
?>
