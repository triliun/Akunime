<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#242526" />
    <link rel="stylesheet" href="assets/css/member.css">
    <title>Login - Akunime</title>
</head>
<body>
<?php include 'layouts/Header.php'?>
<section class="form-body">
  <h2 class="form-title">Login</h2>
  <form method="POST">
    <input type="text" name="username" id="username" class="input-form" placeholder="Enter your username" required>
    <input type="password" name="password" id="password" class="input-form" placeholder="Enter your password" required>
    <a href="#" class="form-link">Forgot password?</a>
    <?php if (!empty($errors)): ?>
  <div class="form-text">
    <span><?= $errors?></span>
  </div>
    <?php elseif (!empty($success)): ?>
  <div class="form-text">
    <span><?= $success?></span>
  </div>
    <?php endif; ?>
    <?php 
    if (!empty($_SESSION['user_role'])) {
    echo $_SESSION['user_id'];  
    echo $_SESSION['username'];  
    echo $_SESSION['user_role'];  
    }
     ?>
    <button type="submit" class="input-form form-button">Login</button>
  </form>
  <div class="form-text">
    <span>Don't have an account? 
      <a href="/register" class="form-link">Signup</a>
    </span>
  </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var usernameInput = document.getElementById('username');
    var passwordInput = document.getElementById('password');
    
    var usernameRegex = /^[a-z0-9]{4,}$/;
    var passwordMinLength = 7;

    function validateUsername() {
        var username = usernameInput.value;
        if (!username.match(usernameRegex)) {
            usernameInput.setCustomValidity("Username harus terdiri dari huruf kecil, angka, dan minimal 4 karakter.");
        } else {
            usernameInput.setCustomValidity("");
        }
    }

    function validatePassword() {
        var password = passwordInput.value;
        if (password.length <= passwordMinLength) {
            passwordInput.setCustomValidity("Password harus lebih dari 8 karakter.");
        } else {
            passwordInput.setCustomValidity("");
        }
    }

    function sanitizeInput(event) {
        var inputChar = event.data || String.fromCharCode(event.which || event.keyCode);
        var isInvalid = /[A-Z\s]/.test(inputChar);
        if (isInvalid) {
            event.preventDefault();
            return false;
        }
        return true;
    }

    usernameInput.addEventListener("input", function(event) {
        if (!sanitizeInput(event)) {
            this.value = this.value.replace(/[A-Z\s]/g, '');
        }
        validateUsername();
    });

    passwordInput.addEventListener("input", function(event) {
        validatePassword();
    });
});
</script>
<script src="script.js" async></script>
</body>