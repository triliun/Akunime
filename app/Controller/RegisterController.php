<?php
namespace Triliun\Akunime\Controller;

use Triliun\Akunime\Config\DB;

class RegisterController {

    public static function register() {
        // DB::database();
        include __DIR__ . '/../Config/config.php';
        include __DIR__ . '/../View/RegisterView.php';

    }
}
