<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Function to log errors
function logError($message)
{
    $logFile = 'newsletter_errors.log';
    $timestamp = date('Y-m-d H:i:s');
    error_log("[$timestamp] $message\n", 3, $logFile);
}

// Function to sanitize input
function sanitizeInput($data)
{
    return htmlspecialchars(strip_tags(trim($data)));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    // Sanitize input data
    $email = filter_var($_POST['emails'] ?? '', FILTER_SANITIZE_EMAIL);

    // Basic validation
    if (empty($email)) {
        logError("Newsletter subscription with empty email from IP: " . $_SERVER['REMOTE_ADDR']);
        http_response_code(400);
        echo "Please enter your email address.";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        logError("Invalid email format for newsletter: $email from IP: " . $_SERVER['REMOTE_ADDR']);
        http_response_code(400);
        echo "Invalid email format.";
        exit();
    }

    try {
        $mail = new PHPMailer(true);

        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'apex.herosite.pro';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'test-support@sanguineit.com';
        $mail->Password   = 'test@sanguineit';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender and Recipient
        $mail->setFrom('test-support@sanguineit.com', 'SanguineIT Newsletter');
        $mail->addAddress('test-support@sanguineit.com');
        $mail->addReplyTo($email);

        // CC/BCC
        $mail->addCC('guptaalok0240@gmail.com');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Newsletter Subscription";
        $mail->Body = "
            <!DOCTYPE html>
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                    .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; text-align: center; }
                    .content { padding: 20px; }
                    .field { margin-bottom: 15px; }
                    .label { font-weight: bold; color: #555; }
                    .value { background: #f8f9fa; padding: 10px; border-left: 4px solid #667eea; margin-top: 5px; }
                    .footer { background: #f8f9fa; padding: 15px; text-align: center; color: #666; margin-top: 20px; }
                    .newsletter-icon { font-size: 48px; margin-bottom: 10px; }
                </style>
            </head>
            <body>
                <div class='header'>
                    <div class='newsletter-icon'>📧</div>
                    <h2>New Newsletter Subscription</h2>
                    <p>New Insights Weekly - SanguineIT Technologies</p>
                </div>
                <div class='content'>
                    <div class='field'>
                        <div class='label'>Email Address:</div>
                        <div class='value'>$email</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Subscription Type:</div>
                        <div class='value'>New Insights Weekly Newsletter</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Status:</div>
                        <div class='value'>New Subscriber</div>
                    </div>
                </div>
                <div class='footer'>
                    <p>This subscription was made on " . date('F j, Y \a\t g:i A') . "</p>
                    <p>IP Address: " . $_SERVER['REMOTE_ADDR'] . "</p>
                    <p>Please add this email to your newsletter mailing list.</p>
                </div>
            </body>
            </html>
        ";

        // Plain text version
        $mail->AltBody = "
            New Newsletter Subscription - SanguineIT Technologies
            
            Email: $email
            Subscription: New Insights Weekly Newsletter
            Status: New Subscriber
            
            Subscribed on: " . date('F j, Y \a\t g:i A') . "
            IP Address: " . $_SERVER['REMOTE_ADDR'] . "
            
            Please add this email to your newsletter mailing list.
        ";

        // Send Email
        if ($mail->send()) {
            // Log successful subscription
            logError("Successful newsletter subscription from $email");

            // Check if a custom redirect URL is provided
            $redirect_url = $_POST['_next'] ?? '/thankyou.php';

            // Add newsletter parameter to redirect URL
            $separator = (strpos($redirect_url, '?') !== false) ? '&' : '?';
            $redirect_url .= $separator . 'type=newsletter';

            header("Location: " . $redirect_url);
            exit();
        } else {
            logError("PHPMailer Error: " . $mail->ErrorInfo);
            http_response_code(500);
            echo "Failed to subscribe. Please try again later.";
        }
    } catch (Exception $e) {
        logError("Exception in newsletter subscription: " . $e->getMessage());
        http_response_code(500);
        echo "Failed to subscribe. Please try again later.";
    }
} else {
    // Invalid request method
    http_response_code(405);
    echo "Method not allowed.";
}
