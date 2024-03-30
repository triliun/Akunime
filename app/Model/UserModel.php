<?php
namespace Triliun\Akunime\Model;

use Triliun\Akunime\Config\DB;

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
