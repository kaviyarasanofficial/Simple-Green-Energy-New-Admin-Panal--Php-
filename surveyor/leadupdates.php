<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $heatingSource = $_POST["heatingSource"];
    $isHeatingSourceOld = $_POST["isHeatingSourceOld"];
    $propertyOwnership = $_POST["propertyOwnership"];
    $benefit = $_POST["benefit"];
    $property = $_POST["property"];
    $bedroom = $_POST["bedroom"];
    $wall = $_POST["wall"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $addressLine1 = $_POST["addressLine1"];
    $addressLine2 = $_POST["addressLine2"];
    $city = $_POST["city"];
    $postcode = $_POST["postcode"];
    $reference = $_POST["reference"];
    $password = $_POST["password"];
    $fno = $_POST["fno"];

    // Assuming you have already connected to your database. Replace with your database details.
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'rectubmx_simplegreen');
    define('DB_PASSWORD', '3N2h0DEwaDJ#');
    define('DB_NAME', 'rectubmx_simplegreenenergy');

    // Establish a database connection
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL update statement
    $sql = "UPDATE users SET heatingSource = '$heatingSource', isHeatingSourceOld = '$isHeatingSourceOld', propertyOwnership = '$propertyOwnership', benefit = '$benefit', property = '$property', bedroom = '$bedroom', wall = '$wall', firstName = '$firstName', lastName = '$lastName', email = '$email', phone = '$phone', addressLine1 = '$addressLine1', addressLine2 = '$addressLine2', city = '$city', postcode = '$postcode', reference = '$reference', password = '$password' WHERE `f.no` = '$fno'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>';
    echo 'alert("Update successful");';
    header('Location: app_calender.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
