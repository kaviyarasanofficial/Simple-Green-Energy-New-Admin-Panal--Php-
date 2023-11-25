<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['email'])) {
        $to = $_POST['email'];
        $subject = "Great News: Your Application is Accepted!";
        
        // Email content
        $message = '<html><body>';
        $message .= '<h2>Great News: Your Application is Accepted!</h2>';
        $message .= '<p>Dear Customer,</p>';
        $message .= '<p>We are delighted to share the great news that your application has been accepted! Your interest in our services is greatly appreciated, and we look forward to assisting you.</p>';
        $message .= '<p>You will soon receive an email containing instructions for uploading the necessary documents. Please follow the provided steps to complete the process.</p>';
        $message .= '<p>Once you have submitted the required documents, we will work on selecting a date and determining the type of service needed for your property. You will receive details about the upcoming service in your email.</p>';
        $message .= '<p>Thank you for choosing our service. We are committed to providing the best experience for our customers.</p>';
        $message .= '<p>If you have any questions or need assistance, please do not hesitate to contact our support team at [Your Contact Information].</p>';
        $message .= '<p>Best regards,<br>Simple Green Energy<br>contactus@simplegreenenergy.org</p>';
        $message .= '</body></html>';

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: contactus@simplegreenenergy.org' . "\r\n";
        $headers .= 'Reply-To: contactus@simplegreenenergy.org' . "\r\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();

        if (isset($to) && isset($subject) && isset($message) && isset($headers)) {
            if (mail($to, $subject, $message, $headers)) {
                // Email sent successfully
                echo "Email sent successfully.";
            } else {
                // Email sending failed
                echo "Email sending failed.";
            }
        } else {
            // Handle missing or null values
            echo "Invalid email credentials.";
        }
    } else {
        // Handle missing POST data
        echo "Missing email data.";
    }
}
?>
