<?php
namespace App\controllers;
use App\controllers\Author\WikiController;


class HomeController {
    public function index() {

        $controller = new WikiController;
        $wikis = $controller-> display();
        



        require_once __DIR__ ."/../../views/home.php";
    }
}