<?php
include "./config/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication - Login & Signup</title>
    <link rel="stylesheet" href="./design/index.css">
</head>
<body>
    <div class="container">
        <!-- Login Form -->
        <div class="form-container" id="login-form">
            <div class="form-box">
                <div class="header">
                    <div class="logo">
                        <img src="https://images.pexels.com/photos/2387793/pexels-photo-2387793.jpeg" alt="Logo" class="logo-img">
                    </div>
                    <h1>Register Now </h1>
                    <p>Sign in to your account to continue</p>
                </div>
              <form method="post" action="./controller/controller.php">
                  <div class="input-group">
                        <input type="text" name="regname" placeholder="Enter your username"  required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="regpassword" placeholder="type your password" required> 
                    </div>
                    <button name="register" class="submit-btn">Sign Up</button>
                    <div class="divider">
                        <span>Or continue with</span>
                    </div>
                    <p class="switch-form">
                        Already have an account? 
                        <a href="#" onclick="toggleForm('signup-form')">Sign In</a>
                    </p>
                    
                </form>
            </div>
        </div>

        <!-- Signup Form -->
        <div class="form-container hidden" id="signup-form">
            <div class="form-box">
                <div class="header">
                    <div class="logo">
                        <img src="https://images.pexels.com/photos/2387793/pexels-photo-2387793.jpeg" alt="Logo" class="logo-img">
                    </div>
                    <h1>Log In👋</h1>
                    <p>Get started with your free account</p>
                </div>
                <form method="POST" action="./controller/controller.php">
                    <div class="input-group">
                        <input type="text" name="username" placeholder="Enter your username"  required>
                    </div>
                    
                    <div class="input-group">
                        <input type="password" name="password" placeholder="type your password" required>
                    
                    </div>
                    
                    <button name="login" class="submit-btn">Login Now</button>
                    <div class="divider">
                        <span>Or continue with</span>
                    </div>
                    <p class="switch-form">
                        Don't have an account? 
                        <a href="#" onclick="toggleForm('login-form')">Sign up</a>
                    </p>
                    
                </form>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', () => {
                const input = button.parentElement.querySelector('input');
                if (input.type === 'password') {
                    input.type = 'text';
                    button.classList.add('showing');
                } else {
                    input.type = 'password';
                    button.classList.remove('showing');
                }
            });
        });

        // Toggle between login and signup forms
        function toggleForm(formId) {
            document.querySelectorAll('.form-container').forEach(form => {
                form.classList.add('hidden');
            });
            document.getElementById(formId).classList.remove('hidden');
        }
    </script>
</body>
</html>