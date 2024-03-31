<?php
namespace Triliun\Akunime\Controller;
// use Triliun\Akunime\Model\HomeModel;
use Triliun\Akunime\Config\DB;




class HomeController {

    public static function index() {
<<<<<<< HEAD
        // DB::database();
        include __DIR__ . '/../Config/config.php';
        include __DIR__ . '/../View/HomeView.php';

=======
        session_start();
        // DB::database();
        include __DIR__ . '/../Config/config.php';
        include __DIR__ . '/../View/HomeView.php';
        
>>>>>>> 986157cb9e663b03c1986e96f258827af0acb8fa
    }
}
