<?php
namespace App\controllers;

class ContactController {
    public function index() {
        require_once __DIR__ ."/../../views/contact.php";
    }
}