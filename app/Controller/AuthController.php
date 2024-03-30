<?php

namespace Triliun\Akunime\Controller;

use Triliun\Akunime\Model\UserModel;

class AuthController {
    public static function showRegisterForm() {

        include __DIR__ . '/../Config/config.php';
        include __DIR__ . '/../View/RegisterView.php';
    }
    
public static function register() {
    session_start();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verify_password = $_POST['verify_password'];

    $errors = '';

    // Validasi input
    if (empty($username) || empty($email) || empty($password) || empty($verify_password)) {
        $errors = "Data tidak boleh kosong. ";
    }
    if ($password != $verify_password) {
        $errors = "Password tidak cocok dengan verifikasi password. ";
    }

    // Jika tidak ada kesalahan validasi, lakukan pendaftaran
    if (empty($errors)) {
        UserModel::create($username, $email, $password);
    } else {
        // Simpan pesan error di sesi
        $_SESSION['errors'] = $errors;
        // echo $_SESSION['errors'];
        // Arahkan kembali pengguna ke halaman registrasi
        header("Location: /register");
        exit();
    }
}


}
