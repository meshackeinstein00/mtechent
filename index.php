<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Comfast WiFi</h1>
        <p>Your Reliable WiFi Provider</p>
    </header>
    <nav>
        <a href="index.php">LOGIN</a>
        <a href="register.php">REGISTER</a>
    </nav>
    <form id="login-form" action="verify_process.php" method="POST">
        <h1>Enter Your Phone Number</h1>
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>
        <button type="submit">Get OTP</button>
    </form>
    <div class="register-link">
        <a href="register.php"><b>Don't have an account?</b> Click here to Register</a>
    </div>

    <script src="./scripts.js"></script>
</body>
</html>
