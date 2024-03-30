<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#242526" />
    <link rel="stylesheet" href="assets/css/member.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Login - Akunime</title>
</head>
<body>
<?php include 'layouts/Header.php'?>
<section class="form-body">
  <h2 class="form-title">Login</h2>
  <form action="#">
    <input type="text" class="input-form" placeholder="Enter your username">
    <input type="email" class="input-form" placeholder="Enter your email">
    <input type="password" class="input-form" placeholder="Enter your password">
    <a href="#" class="form-link">Forgot password?</a>
    <button type="submit" class="input-form form-button">Login</button>
  </form>
  <div class="form-text">
    <span>Don't have an account? 
      <a href="/register" class="form-link">Signup</a>
    </span>
  </div>
</section>
<script src="script.js" async></script>
</body>