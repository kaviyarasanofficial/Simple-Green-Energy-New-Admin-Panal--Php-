<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Debugging: Log the received data
    error_log(print_r($_POST, true));

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

    // Sanitize and get the values from the POST data
    $fno = $conn->real_escape_string($_POST['fno']);
    $fuleType = $conn->real_escape_string($_POST['fuleType']);
    $boilerType = $conn->real_escape_string($_POST['boilerType']);
    $boilerCondition = $conn->real_escape_string($_POST['boilerCondition']);
    $isWallMounted = $conn->real_escape_string($_POST['isWallMounted']);
    $bolierAge = $conn->real_escape_string($_POST['bolierAge']);
    $shouldBoilerLocationChange = $conn->real_escape_string($_POST['shouldBoilerLocationChange']);
    $propertyType = $conn->real_escape_string($_POST['propertyType']);
    $bedroomCount = $conn->real_escape_string($_POST['bedroomCount']);
    $radiatorCount = $conn->real_escape_string($_POST['radiatorCount']);
    $isThermostaticRadiatorValvesPresent = $conn->real_escape_string($_POST['isThermostaticRadiatorValvesPresent']);
    $flueExhaustLocation = $conn->real_escape_string($_POST['flueExhaustLocation']);
    $flueLocation = $conn->real_escape_string($_POST['flueLocation']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $addressLine1 = $conn->real_escape_string($_POST['addressLine1']);
    $city = $conn->real_escape_string($_POST['city']);
    $postcode = $conn->real_escape_string($_POST['postcode']);

    // Create a SQL query to update the values in the database
    $sql = "UPDATE ATP SET
            fuleType = '$fuleType',
            boilerType = '$boilerType',
            boilerCondition = '$boilerCondition',
            isWallMounted = '$isWallMounted',
            bolierAge = '$bolierAge',
            shouldBoilerLocationChange = '$shouldBoilerLocationChange',
            propertyType = '$propertyType',
            bedroomCount = '$bedroomCount',
            radiatorCount = '$radiatorCount',
            isThermostaticRadiatorValvesPresent = '$isThermostaticRadiatorValvesPresent',
            flueExhaustLocation = '$flueExhaustLocation',
            flueLocation = '$flueLocation',
            firstName = '$firstName',
            lastName = '$lastName',
            email = '$email',
            phone = '$phone',
            addressLine1 = '$addressLine1',
            city = '$city',
            postcode = '$postcode'
            WHERE `f.no` = '$fno'";





    // Execute the query and store the result
    $updateResult = $conn->query($sql);


    if ($updateResult) {
        // Close the database connection
        $conn->close();

        // Redirect back one step and show an alert
        echo '<script>alert("Update successful");</script>';
        echo '<script>window.history.back();</script>';
        exit; // Terminate further script execution
    }


    // Debugging: Log the response
    error_log("Update result: " . ($updateResult ? "success" : "error"));

    // Create a response array
    $response = array("result" => ($updateResult ? "success" : "error"));

    // Send the response as JSON
    header("Content-Type: application/json");
    echo json_encode($response);

    // Close the database connection
    $conn->close();
} else {
    echo "No POST data received.";
}
?>
