<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $otp = htmlspecialchars($_POST['otp']);
    $phone = htmlspecialchars($_POST['phone']);

    // In a real scenario, validate OTP against a stored value or service
    // For demonstration, let's assume a static OTP for testing
    $expectedOTP = '123456'; // Replace with dynamically generated OTP

    if ($otp === $expectedOTP) {
        // Verification successful, redirect to buy_data.html or any other page
        $_SESSION['phone'] = $phone; // Store phone number in session for future use if needed
        header("Location: buy_data.html");
        exit();
    } else {
        // Verification failed
        header("Location: verify.php?phone=" . urlencode($phone) . "&error=Invalid OTP");
        exit();
    }
} else {
    // Redirect to login page if accessed directly without POST request
    header("Location: index.php");
    exit();
}
?>
