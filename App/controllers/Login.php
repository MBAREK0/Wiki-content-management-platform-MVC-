<?php
namespace App\controllers;
use App\models\Autho_model;

class Login{

    public function Login(){
        
        function generateToken(){
            $token = bin2hex(random_bytes(32));
            $_SESSION['csrf_token_login'] = $token;
            return $token;
                }
            $csrf = generateToken();
        
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Verify CSRF token
                if (isset($_POST['csrf_token_login']) || $_POST['csrf_token_login'] === $_SESSION['csrf_token_login']) {
        

                    $email = htmlspecialchars($_POST['email']);
                    $pass = htmlspecialchars($_POST['password']);
                    
                    $mosel_check = new Autho_model();
                    $check = $mosel_check->check($email, $pass);
                    print_r($mosel_check->error);
                    if ($check) {
                     $_SESSION['email'] =$check['email'] ;
                     $_SESSION['username'] =$check['user_name'] ;
                     $_SESSION['role'] =$check['role'] ;
                     
                     if($check['role'] === 'author'){
                        header('Location: ?route=home');
                        exit();
                     }
                      

                    }
        
               
                     unset($_SESSION['csrf_token']);
             
        
            }
          
          
        
            }
           
        require_once __DIR__ . '/../../views/login.php';
    }
}