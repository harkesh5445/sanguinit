$.ajax({
    type: "POST",
    url: url,
    data: $(this).serialize(),
    success: function (data) {
        if (data && data.success) {
            // Redirect to the thank you page
            window.location.href = "http://sanguineit.com/thankyou.php";
        } else {
            console.error("Form submission failed.");
        }
    },
    error: function (xhr, status, error) {
        console.error("AJAX Error:", error);
    }
});
