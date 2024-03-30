<?php
namespace Triliun\Akunime\Model;

class HomeModel {
    public static function getData() {
        // Logika untuk mendapatkan data
        $datas = ['anime1', 'anime2', 'anime3', 'anime4'];
        foreach ($datas as $data) {
            echo $data;
        }
        return;
    }
}
