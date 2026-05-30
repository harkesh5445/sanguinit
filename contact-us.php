<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $need = $_POST['need'];
    $message = $_POST['message'];

    try {
        $mail = new PHPMailer(true);

        // SMTP Configuration
        $mail->isSMTP();
         $mail->Host       = 'apex.herosite.pro'; // Use your actual SMTP host
         $mail->SMTPAuth   = true;
         $mail->Username   = 'test-support@sanguineit.com'; // Your email
         $mail->Password   = 'test@sanguineit'; // Your email password
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use 'PHPMailer::ENCRYPTION_STARTTLS' for port 587
         $mail->Port       = 587; // Use 587 for TLS, 465 for SSL

        // Sender and Recipient
        $mail->setFrom('test-support@sanguineit.com', 'SanguineIT');
        $mail->addAddress('test-support@sanguineit.com'); // Recipient

        // CC/BCC (Optional)
      //   $mail->addCC('alex.sanguineIT@gmail.com'); guptaalok0240@gmail.com
         $mail->addCC('guptaalok0240@gmail.com');  

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "SanguineIT Contact Form Submission";
        $mail->Body = "
            <h2>Contact Form Details</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Select Service:</strong> $need</p>
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
    //   header("Location: http://sanguineit.com/thankyou.php");
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?> 
 

<?php
require_once __DIR__ . '/includes/seo.php';
$page_data = [
    'title' => 'Contact SanguineIT | Start Your Project',
    'description' => 'Reach SanguineIT for web, mobile, ecommerce, and cloud engineering. Offices in Noida, India and Brooklyn, NY — call +1-662-300-1685 or send a message.',
    'canonical' => sit_base_url() . '/contact-us.php',
];
include "header.php" ?>

<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-6">
<div class="text-block">
<div class="container">
<div class="row">
<div class="col-lg-12 v-center">
<div class="bread-inner">
<div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
<ul>
<li><a href="index-2.html">Home</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>
<div class="bread-title wow fadeInUp" data-wow-delay=".5s">
<h2>Contact</h2>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--End Breadcrumb Area-->
<!--Start Enquire Form-->
<section class="contact-page pad-tb">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 v-center">
<div class="common-heading text-l">

<div class="messages">
 <?php
  if (!empty($_POST)) {
            $msg = "Thanks for your message. We will get back to you soon!!.";
         echo'<pre>';print_r($msg);echo'</pre>';
  }
         ?>
</div>
<span>Contact Now</span>
<h2 class="mt0 mb0">Have Question? Write a Message</h2>
<p class="lh mb60 mt20">We will catch you as early as we receive the message</p>
</div>
<div class="form-block">
<form id="contact-form" method="post" action="contact-us.php" data-toggle="validator" enctype = "multipart/form-data">
 <div class="thank-you-message" style="display: none;">Thank you for your submission!</div>

<div class="fieldsets row">
<div class="col-md-6 form-group"><input id="name" type="text" name="name"  placeholder="Enter your name *" required="required" data-error="Name is required.">
<div class="help-block with-errors"></div></div>
<div class="col-md-6 form-group"><input id="form_email" type="email" name="email"  placeholder="Enter your email *" required="required" data-error="Valid email is required.">
<div class="help-block with-errors"></div></div>
</div>
<div class="fieldsets row">
<div class="col-md-6 form-group"><input id="form_phone" type="text" name="phone"  placeholder="Enter your Phone No *" required="required" data-error="Phone No is required.">
<div class="help-block with-errors"></div></div>
<div class="col-md-6 form-group"><select id="form_need" name="need"  required="required" data-error="Specify your need.">
<option value="">Select Service</option>
<option value="Graphic Design">Graphic Design</option>
<option value="Web Design">Web Design</option>
<option value="App Design">App Design</option>
<option value="Other">Other</option>
</select>
<div class="help-block with-errors"></div></div>
</div>
<div class="fieldsets form-group"> <textarea id="form_message" name="message"  placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
<div class="help-block with-errors"></div>
</div>

<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck" name="example1" checked="checked">
<label class="custom-control-label" for="customCheck">I agree to the <a href="#">Terms &amp; Conditions</a> of Business Name.</label>
</div>
<div class="fieldsets mt20">
<button type="submit" class="lnk btn-main bg-btn">Submit <span class="circle"></span></button>
</div>
<p class="lh trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
</form>
</div>
</div>
<div class="col-lg-5 v-center">
<div class="contact-details">
<div class="contact-card wow fadeIn" data-wow-delay=".2s">
<div class="info-card v-center">
<span><i class="fas fa-phone-alt"></i> Phone:</span>
<div class="info-body">
<p class="lh">Assistance hours: Monday – Friday, 9 am to 5 pm</p>
<a href="tel:(+1)662-300-1685">(+1) 662-300-1685</a>
</div>
</div>
</div>
<div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
<div class="info-card v-center">
<span><i class="fas fa-envelope"></i> Email:</span>
<div class="info-body">
<p class="lh">Our support team will get back to in 24-h during standard business hours.</p>
<a href="mailto:Info@Sanguine.com">Info@SanguineIT.com</a>
</div>
</div>
</div>
<div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s">
<div class="info-card v-center">
<span><i class="fab fa-skype"></i> Skype:</span>
<div class="info-body">
<p class="lh">We Are Online: Monday – Friday, 9 am to 5 pm</p>
<a href="skype:niwax.company?call">Sanguine</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--End Enquire Form-->
<!--Start Location-->
<section class="contact-location pad-tb bglight">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="common-heading">
<span>Our Locations</span>
<h2>Our office</h2>
</div>
</div>
</div>
<div class="row justify-content-center upset shape-numm">

<div class="col-lg-6 col-sm-12 shape-loc wow fadeInUp" data-wow-delay=".2s">
                  <div class="office-card">
                     <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <img src="images/location/newyork.png" alt="New York" class="img-fluid" />
                     </div>
                     <div class="office-text">
                        <h4>US</h4>
                        <p class="lh">488, Department Lake Brooklyn, NY 11203.</p>
                        <a href="#" class="btn-outline rount-btn"><i class="fas fa-map-marker-alt"></i></a>
                        <a href="tel:(+1)662-300-1685"  class="btn-outline rount-btn"><i class="fas fa-phone-alt"></i></a>
                        <a href="mailto:Info@Sanguine.com"  class="btn-outline rount-btn"><i class="fas fa-envelope"></i></a>
                        <a href="#"  class="btn-outline rount-btn"><i class="fab fa-skype"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12 shape-loc wow fadeInUp" data-wow-delay=".5s">
                  <div class="office-card">
                     <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <img src="images/location/sydeny.png" alt="sydney" class="img-fluid" />
                     </div>
                     <div class="office-text">
                        <h4>India</h4>
                        <p class="lh">A-165, First Floor, Sec-62, Noida, U.P. 201301.</p>
                        <a href="#"  class="btn-outline rount-btn"><i class="fas fa-map-marker-alt"></i></a>
                        <a href="tel:9971726173" target="blank" class="btn-outline rount-btn"><i class="fas fa-phone-alt"></i></a>
                        <a href="mailto:Info@Sanguine.com" target="blank" class="btn-outline rount-btn"><i class="fas fa-envelope"></i></a>
                        <a href="#" target="blank" class="btn-outline rount-btn"><i class="fab fa-skype"></i></a>
                     </div>
                  </div>
               </div>
</div>
</div>
</section>
<!--End Location-->
<style>
.messages pre {
   font-weight: 540;
    font-size: 15px;
    color: green;
}
.messages {
    margin-top: -10px !important;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $(".messages").fadeIn(); // Fade in when the page loads

    // Fade out after 3 seconds
    setTimeout(function(){
      $(".messages").fadeOut();
    }, 10000);
  });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Check if the URL contains ?focus=name
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get("focus") === "name") {
            const nameField = document.getElementById("name"); // Ensure this ID matches your input field

            if (nameField) {
                setTimeout(() => {
                    nameField.focus(); // Set focus on the input field
                    nameField.select(); // Select the input text for better visibility
                }, 2500); // Slight delay to ensure the page is fully loaded

                nameField.scrollIntoView({ behavior: "smooth", block: "center" }); // Smooth scroll to the input field
            }
        }
    });
</script>

<?php include __DIR__ . '/includes/page-internal-links.php'; ?>
<?php include "footer.php" ?>