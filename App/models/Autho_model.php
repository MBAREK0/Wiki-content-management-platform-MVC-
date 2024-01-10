<?php
namespace App\models;
use App\models\DataBase;
use PDOException;
use PDO;

class Autho_model{

    public $conn  ;
    public $error; 
    public function __construct(){
        $conection = new DataBase;
        $pdo = $conection->getconn();
        $this->conn=$pdo;
    }
    public function insert($username, $email, $pass){
        try {
            $sql = "INSERT INTO `wikis`.`users` (`user_name`, `email`, `password_hash`) VALUES (:username, :email, :pass)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
            $stmt->execute();
    
            return $stmt->rowCount();
        } catch (PDOException $e) {
            $this->error = "Error: " . $e->getMessage();
            return false;
        }
    }
}