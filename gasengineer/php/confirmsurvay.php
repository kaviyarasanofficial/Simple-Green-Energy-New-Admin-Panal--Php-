<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $surveyDateTime = $_POST['surveyDateTime'];
    $surveyorSelect = $_POST['surveyorSelect'];
    
  
	$heatingSource = $_POST['heatingSource'];
	$isHeatingSourceOld = $_POST['isHeatingSourceOld'];
	$propertyOwnership = $_POST['propertyOwnership'];
	$benefit = $_POST['benefit'];
	$property = $_POST['property'];
	$bedroom = $_POST['bedroom'];
	$wall = $_POST['wall'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$addressLine1 = $_POST['addressLine1'];
	$addressLine2 = $_POST['addressLine2'];
	$city = $_POST['city'];
	$postcode = $_POST['postcode'];
	$reference = $_POST['reference'];
			

    // Compose and send an email
     $to = $surveyorSelect . ', ' . $email; // The recipient's email address
    $subject = 'New Survey Appointment';
    $message = "Hello,";
    $message .= "Survey Date & Time: $surveyDateTime\n\n";
    $message .= "$heatingSource\n";
    $message .= "$isHeatingSourceOld\n";
    $message .= "$propertyOwnership\n";
    $message .= "$benefit\n";
    $message .= "$property\n";
    $message .= "$bedroom\n";
    $message .= "$wall\n";
    $message .= "$firstName\n";
    $message .= "$lastName\n";
    $message .= "$email\n";
    $message .= "$phone\n";
    $message .= "$addressLine1\n";
    $message .= "$addressLine2\n";
    $message .= "$city\n";
    $message .= "$postcode\n";
    $message .= "$reference\n";
	

    // You can include additional information in the email message if needed.

    $headers = 'From: contactus@simplegreenenergy.org' . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "<script>
                alert('Email sent to $surveyorSelect successfully!');
                window.history.back();
              </script>";
    } else {
        // Email sending failed
        echo "<script>
                alert('Email could not be sent.');
                window.history.back();
              </script>";
    }
}
?>
