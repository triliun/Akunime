<?php
namespace Triliun\Akunime\Model;

use Triliun\Akunime\Config\DB;
<<<<<<< HEAD

class UserModel {
    public static function create($username, $email, $password) {
            // Hash password menggunakan Argon2
            $hashedPassword = password_hash($password, PASSWORD_ARGON2I);
            try {
                $db = DB::database();
                // Memeriksa apakah username sudah digunakan
                $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
                $stmt->bindParam(':username', $username);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    $errors = "Username sudah digunakan, silakan ganti!";
                } else {
                    // Tambahkan user baru ke database
                    $stmt = $db->prepare("INSERT INTO users (username, email, password,) VALUES (:username, :email, :password)");
                    $stmt->bindParam(':username', $username);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':password', $hashedPassword);
                    $stmt->execute();

                    echo "Registrasi berhasil, silakan login.";
                }
            } catch (PDOException $e) {
                $errors = "Error ketika registrasi: " . $e->getMessage();
            }


    }
}
=======
use PDO;
use PDOException;

class UserModel {
    public static function create($username, $email, $password) {
        try {
            $db = DB::database();

            $stmtUsername = $db->prepare("SELECT * FROM users WHERE username = :username");
            $stmtUsername->bindParam(':username', $username);
            $stmtUsername->execute();

            $stmtEmail = $db->prepare("SELECT * FROM users WHERE email = :email");
            $stmtEmail->bindParam(':email', $email);
            $stmtEmail->execute();

            if ($stmtUsername->rowCount() > 0 && $stmtEmail->rowCount() > 0) {
                self::setErrorMessage("Username dan email sudah digunakan, silakan ganti!");
            } elseif ($stmtUsername->rowCount() > 0) {
                self::setErrorMessage("Username sudah digunakan, silakan ganti!");
            } elseif ($stmtEmail->rowCount() > 0) {
                self::setErrorMessage("Email sudah digunakan, silakan ganti!");
            } else {
                $hashedPassword = password_hash($password, PASSWORD_ARGON2I);

                $stmt = $db->prepare("INSERT INTO users (username, email, password, reg_date) VALUES (:username, :email, :password, NOW())");
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $hashedPassword);
                $stmt->execute();
                self::setSuccessMessage("Registrasi berhasil, silahkan login!");
                return true;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function login($username, $password) {
            try {
                $db = DB::database();

                $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
                $stmt->bindParam(':username', $username);
                $stmt->execute();
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($user) {
                    // Verifikasi password menggunakan Argon2
                    if (password_verify($password, $user['password'])) {
                        $_SESSION['loggin'] = true;
                        $_SESSION['user_id'] = $user['id'];
                        $_SESSION['username'] = $user['username'];
                        $_SESSION['user_role'] = $user['role'];
                        session_regenerate_id(true);
                    } else {
                        self::setErrorMessage("Username atau Password salah");
                    }
                } else {
                    self::setErrorMessage("Username atau Password salah");
                }
            } catch (PDOException $e) {
                return false;
            }
    }

    public static function setErrorMessage($message) {
        $_SESSION['errors'] = $message;
    }

    public static function setSuccessMessage($message) {
        $_SESSION['success'] = $message;
    }
}
?>
>>>>>>> 986157cb9e663b03c1986e96f258827af0acb8fa
