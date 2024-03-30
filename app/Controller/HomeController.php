<?php
namespace Triliun\Akunime\Controller;
// use Triliun\Akunime\Model\HomeModel;
use Triliun\Akunime\Config\DB;




class HomeController {

    public static function index() {
        // DB::database();
        include __DIR__ . '/../Config/config.php';
        include __DIR__ . '/../View/HomeView.php';

    }
}
