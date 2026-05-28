// Newsletter subscription form handler
document.addEventListener("DOMContentLoaded", function () {
  // Find newsletter subscription forms
  const newsletterForms = document.querySelectorAll(
    'form[action="/newsletter-mail.php"]'
  );

  newsletterForms.forEach(function (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      const submitButton = form.querySelector('button[type="submit"]');
      const emailInput = form.querySelector('input[name="emails"]');
      const originalButtonText = submitButton.innerHTML;

      // Validate email
      if (!emailInput.value || !isValidEmail(emailInput.value)) {
        showMessage("Please enter a valid email address.", "error");
        return;
      }

      // Disable button and show loading state
      submitButton.disabled = true;
      submitButton.innerHTML =
        'Subscribing... <i class="fas fa-spinner fa-spin"></i>';

      // Create form data
      const formData = new FormData(form);

      // Submit form
      fetch("/newsletter-mail.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => {
          if (response.redirected) {
            // Follow the redirect to thank you page
            window.location.href = response.url;
          } else if (response.ok) {
            return response.text();
          } else {
            throw new Error("Network response was not ok");
          }
        })
        .then((data) => {
          if (data) {
            showMessage(data, "error");
            // Reset button
            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonText;
          }
        })
        .catch((error) => {
          console.error("Error:", error);
          showMessage("Something went wrong. Please try again later.", "error");
          // Reset button
          submitButton.disabled = false;
          submitButton.innerHTML = originalButtonText;
        });
    });
  });

  // Email validation function
  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  // Show message function
  function showMessage(message, type) {
    // Remove existing messages
    const existingMessage = document.querySelector(".newsletter-message");
    if (existingMessage) {
      existingMessage.remove();
    }

    // Create message element
    const messageDiv = document.createElement("div");
    messageDiv.className = `newsletter-message alert-${type}`;
    messageDiv.textContent = message;

    // Style the message
    messageDiv.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 5px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            max-width: 350px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transform: translateX(100%);
            transition: transform 0.3s ease;
            ${
              type === "error"
                ? "background-color: #dc3545;"
                : "background-color: #28a745;"
            }
        `;

    // Add to page
    document.body.appendChild(messageDiv);

    // Animate in
    setTimeout(() => {
      messageDiv.style.transform = "translateX(0)";
    }, 100);

    // Remove after 5 seconds
    setTimeout(() => {
      messageDiv.style.transform = "translateX(100%)";
      setTimeout(() => {
        if (messageDiv.parentNode) {
          messageDiv.parentNode.removeChild(messageDiv);
        }
      }, 300);
    }, 5000);
  }
});
