<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script defer src="/assets/js/languaje.js"></script>
</head>
<body>
    <div class="container">
        <div class="welcome-section">
            <h1 id="welcome-heading">Welcome to Our Platform!</h1>
            <p class="pone" id="welcome-description">Join our community and enjoy exclusive features</p>
            <p class="ptwo" id="welcome-invitation">Ready to get started? Join now!</p>
        </div>
        <div class="form-section">
            <div class="form-container">
                <div class="language-toggle">
                    <select id="language-select" onchange="setLanguage(this.value)">
                        <option value="en">English</option>
                        <option value="es">Español</option>
                    </select>
                </div>
                
                <h2 id="form-heading">Get Started</h2>
                
                <form action="register.php" method="POST">
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" required>
                    <div class="terms">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms" id="terms-label">I have read and agree to the Terms and Conditions</label>
                    </div>
                    <button type="submit" class="signup-btn" id="signup-btn">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
