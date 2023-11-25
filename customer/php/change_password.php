<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $newPassword = $_POST["newPassword"];

    // Connect to the database (replace with your own credentials)
    $pdo = new PDO("mysql:host=localhost;dbname=rectubmx_simplegreenenergy", "rectubmx_simplegreen", "3N2h0DEwaDJ#");

    // Prepare and execute the SQL query to update the password
    $stmt = $pdo->prepare("UPDATE users SET password = :newPassword WHERE email = :email");
    $stmt->bindParam(":newPassword", $newPassword);
    $stmt->bindParam(":email", $email);
    
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    // Return an error if the request method is not POST
    echo "error";
}
?>
