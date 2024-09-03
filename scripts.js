function sendOTP() {
    var phoneNumber = document.getElementById('phone').value;

    // Perform AJAX request to send OTP using Twilio
    fetch('send_otp.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ phone: phoneNumber })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('OTP sent successfully to ' + phoneNumber);
            // Redirect to OTP verification page or handle OTP entry
            window.location.href = 'verify_otp.php';
        } else {
            alert('Failed to send OTP. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while sending OTP. Please try again.');
    });
}
