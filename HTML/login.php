<?php

    include "dbConnection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Sign-Up Page</title>
 <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .auth-container {
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    .auth-container h2 {
        margin-top: 0;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
    }

    .form-group input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .form-group button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
    }

    .switch-form {
        margin-top: 15px;
        color: #333;
        cursor: pointer;
    }
</style>
</head>

<body>
    <div class="auth-container" id="loginContainer">
        <h2>Login</h2>
        <div class="form-group">
            <label for="loginUsername">Username:</label>
            <input type="text" id="loginUsername" name="loginUsername" required>
        </div>
        <div class="form-group">
            <label for="loginPassword">Password:</label>
            <input type="password" id="loginPassword" name="loginPassword" required>
        </div>
        <div class="form-group">
            <button id="loginBtn">Login</button>
        </div>
        <p class="switch-form" id="switchToSignup">Don't have an account? Sign up here.</p>
    </div>

    <div class="auth-container" id="signupContainer" style="display: none;">
        <h2>Sign Up</h2>
        <div class="form-group">
            <label for="signupUsername">Username:</label>
            <input type="text" id="signupUsername" name="signupUsername" required>
        </div>
        <div class="form-group">
            <label for="signupPassword">Password:</label>
            <input type="password" id="signupPassword" name="signupPassword" required>
        </div>
        <div class="form-group">
            <button id="signupBtn">Sign Up</button>
        </div>
        <p class="switch-form" id="switchToLogin">Already have an account? Log in here.</p>
    </div>

    <script>
        const loginContainer = document.getElementById('loginContainer');
        const signupContainer = document.getElementById('signupContainer');
        const switchToSignup = document.getElementById('switchToSignup');
        const switchToLogin = document.getElementById('switchToLogin');
        const loginBtn = document.getElementById('loginBtn');
        const signupBtn = document.getElementById('signupBtn');

        switchToSignup.addEventListener('click', function () {
            loginContainer.style.display = 'none';
            signupContainer.style.display = 'block';
        });

        switchToLogin.addEventListener('click', function () {
            signupContainer.style.display = 'none';
            loginContainer.style.display = 'block';
        });

        loginBtn.addEventListener('click', function () {
            // Implement login logic here
            alert('Logged in!');
        });

        signupBtn.addEventListener('click', function () {
            // Implement sign-up logic here
            alert('Signed up!');
        });
    </script>
</body>

</html>