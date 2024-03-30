<?php
namespace Triliun\Akunime\Controller;

use Triliun\Akunime\Model\UserModel;

class AuthController {
    public static function showRegisterForm() {
        session_start();
        // Inisialisasi variabel errors
        $errors = '';
        $succes = '';

        // Periksa apakah ada pesan error dalam sesi
        if (isset($_SESSION['errors'])) {
            // Gabungkan pesan error dari sesi ke dalam variabel errors
            $errors = $_SESSION['errors'];
            
            // Hapus pesan error dari sesi
            unset($_SESSION['errors']);
        }

        // Periksa apakah ada pesan error dalam sesi
        if (isset($_SESSION['success'])) {
            // Gabungkan pesan error dari sesi ke dalam variabel errors
            $success = $_SESSION['success'];
            
            // Hapus pesan error dari sesi
            unset($_SESSION['success']);
        }
        include __DIR__ . '/../Config/config.php';
        include __DIR__ . '/../View/RegisterView.php';
    }

    public static function showLoginForm() {
        session_start();
        // Inisialisasi variabel errors
        $errors = '';
        $succes = '';

        // Periksa apakah ada pesan error dalam sesi
        if (isset($_SESSION['errors'])) {
            // Gabungkan pesan error dari sesi ke dalam variabel errors
            $errors = $_SESSION['errors'];
            
            // Hapus pesan error dari sesi
            unset($_SESSION['errors']);
        }

        // Periksa apakah ada pesan error dalam sesi
        if (isset($_SESSION['success'])) {
            // Gabungkan pesan error dari sesi ke dalam variabel errors
            $success = $_SESSION['success'];
            
            // Hapus pesan error dari sesi
            unset($_SESSION['success']);
        }
        include __DIR__ . '/../Config/config.php';
        include __DIR__ . '/../View/LoginView.php';
    }
    
    public static function logout() {
        session_start();
        session_unset();
        session_destroy();
        session_regenerate_id(true);
        self::redirect("");
    }

    public static function register() {
        session_start();

        $username = strtolower($_POST['username']);
        $username = str_replace(' ', '', $username);
        $email = $_POST['email'];
        $password = $_POST['password'];
        $verify_password = $_POST['verify_password'];

        if (empty($username) || empty($email) || empty($password) || empty($verify_password)) {
            self::setErrorMessage("Data tidak boleh kosong");
            self::redirect("register");
            return;
        }

        if (!preg_match('/^[a-zA-Z0-9]{4,}$/', $username)) {
            self::setErrorMessage("Username harus terdiri dari huruf dan angka, minimal 4 karakter");
            self::redirect("register");
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            self::setErrorMessage("Format email tidak valid");
            self::redirect("register");
            return;
        }

        if (strlen($password) < 8) {
            self::setErrorMessage("Password harus minimal 8 karakter");
            self::redirect("register");
            return;
        }

        if ($password !== $verify_password) {
            self::setErrorMessage("Password dan konfirmasi password tidak cocok");
            self::redirect("register");
            return;
        }

        // Call UserModel to handle registration
        if (empty($_SESSION["errors"])) {
            UserModel::create($username, $email, $password);
        } else {
            self::setErrorMessage("Gagal melakukan registrasi!");
        }

        self::redirect("register");
    }

    public static function login() {
        session_start();

        $username = strtolower($_POST['username']);
        $username = str_replace(' ', '', $username);
        $password = $_POST['password'];
        
        if (empty($username) || empty($password)) {
            self::setErrorMessage("Data tidak boleh kosong");
            self::redirect("login");
            return;
        }

        if (!preg_match('/^[a-zA-Z0-9]{4,}$/', $username)) {
            self::setErrorMessage("Username harus terdiri dari huruf dan angka, minimal 4 karakter");
            self::redirect("login");
            return;
        }

        if (strlen($password) < 8) {
            self::setErrorMessage("Password harus minimal 8 karakter");
            self::redirect("login");
            return;
        }    
        // Call UserModel to handle registration
        if (empty($_SESSION["errors"])) {
            UserModel::login($username, $password);
        } else {
            self::setErrorMessage("Gagal melakukan registrasi!");
        }

        self::redirect("");  
    }

    public static function setErrorMessage($message) {
        $_SESSION['errors'] = $message;
    }

    public static function setSuccessMessage($message) {
        $_SESSION['success'] = $message;
    }

    public static function redirect($url) {
        header("Location: /$url");
        exit();
    }
}
?>
