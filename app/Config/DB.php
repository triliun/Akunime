<?php

namespace Triliun\Akunime\Config;
require_once 'config.php';

use PDO;
use PDOException;

class DB {
    public static function database() {
        try {
            $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            die("Error connecting to MySQL: " . $e->getMessage());
        }
    }
}
