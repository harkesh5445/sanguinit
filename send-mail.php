 <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'PHPMailer/src/Exception.php';

    // Function to log errors
    function logError($message)
    {
        $logFile = 'contact_form_errors.log';
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
        $name = sanitizeInput($_POST['name'] ?? '');
        $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
        $c_code = sanitizeInput($_POST['c_code'] ?? '');
        $phone = sanitizeInput($_POST['phone'] ?? '');
        $organization = sanitizeInput($_POST['organization'] ?? '');
        $service = sanitizeInput($_POST['service'] ?? '');
        $message = sanitizeInput($_POST['message'] ?? '');

        // Basic validation
        if (empty($name) || empty($email) || empty($message)) {
            logError("Form submission with missing required fields from IP: " . $_SERVER['REMOTE_ADDR']);
            http_response_code(400);
            echo "Please fill in all required fields.";
            exit();
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            logError("Invalid email format: $email from IP: " . $_SERVER['REMOTE_ADDR']);
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
            $mail->setFrom('test-support@sanguineit.com', 'SanguineIT Contact Form');
            $mail->addAddress('test-support@sanguineit.com');
            $mail->addReplyTo($email, $name);

            // CC/BCC
            $mail->addCC('guptaalok0240@gmail.com');

            // Email Content
            $mail->isHTML(true);
            $mail->Subject = "New Contact Form Submission from " . $name;
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
                </style>
            </head>
            <body>
                <div class='header'>
                    <h2>New Contact Form Submission</h2>
                    <p>SanguineIT Technologies</p>
                </div>
                <div class='content'>
                    <div class='field'>
                        <div class='label'>Full Name:</div>
                        <div class='value'>$name</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Email Address:</div>
                        <div class='value'>$email</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Phone Number:</div>
                        <div class='value'>$c_code $phone</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Organization:</div>
                        <div class='value'>" . (!empty($organization) ? $organization : 'Not provided') . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Service:</div>
                        <div class='value'>" . (!empty($service) ? $service : 'Not provided') . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Message:</div>
                        <div class='value'>$message</div>
                    </div>
                </div>
                <div class='footer'>
                    <p>This message was sent from the SanguineIT contact form on " . date('F j, Y \a\t g:i A') . "</p>
                    <p>IP Address: " . $_SERVER['REMOTE_ADDR'] . "</p>
                </div>
            </body>
            </html>
        ";

            // Plain text version
            $mail->AltBody = "
            New Contact Form Submission - SanguineIT Technologies
            
            Name: $name
            Email: $email
            Phone: $c_code $phone
            Organization: " . (!empty($organization) ? $organization : 'Not provided') . "
            Service: " . (!empty($service) ? $service : 'Not provided') . "
            Message: $message
            
            Sent on: " . date('F j, Y \a\t g:i A') . "
            IP Address: " . $_SERVER['REMOTE_ADDR'] . "
        ";

            // Send Email
            if ($mail->send()) {
                // Log successful submission
                logError("Successful form submission from $name ($email)");

                // Check if a custom redirect URL is provided
                $redirect_url = $_POST['_next'] ?? '/thankyou.php';
                header("Location: " . $redirect_url);
                exit();
            } else {
                logError("PHPMailer Error: " . $mail->ErrorInfo);
                http_response_code(500);
                echo "Failed to send message. Please try again later.";
            }
        } catch (Exception $e) {
            logError("Exception in form submission: " . $e->getMessage());
            http_response_code(500);
            echo "Failed to send message. Please try again later.";
        }
    } else {
        // Invalid request method
        http_response_code(405);
        echo "Method not allowed.";
    }
    ?>