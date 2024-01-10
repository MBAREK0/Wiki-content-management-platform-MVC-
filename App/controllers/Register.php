<?php
namespace App\controllers;
use App\models\Autho_model;


class Register{

    public function Register()
    {
        function generateCsrfToken(){
    $token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $token;
    return $token;
        }
    $csrf = generateCsrfToken();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verify CSRF token
        if (isset($_POST['csrf_token']) || $_POST['csrf_token'] === $_SESSION['csrf_token']) {

           $username = htmlspecialchars($_POST['username']);           
           $email = htmlspecialchars($_POST['email']);
           $password = htmlspecialchars($_POST['password']);
           $verifyPassword = htmlspecialchars($_POST['verify-password']);
           if($password === $verifyPassword) {
            $pass = password_hash($password, PASSWORD_DEFAULT);
            
            $mosel_insert = new Autho_model();
            $insert = $mosel_insert->insert($username, $email, $pass);
            if($insert === false) {
                echo'some thing is ! please try again ';
            }
            else {
                header('Location:?route=login');
                exit();
            }
            }else{
                echo'password not match ! please try again ';
            }
    

        // Clear the CSRF token to prevent reuse
        unset($_SESSION['csrf_token']);
     

    }
  
  

    }
    require_once __DIR__ . '/../../views/register.php';
}
}