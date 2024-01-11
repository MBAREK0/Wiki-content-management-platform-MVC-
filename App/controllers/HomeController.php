<?php
namespace App\controllers;
use App\models\DynamicCrud;

class HomeController {
    public function index() {

        $view = new DynamicCrud();
        $wikis = $view->read('created_at',"wikis");
        print_r($wikis);

        require_once __DIR__ ."/../../views/home.php";
    }
}