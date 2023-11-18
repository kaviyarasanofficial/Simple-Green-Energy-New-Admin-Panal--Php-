<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['email'])) {
        $to = $_POST['email'];
        $subject = "Important Information Regarding Your Application";
        $message = '<html><body>';
        $message .= '<p>Dear Customer,</p>';
        $message .= '<p>We appreciate your interest in our program and your recent application. However, after a careful review of your qualifications, we regret to inform you that your application does not currently meet our criteria.</p>';
        $message .= '<p>We understand that this news may be disappointing, but we encourage you to continue your efforts and consider reapplying when your qualifications align more closely with our requirements. We believe in your potential and look forward to the possibility of welcoming you in the future.</p>';
        $message .= '<p>If you have any questions or need further guidance on how to improve your qualifications, please do not hesitate to contact our support team at contactus@simplegreenenergy.org.</p>';
        $message .= '<p>Thank you for considering our program, and we hope to see your application again in the near future.</p>';
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
            echo "Invalid email parameters.";
        }
    } else {
        // Handle missing POST data
        echo "Missing email data.";
    }
}
?>
