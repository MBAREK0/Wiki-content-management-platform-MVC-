<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\controllers\Login;
use App\controllers\Register;



$route = isset($_GET['route']) ? $_GET['route'] : 'register';

switch($route){

    case 'register': 
        $cons= new Register;
        $con =$cons->Register();
        break;

        case 'login': 
            $cons= new Login;
            $con =$cons->Login();
            break;
            case 'home': require_once __DIR__ . '/../views/Author/author.php';break;
        
    
}