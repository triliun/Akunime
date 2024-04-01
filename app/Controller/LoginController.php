<?php
namespace Triliun\Akunime\Controller;

use Triliun\Akunime\Config\DB;

class LoginController {

    public static function login() {
        // DB::database();
        include __DIR__ . '/../Config/config.php';
        include __DIR__ . '/../View/LoginView.php';

    }
}
