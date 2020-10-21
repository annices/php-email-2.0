<?php

// Get user's current ip address:
$ipaddress = $_SERVER['REMOTE_ADDR'];
// Get timezoned date:
date_default_timezone_set($timezone);
// Date format:
$date = date('Y-m-d H:i:s');

// If submit:
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize inputs:
    $name = htmlspecialchars(trim(ucfirst($_POST['yname'])));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject']));
    $msg = htmlspecialchars(trim($_POST['msg']));

    // Build email content to be sent:
    $content = "From: " . $name . "\r\n";
    $content.= "Reply to: " . $email . "\r\n";
    $content.= "Sent: " . $date . "\r\n";
    $content.= "-----------------------------------------\r\n";
    $content.= "IP address: " . $ipaddress . "\r\n";
    $content.= "-----------------------------------------\r\n";

    // If no errors, send email:
    while (true) {
        if ($name && $msg && (!filter_var($email, FILTER_VALIDATE_EMAIL) === false)) {
            if ($subject == "")
                $subject = utf8_decode("- Subject missing -");

            // Wrap content to 70 characters per line:
            $content = wordwrap($content, 70, "\r\n");

            // Decode content to utf8 format and send email:
            mail($to, $subject, utf8_decode($msg), utf8_decode($content));

            // Create feedback message:
            $feedback = "<p><span class='successmsg'>The email was sent successfully.</span></b>";

            // Refresh page after two seconds:
            header("Refresh:2;url={$_SERVER['PHP_SELF']}");
            break;
        } else {
            // Create error messages:
            $feedback = "<b><span class='errormsg'>ERROR: Please fill in the form correctly.</span></b>";
            break;
        }
    }
}
