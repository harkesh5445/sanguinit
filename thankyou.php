<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  // Determine the context - newsletter or contact form
  $isNewsletter = (isset($_GET['type']) && $_GET['type'] === 'newsletter') ||
    (strpos($_SERVER['HTTP_REFERER'] ?? '', 'newsletter') !== false);

  if ($isNewsletter) {
    echo '<title>Newsletter Subscription Confirmed - SanguineIT Technologies</title>';
    echo '<meta name="description" content="Thank you for subscribing to New Insights Weekly newsletter from SanguineIT Technologies.">';
  } else {
    echo '<title>Thank You - SanguineIT Technologies</title>';
    echo '<meta name="description" content="Thank you for contacting SanguineIT Technologies. We will get back to you soon with our SharePoint solutions.">';
  }
  ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="/images/favicon.png">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --success-color: #10b981;
      --text-dark: #1f2937;
      --text-light: #6b7280;
      --white: #ffffff;
      --shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
      --shadow-lg: 0 35px 60px -12px rgba(0, 0, 0, 0.15);
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: var(--primary-gradient);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      position: relative;
      overflow-x: hidden;
    }

    /* Animated background elements */
    body::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
      background-size: 50px 50px;
      animation: float 20s ease-in-out infinite;
      z-index: 0;
    }

    @keyframes float {

      0%,
      100% {
        transform: translate(0, 0) rotate(0deg);
      }

      33% {
        transform: translate(30px, -30px) rotate(120deg);
      }

      66% {
        transform: translate(-20px, 20px) rotate(240deg);
      }
    }

    .thank-you-container {
      background: var(--white);
      border-radius: 24px;
      padding: 60px 40px;
      text-align: center;
      max-width: 600px;
      width: 100%;
      box-shadow: var(--shadow-lg);
      position: relative;
      z-index: 1;
      animation: slideUp 0.8s ease-out;
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .success-icon {
      width: 120px;
      height: 120px;
      margin: 0 auto 30px;
      background: linear-gradient(135deg, var(--success-color), #059669);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 20px 40px rgba(16, 185, 129, 0.3);
      animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {

      0%,
      100% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.05);
      }
    }

    .success-icon svg {
      width: 60px;
      height: 60px;
      color: var(--white);
    }

    .company-logo {
      width: 80px;
      height: 80px;
      margin: 0 auto 20px;
      background: var(--primary-gradient);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: var(--shadow);
    }

    .company-logo img {
      width: 50px;
      height: 50px;
      object-fit: contain;
    }

    h1 {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 16px;
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .subtitle {
      font-size: 1.25rem;
      color: var(--text-light);
      margin-bottom: 32px;
      line-height: 1.6;
    }

    .message-box {
      background: linear-gradient(135deg, #f8fafc, #e2e8f0);
      border-left: 4px solid var(--success-color);
      padding: 24px;
      border-radius: 12px;
      margin: 32px 0;
      text-align: left;
    }

    .message-box h3 {
      color: var(--text-dark);
      font-weight: 600;
      margin-bottom: 12px;
    }

    .message-box p {
      color: var(--text-light);
      line-height: 1.6;
      margin-bottom: 8px;
    }

    .action-buttons {
      display: flex;
      gap: 16px;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 40px;
    }

    .btn {
      padding: 14px 32px;
      border-radius: 12px;
      font-weight: 600;
      text-decoration: none;
      font-size: 1rem;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      border: none;
      cursor: pointer;
    }

    .btn-primary {
      background: var(--primary-gradient);
      color: var(--white);
      box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
    }

    .btn-secondary {
      background: var(--white);
      color: var(--text-dark);
      border: 2px solid #e5e7eb;
    }

    .btn-secondary:hover {
      background: #f9fafb;
      border-color: #d1d5db;
      transform: translateY(-1px);
    }

    .contact-info {
      /* background: linear-gradient(135deg, #fef3c7, #fde68a); */
     background: linear-gradient(135deg, #d2cfe0, #d1d8ff);
      border-radius: 12px;
      padding: 20px;
      margin-top: 32px;
    }

    .contact-info h4 {
      color: var(--text-dark);
      font-weight: 600;
      margin-bottom: 12px;
    }

    .contact-details {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      gap: 16px;
    }

    .contact-item {
      text-align: center;
    }

    .contact-item strong {
      display: block;
      color: var(--text-dark);
      font-size: 0.9rem;
      margin-bottom: 4px;
    }

    .contact-item span {
      color: var(--text-light);
      font-size: 0.85rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .thank-you-container {
        padding: 40px 20px;
        margin: 10px;
      }

      h1 {
        font-size: 2rem;
      }

      .success-icon {
        width: 100px;
        height: 100px;
      }

      .success-icon svg {
        width: 50px;
        height: 50px;
      }

      .action-buttons {
        flex-direction: column;
      }

      .btn {
        width: 100%;
        justify-content: center;
      }

      .contact-details {
        flex-direction: column;
        text-align: center;
      }
    }

    @media (max-width: 480px) {
      body {
        padding: 10px;
      }

      .thank-you-container {
        padding: 30px 15px;
      }

      h1 {
        font-size: 1.8rem;
      }

      .subtitle {
        font-size: 1.1rem;
      }
    }
  </style>
</head>

<body>
  <div class="thank-you-container">
    <!-- Success Icon -->
    <div class="success-icon">
      <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
      </svg>
    </div>

    <!-- Company Logo -->
    <!-- <div class="company-logo">
      <img src="/images/logo/logo.png" alt="SanguineIT Technologies" onerror="this.style.display='none'">
    </div> -->

    <!-- Main Message -->
    <h1>Thank You!</h1>
    <?php if ($isNewsletter): ?>
      <p class="subtitle">
        You have successfully subscribed to our <strong>New Insights Weekly</strong> newsletter!
      </p>
    <?php else: ?>
      <p class="subtitle">
        Your message has been successfully sent to our team at SanguineIT Technologies.
      </p>
    <?php endif; ?>

    <!-- Information Box -->
    <div class="message-box">
      <?php if ($isNewsletter): ?>
        <h3>What to expect?</h3>
        <p><strong>📧</strong> Weekly insights delivered to your inbox</p>
        <p><strong>🚀</strong> Latest SharePoint tips and best practices</p>
        <p><strong>📰</strong> Industry news and technology updates</p>
        <p><strong>🎯</strong> Exclusive content and case studies</p>
        <p><strong>⚙️</strong> You can unsubscribe anytime</p>
      <?php else: ?>
        <h3>What happens next?</h3>
        <p><strong>✓</strong> Our SharePoint experts will review your requirements</p>
        <p><strong>✓</strong> You'll receive a response within 24 hours</p>
        <p><strong>✓</strong> We'll schedule a consultation call to discuss your needs</p>
        <p><strong>✓</strong> Get a customized solution proposal for your business</p>
      <?php endif; ?>
    </div>

    <!-- Contact Information -->
    <div class="contact-info">
      <h4>Need immediate assistance?</h4>
      <div class="contact-details">
        <div class="contact-item">
          <strong>US Office</strong>
          <span>+1-662-300-1685</span>
        </div>
        <div class="contact-item">
          <strong>India Office</strong>
          <span>+91-958-2838-747</span>
        </div>
        <div class="contact-item">
          <strong>Email</strong>
          <span>info@sanguineit.com</span>
        </div>
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="action-buttons">
      <a href="/" class="btn btn-primary">
        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
        </svg>
        Back to Home
      </a>
      <a href="/sharepoint-support-services.php" class="btn btn-secondary">
        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
        </svg>
        Our Services
      </a>
    </div>
  </div>

  <!-- Auto redirect script (optional) -->
  <script>
    // Optional: Auto-redirect after 30 seconds
    // setTimeout(() => {
    //     window.location.href = '/';
    // }, 30000);

    // Add some interactive elements
    document.addEventListener('DOMContentLoaded', function() {
      // Add smooth scroll behavior
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
          });
        });
      });

      // Track page view (if you have analytics)
      if (typeof gtag !== 'undefined') {
        gtag('event', 'page_view', {
          page_title: 'Thank You Page',
          page_location: window.location.href
        });
      }
    });
  </script>
</body>

</html>