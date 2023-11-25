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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Validate the email (you can add more validation here)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit();
    }

    // Check if the email exists in the database (you should have a database connection here)
    $sql = "SELECT * FROM admins WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $password = $row['password'];

        // Send the original password to the user's email
        $subject = "Password Recovery";
        $message = "
Dear Admin,
          
    We have received a request to recover your password. Please find your password below:
    Your Password: $password
    For security purposes, we recommend that you delete this email after you have retrieved your password. 
    Please do not reply to this email.If you didn't request a password recovery, please ignore this message 
    or contact our support team.
          
    Best Regards,
    Simple Green Energy
         ";
        $headers = "From: sgecrm@gmail.com";

        if (mail($email, $subject, $message, $headers)) {
            echo '<script>alert("Your password has been sent to your email. Please check your inbox and spam folder. For security, delete this email after retrieval."); window.location = "login.php";</script>';
        } else {
            echo '<script>alert("Email sending failed. Please try again later or contact our support team.");</script>';
        }
    } else {
        echo '<script>alert("Invalid email address. Please try again.");</script>';
    }
}
?>


<?php
// Start the session to access session variables
session_start();

// Check if the user is not logged in (no session variable is set)
if (!isset($_SESSION['email'])) {
    // Redirect to the login page
    header("Location: ../signin.php");
    exit();
}

$userEmail = $_SESSION['email'];
// If the user is logged in, you can display the content of index.php
?>


<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from gymove.dexignzone.com/codeigniter/demo/page_forgot_password by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 10:35:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Title -->
	<title>Simple Green Energy</title>
    <style>
             #logo {
            margin-top: 1px;
            text-align: center;  
            
        }
        .logoimg {
            max-width: 100%;
            height: 107px;
            width: 250px;
            
        }

        /* Media query to adjust the logo size for different screen widths */
        @media (max-width: 768px) {
            .logoimg {
                max-width: 100%;
            }
        }

        @media (max-width: 576px) {
            .logoimg {
                max-width: 100%;
                height: 100%;
            }
        }
            </style>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Vertical Media">
	<meta name="robots" content="">

	<meta name="keywords" content="admin, admin dashboard, admin template, bootstrap, bootstrap 5, bootstrap 5 admin template, fitness, fitness admin, modern, responsive admin dashboard, codeigniter dashboard, sass, ui kit, web app">
	<meta name="description" content="Discover Gymove, the ultimate fitness solution that is designed to help you achieve a healthier lifestyle with its cutting-edge features and personalized programs. Gymove is a fully mobile-responsive admin dashboard template that provides the perfect blend of exercise, nutrition, and motivation. Begin your fitness journey today with Gymove and visit Vertical Media for more information.">

	<meta property="og:title" content="Gymove  - CodeIgniter Fitness Admin Dashboard Template">
	<meta property="og:description" content="Discover Gymove, the ultimate fitness solution that is designed to help you achieve a healthier lifestyle with its cutting-edge features and personalized programs. Gymove is a fully mobile-responsive admin dashboard template that provides the perfect blend of exercise, nutrition, and motivation. Begin your fitness journey today with Gymove and visit Vertical Media for more information.">
	<meta property="og:image" content="../social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.simplegreenenergy.org/wp-content/uploads/2021/03/cropped-Simple-Green-Energy_2_FavIcon-180x180.jpg">	
    <link href="public/assets/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="public/assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
	
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.php"><img class="logoimg"  src="https://www.simplegreenenergy.org/wp-content/uploads/2021/06/SimpleGreenEnergy_FinalLogo.png"></a>
									</div>
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                    <form method="post" action="page_forgot_password.php">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" >
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary light btn-block">SUBMIT</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="public/assets/vendor/global/global.min.js"></script>
<script src="public/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="public/assets/js/deznav-init.js"></script>
<script src="public/assets/js/custom.min.js"></script>
</body>

<!-- Mirrored from gymove.dexignzone.com/codeigniter/demo/page_forgot_password by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 10:35:42 GMT -->
</html>