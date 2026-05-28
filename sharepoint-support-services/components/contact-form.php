<?php

/**
 * Contact Form Component
 * Displays the contact form
 */

$email_handler = $email_handler ?? '/send-mail.php';
$subject = $subject ?? 'New Contact Form Submission';
$redirect_url = $redirect_url ?? '/thankyou.php';
?>

<div id="contact-form" class="lg:w-1/3 bg-white/90 backdrop-blur-md text-black p-8 rounded-lg shadow-2xl mt-12 lg:mt-10 border border-white/20">
    <h2 class="text-2xl font-bold mb-3 bg-gradient-to-r from-deep-ocean to-mystic-violet bg-clip-text text-transparent">Contact Us</h2>

    <!-- Success/Error Messages -->
    <div id="form-messages" class="hidden mb-4 p-3 rounded-lg text-sm"></div>

    <form id="contact-form-element" action="/send-mail.php" method="POST" novalidate>
        <input type="hidden" name="_next" value="<?= $redirect_url ?>">
        <input type="hidden" name="_subject" value="<?= $subject ?>">

        <div class="mb-2">
            <input type="text" name="name" id="name" placeholder="Full Name*" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all" required />
        </div>

        <div class="mb-2">
            <input type="email" name="email" id="email" placeholder="Business Email Address*" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all" required />
        </div>

        <?php include "phone-input-optimized.php" ?>

        <div class="mb-2">
            <input type="text" name="organization" id="organization" placeholder="Organization/ Institution*" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all" required />
        </div>

        <div class="mb-2">
            <textarea name="message" id="message" placeholder="Message*" class="w-full px-4 py-2 border rounded-lg h-20 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all resize-none" required></textarea>
        </div>

        <button type="submit" id="submit-btn" class="w-full bg-gradient-to-r from-sunset-orange to-coral-red hover:from-coral-red hover:to-sunset-orange text-white px-4 py-2 rounded-lg font-bold transition-all duration-300 transform hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed mt-2">
            <span class="btn-text">Submit</span>
            <span class="btn-loading hidden">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Sending...
            </span>
        </button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contact-form-element');
        const submitBtn = document.getElementById('submit-btn');
        const btnText = submitBtn.querySelector('.btn-text');
        const btnLoading = submitBtn.querySelector('.btn-loading');
        const messagesDiv = document.getElementById('form-messages');

        // Form validation
        function validateField(field) {
            let isValid = true;
            let errorMessage = '';

            // Clear previous error
            field.classList.remove('border-red-500');

            // Required field validation
            if (field.hasAttribute('required') && !field.value.trim()) {
                isValid = false;
                if (field.type === 'email') {
                    errorMessage = 'Please enter a valid email address';
                }
            } else if (field.type === 'email' && field.value.trim()) {
                // Email validation
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(field.value.trim())) {
                    isValid = false;
                    errorMessage = 'Please enter a valid email address';
                }
            } else if (field.type === 'tel' && field.value.trim()) {
                // Phone validation
                const phoneRegex = /^[+]?[0-9\s\-\(\)]{7,15}$/;
                if (!phoneRegex.test(field.value.trim())) {
                    isValid = false;
                }
            }

            if (!isValid) {
                field.classList.add('border-red-500');
                field.style.borderWidth = '2px';
            } else {
                field.classList.remove('border-red-500');
                field.style.borderWidth = '';
            }

            return {
                isValid,
                errorMessage
            };
        }

        // Real-time validation
        form.querySelectorAll('input, textarea').forEach(field => {
            // Skip hidden fields
            if (field.type === 'hidden') return;

            field.addEventListener('blur', () => validateField(field));
            field.addEventListener('input', () => {
                if (field.type !== 'hidden' && field.classList.contains('border-red-500')) {
                    validateField(field);
                }
            });

            // Add focus handling to clear the red border
            field.addEventListener('focus', () => {
                field.classList.remove('border-red-500');
                field.style.borderWidth = '';
            });
        });

        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Validate all fields
            let isFormValid = true;
            let emptyFieldsExist = false;
            let phoneField = form.querySelector('input[name="phone"]');
            const emailField = form.querySelector('input[type="email"]');
            let onlyEmailIsInvalid = true;

            // First check if any required fields are empty
            form.querySelectorAll('input[required], textarea[required]').forEach(field => {
                // Skip hidden fields
                if (field.type !== 'hidden') {
                    const validation = validateField(field);
                    if (!validation.isValid) {
                        isFormValid = false;

                        // Check if field is empty (not filled)
                        if (!field.value.trim()) {
                            emptyFieldsExist = true;
                            onlyEmailIsInvalid = false;
                        }
                        // Special case: if it's not the email field, that means other fields have validation issues
                        else if (field.type !== 'email') {
                            onlyEmailIsInvalid = false;
                        }

                        // Make sure border is visible
                        field.classList.add('border-red-500');
                        field.style.borderWidth = '2px';
                    }
                }
            });

            if (!isFormValid) {
                // If we have empty fields or non-email validation issues, show general message
                if (emptyFieldsExist || !onlyEmailIsInvalid) {
                    showMessage('Please fill all required fields', 'error');
                }
                // If all required fields are filled but only email is invalid, show email error
                else if (onlyEmailIsInvalid && emailField && !emailField.value.trim()) {
                    showMessage('Please enter a valid email address', 'error');
                }
                // Only email format is invalid
                else if (onlyEmailIsInvalid) {
                    showMessage('Please enter a valid email address', 'error');
                }
                return;
            }

            // Show loading state
            submitBtn.disabled = true;
            btnText.classList.add('hidden');
            btnLoading.classList.remove('hidden');

            // Submit form
            const formData = new FormData(form);

            fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (response.redirected) {
                        // Server sent a redirect, go to the redirect URL
                        window.location.href = response.url;
                    } else if (response.ok) {
                        // Success but no redirect, manually go to thank you page
                        const redirectUrl = formData.get('_next') || '/thankyou.php';
                        window.location.href = redirectUrl;
                    } else {
                        // Error response
                        return response.text().then(errorText => {
                            showMessage(errorText || 'Error sending message', 'error');
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showMessage('Error sending message', 'error');
                })
                .finally(() => {
                    // Reset loading state (only if we're still on the same page)
                    setTimeout(() => {
                        submitBtn.disabled = false;
                        btnText.classList.remove('hidden');
                        btnLoading.classList.add('hidden');
                    }, 100);
                });
        });

        function showMessage(message, type) {
            messagesDiv.className = `mb-2 p-2 rounded-lg text-xs ${type === 'error' ? 'bg-red-100 text-red-700 border border-red-300' : 'bg-green-100 text-green-700 border border-green-300'}`;
            messagesDiv.textContent = message;
            messagesDiv.classList.remove('hidden');

            // Auto-hide after 5 seconds
            setTimeout(() => {
                messagesDiv.classList.add('hidden');
            }, 5000);
        }
    });
</script>