 <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $c_code = $_POST['c_code'];
    $phone = $_POST['phone'];
    $organization = $_POST['organization'];
    $message = $_POST['message'];

    try {
        $mail = new PHPMailer(true);

        // // SMTP Configuration
        $mail->isSMTP();
         $mail->Host       = 'apex.herosite.pro'; // Use your actual SMTP host
         $mail->SMTPAuth   = true;
        //  $mail->Username   = 'alex.sanguineIT@gmail.com'; // Your email
        //  $mail->Password   = 'vyptwrjprecjvuzm'; // Your email password
         $mail->Username   = 'test-support@sanguineit.com'; // Your email
         $mail->Password   = 'test@sanguineit'; // Your email password
        //  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use 'PHPMailer::ENCRYPTION_STARTTLS' for port 587
        //  $mail->Port       = 465;    // Use 587 for TLS, 465 for SSL
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;


        // Sender and Recipient
        $mail->setFrom('test-support@sanguineit.com', 'SanguineIT');
        $mail->addAddress('test-support@sanguineit.com'); // Recipient

        // CC/BCC (Optional)
      //   $mail->addCC('alex.sanguineIT@gmail.com');
         $mail->addCC('guptaalok0240@gmail.com'); 
        // $mail->addCC('test-support@sanguineit.com');  
    
        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "SanguineIT Contact Form Submission";
        $mail->Body = "
            <h2>Contact Form Details</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong>$c_code - $phone</p>
            <p><strong>Select Service:</strong> $organization</p>
            <p><strong>Message:</strong> $message</p>
        ";

        // Send Email
        if ($mail->send()) {
            header("Location: http://sanguineit.com/thankyou.php");
            exit();
        } else {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        // header("Location: http://sanguineit.com/thankyou.php");
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>