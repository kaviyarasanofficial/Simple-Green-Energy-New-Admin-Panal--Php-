<?php
// Connect to the database (replace with your own credentials)
$pdo = new PDO("mysql:host=localhost;dbname=rectubmx_simplegreenenergy", "rectubmx_simplegreen", "3N2h0DEwaDJ#");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $gasengineerEmail = $_POST["gasengineerEmail"];
    $newStatus = $_POST["newStatus"];

    // Update the status in the database
    $stmt = $pdo->prepare("UPDATE teams SET idstatus = :newStatus WHERE email = :gasengineerEmail");
    $stmt->bindParam(":newStatus", $newStatus);
    $stmt->bindParam(":gasengineerEmail", $gasengineerEmail);
    
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
