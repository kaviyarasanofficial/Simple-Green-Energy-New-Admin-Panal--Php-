<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 0);

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'rectubmx_simplegreen');
define('DB_PASSWORD', '3N2h0DEwaDJ#');
define('DB_NAME', 'rectubmx_simplegreenenergy');

// Establish a database connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate the input
    if (empty($email) || empty($password)) {
        $error_message = "Please enter both email and password.";
    } else {
        // Perform a SQL query to check the team's credentials
        $sql = "SELECT * FROM teams WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['password'];
            $idstatus = $row['idstatus'];
            $role = $row['role'];

            if ($idstatus === 'Active') {
                // Compare the plain text password
                if ($password == $storedPassword) {
                    // Authentication successful
                    session_start(); // Start the session
                    $_SESSION['email'] = $email; // Store the email in the session variable

                    // Check the role and redirect accordingly
                    if ($role === 'surveyor') {
                        header("Location: surveyor/index.php");
                        exit();
                    } elseif ($role === 'Gas_engineers') {
                        header("Location: Gas_engineers.php");
                        exit();
                    } elseif ($role === 'Installation_team') {
                        header("Location: Installation_team.php");
                        exit();
                    } elseif ($role === 'Insulation Team') {
                        header("Location: Insulation_team.php");
                        exit();
                    } else {
                        $error_message = "Invalid role. Please contact the administrator.";
                    }
                } else {
                    $error_message = "Invalid credentials. Please try again.";
                }
            } elseif ($idstatus === 'Disable') {
                $error_message = "Your ID is disabled. Please contact the administrator for assistance.";
            } else {
                $error_message = "Invalid email. Please try again.";
            }
        } else {
            $error_message = "Invalid email. Please try again.";
        }
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


<!-- Mirrored from gymove.dexignzone.com/codeigniter/demo/page_login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 10:33:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Title -->
	<title>Simple Green Energy</title>

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
                                    <img class="logoimg"  src="https://www.simplegreenenergy.org/wp-content/uploads/2021/06/SimpleGreenEnergy_FinalLogo.png" alt="Logo">
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="" method="post" id="loginForm" novalidate>
                                        <div class="form-group">
                                            <label class="mb-1 form-label"> Email</label>
                                            <input name="email" type="email" class="form-control" >
                                        </div>
                                        <div class="mb-4 position-relative">
											<label class="mb-1 form-label">Password</label>
											<input name="password" type="password" id="dz-password" class="form-control">
											<span class="show-pass eye">
											
												<i class="fa fa-eye-slash"></i>
												<i class="fa fa-eye"></i>
											
											</span>
										</div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <!-- <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
												</div> -->
                                            </div>
                                            <div class="form-group">
                                                <a href="page_forgot_password.php">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary light btn-block">Sign In</button>
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page_register.php">Sign up</a></p>
                                    </div> -->
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

<!-- Mirrored from gymove.dexignzone.com/codeigniter/demo/page_login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 10:33:30 GMT -->
</html>