<?php
namespace App\controllers;

class AboutController {
    public function index() {
        require_once __DIR__ ."/../../views/about.php";
    }
}