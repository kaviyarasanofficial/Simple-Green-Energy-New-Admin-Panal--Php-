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

$userEmail = $_SESSION['email'];

// SQL query to select data from the database
$sql = "SELECT * FROM users WHERE email = '$userEmail'";

// Execute the query
$result = $conn->query($sql);

$records = array(); // Create an array to hold the records

if ($result->num_rows > 0) {
    // Loop through the results and store data in the $records array
    while ($row = $result->fetch_assoc()) {
        $records[] = $row;
    }
}

// Close the database connection
$conn->close();
?>
