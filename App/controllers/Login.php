<?php
namespace App\controllers;
use App\models\Autho_model;

class Login{

    public function Login(){
        require_once __DIR__ . '/../../views/login.php';
    }
}