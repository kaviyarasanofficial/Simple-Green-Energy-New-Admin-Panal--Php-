<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['email'])) {
        $to = $_POST['email'];
        $subject = "Request to  Upload the Necessary Documents";
        $message = '<html><body>';
        $message .= '<p>Dear Customer,</p>';
        $message .= '<p>Thank you for reaching out and providing us with valuable leads. Your interest in our services is greatly appreciated. We are thrilled to have the opportunity to assist you.</p>';
        $message .= '<p>To ensure a smooth process and help us serve you better, we kindly request that you upload the necessary documents and images. Your documents and images will aid us in understanding your needs and customizing our services to meet your specific requirements.</p>';
        $message .= '<p>Please use the following link to upload your documents and images</p>';
        $message .= '<p></p>';
        $message .= '<p>In addition, we\'d like to extend our warmest greetings and express our sincere gratitude for choosing us. Your trust in our team is a testament to our commitment to delivering the highest quality services.</p>';
        $message .= '<p>Here\'s a special greeting to brighten your day</p>';
        $message .= '<p>If you have any questions or need further assistance with the uploading process, please feel free to contact our support team at [Your Contact Information].</p>';
        $message .= '<p>Once again, thank you for considering us, and we look forward to the opportunity to work with you.</p>';
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
