<?php


$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch($route){

    case 'home': require_once __DIR__ . '/../views\Admin\admin.php' ;break;
    case 'login': echo 'login' ;break;
    case 'logout': echo 'logout' ;break;

}