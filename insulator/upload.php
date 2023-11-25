<?php
// Start the session to access session variables
session_start();

// Check if the user is not logged in (no session variable is set)
if (!isset($_SESSION['email'])) {
    // Redirect to the login page or handle the unauthorized access as needed
    header("Location: ../signin.php");
    exit();
}

// Get the user's email from the session
$userEmail = $_SESSION['email'];

$ds = DIRECTORY_SEPARATOR;
$storeFolder = 'uploads' . $ds . $userEmail; // Create a folder for each user based on their email

if (!empty($_FILES)) {
    $tempFile = $_FILES['file']['tmp_name'];
    $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;
    $targetFile = $targetPath . $_FILES['file']['name'];

    // Create the user's folder if it doesn't exist
    if (!file_exists($targetPath)) {
        mkdir($targetPath, 0777, true);
    }

    move_uploaded_file($tempFile, $targetFile);

    // Insert information about the uploaded document into the database
    $filename = $_FILES['file']['name'];
    $locationURL = 'https://sgecrm.rectusmedia.in/' . $storeFolder . '/' . $filename;

    define('DB_HOST', 'localhost');
define('DB_USERNAME', 'rectubmx_simplegreen');
define('DB_PASSWORD', '3N2h0DEwaDJ#');
define('DB_NAME', 'rectubmx_simplegreenenergy');

// Establish a database connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    // Insert into the "documents" table
    $insertSql = "INSERT INTO documents (email, location) VALUES (?, ?)";
    $stmt = $conn->prepare($insertSql);
    $stmt->bind_param("ss", $userEmail, $locationURL);

    if ($stmt->execute()) {
        // Insertion successful
    } else {
        // Insertion failed, handle the error
    }

    $stmt->close();
    $conn->close();
}
?>
