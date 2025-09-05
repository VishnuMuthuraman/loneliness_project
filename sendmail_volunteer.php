<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "vish.muthuraman@gmail.com";
    $subject = "New Volunteer Submission";

    $body = "New volunteer application:\n\n";
    foreach ($_POST as $key => $value) {
        $body .= ucfirst($key) . ": " . htmlspecialchars($value) . "\n";
    }

    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your volunteer form has been submitted.";
    } else {
        echo "Error: Unable to send email.";
    }
}
?>