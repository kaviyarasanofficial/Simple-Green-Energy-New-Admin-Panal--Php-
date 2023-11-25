<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'rectubmx_simplegreen');
    define('DB_PASSWORD', '3N2h0DEwaDJ#');
    define('DB_NAME', 'rectubmx_simplegreenenergy');

    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $full_name = $_POST["f1-full-name"];
    $phone = $_POST["f1-phone"];
    $email = $_POST["f1-email"];
    $password = $_POST["f1-password"];
    $about_surveyor = $_POST["f1-details"];

    $sql = "INSERT INTO teams (name, phone, email, password, about_ID,role,idstatus) 
            VALUES ('$full_name', '$phone', '$email', '$password', '$about_surveyor','surveyor','Active')";

    if ($conn->query($sql) === TRUE) {
        echo "success"; // Return "success" on successful insertion
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Form was not submitted.";
}
?>
