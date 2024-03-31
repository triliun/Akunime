<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#242526" />
    <link rel="stylesheet" href="assets/css/member.css">
    <!-- <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> -->
    <title>Register - Akunime</title>
</head>
<body>
<?php include 'layouts/Header.php'?>
<section class="form-body">
  <h2 class="form-title">Register</h2>
  <form method="POST">
    <input type="text" name="username" id="username" class="input-form" placeholder="Create a username" required>
    <input type="email" name="email" id="email" class="input-form" placeholder="Enter your email" required>
    <input type="password" name="password" id="password" class="input-form" placeholder="Create a password" required>
    <input type="password" name="verify_password" id="verify_password" class="input-form" placeholder="Confirm your password" required>
    <?php if (!empty($errors)): ?>
  <div class="form-text">
    <span><?= $errors?></span>
  </div>
    <?php elseif (!empty($success)): ?>
  <div class="form-text">
    <span><?= $success?></span>
  </div>
    <?php endif; ?>
    <button type="submit" class="input-form form-button">Signup</button>
  </form>
  <div class="form-text">
    <span>Already have an account?
      <a href="/login" class="form-link">Login</a>
    </span>
  </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var usernameInput = document.getElementById('username');
    var passwordInput = document.getElementById('password');
    var verifyPasswordInput = document.getElementById('verify_password');
    
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

    function validateVerifyPassword() {
        var password = passwordInput.value;
        var verifyPassword = verifyPasswordInput.value;
        if (password !== verifyPassword) {
            verifyPasswordInput.setCustomValidity("Password dan konfirmasi password harus sama.");
        } else {
            verifyPasswordInput.setCustomValidity("");
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

    verifyPasswordInput.addEventListener("input", function(event) {
        validateVerifyPassword();
    });
});
</script>
<script src="script.js" async></script>
</body>
</html>
