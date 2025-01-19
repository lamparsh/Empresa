<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/Style_Login.css"> 
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        
        <!-- Error message placeholder -->
        <p class="error-message" id="error-message"></p>

        <form action="../Events/EventsView.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="login-button">Login</button>
            </div>
        </form>

        <div class="extra-links">
            <a href="forgot_password.html">Forgot your password?</a>
            <br>
            <a href="register.html">Create an account</a>
        </div>
    </div>
</body>
</html>
