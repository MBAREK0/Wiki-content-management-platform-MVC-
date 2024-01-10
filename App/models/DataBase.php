<?php
namespace App\models;

require_once __DIR__ . '/../../config/config.php';
use PDO;
class DataBase
{
    private $host;
    private $dbname;
    private $username;
    private $password;

    public function __construct()
    {
        $this->host = DB_HOST;
        $this->dbname = DB_NAME;
        $this->username = DB_USER;
        $this->password = DB_PASS;
    }

    public function getconn()
    {
        try {
            // Create a PDO database connection
            $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);

            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;

        } catch (PDOException $e) {
            $error = "Connection failed: " . $e->getMessage();
            return $error;
        }
    }
    public function close(){
        
    }
}
