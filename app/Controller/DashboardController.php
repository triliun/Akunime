<?php 
namespace Triliun\Akunime\Controller;


class DashboardController {

    public static function index() {
        include __DIR__ . '/../Config/config.php';
        include __DIR__ . '/../View/DashboardView.php';
    }
}

?>