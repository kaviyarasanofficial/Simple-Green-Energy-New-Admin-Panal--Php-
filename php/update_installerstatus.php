<?php
// Connect to the database (replace with your own credentials)
$pdo = new PDO("mysql:host=localhost;dbname=rectubmx_simplegreenenergy", "rectubmx_simplegreen", "3N2h0DEwaDJ#");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $installerEmail = $_POST["installerEmail"];
    $newStatus = $_POST["newStatus"];

    // Update the status in the database
    $stmt = $pdo->prepare("UPDATE teams SET idstatus = :newStatus WHERE email = :installerEmail");
    $stmt->bindParam(":newStatus", $newStatus);
    $stmt->bindParam(":installerEmail", $installerEmail);
    
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
