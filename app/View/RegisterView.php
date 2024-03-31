<<<<<<< HEAD
<?php
session_start();

// Inisialisasi variabel errors
$errors = '';

// Periksa apakah ada pesan error dalam sesi
if (isset($_SESSION['errors'])) {
    // Gabungkan pesan error dari sesi ke dalam variabel errors
    $errors = $_SESSION['errors'];
    
    // Hapus pesan error dari sesi
    unset($_SESSION['errors']);
}
?>
=======
>>>>>>> 986157cb9e663b03c1986e96f258827af0acb8fa
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#242526" />
    <link rel="stylesheet" href="assets/css/member.css">
<<<<<<< HEAD
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
=======
    <!-- <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> -->
>>>>>>> 986157cb9e663b03c1986e96f258827af0acb8fa
    <title>Register - Akunime</title>
</head>
<body>
<?php include 'layouts/Header.php'?>
<section class="form-body">
  <h2 class="form-title">Register</h2>
  <form method="POST">
<<<<<<< HEAD
    <input type="text" name="username" class="input-form" placeholder="Create a username">
    <input type="email" name="email" class="input-form" placeholder="Enter your email">
    <input type="password" name="password" class="input-form" placeholder="Create a password">
    <input type="password" name="verify_password" class="input-form" placeholder="Confirm your password">
    <button type="submit" class="input-form form-button">Signup</button>
  </form>
    <?php if (!empty($errors)): ?>
        <div style="color: red;">
           <p><?= $errors ?></p>
        </div>
    <?php endif; ?>
=======
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
>>>>>>> 986157cb9e663b03c1986e96f258827af0acb8fa
  <div class="form-text">
    <span>Already have an account?
      <a href="/login" class="form-link">Login</a>
    </span>
  </div>
</section>
<<<<<<< HEAD
=======
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
>>>>>>> 986157cb9e663b03c1986e96f258827af0acb8fa
<script src="script.js" async></script>
</body>
</html>
