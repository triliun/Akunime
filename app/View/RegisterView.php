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
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#242526" />
    <link rel="stylesheet" href="assets/css/member.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Register - Akunime</title>
</head>
<body>
<?php include 'layouts/Header.php'?>
<section class="form-body">
  <h2 class="form-title">Register</h2>
  <form method="POST">
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
  <div class="form-text">
    <span>Already have an account?
      <a href="/login" class="form-link">Login</a>
    </span>
  </div>
</section>
<script src="script.js" async></script>
</body>
</html>
