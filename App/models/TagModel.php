<?php
namespace App\models;
use App\models\DynamicCrud;
use App\models\DataBase;
use PDOException;
use PDO;


class TagModel extends DynamicCrud
{
    public function __construct(){
        $conection = new DataBase;
        $pdo = $conection->getconn();
        $this->conn=$pdo;
        parent::__construct('tags');
    }
    public function tags($condition){
        try {
            $query = "SELECT T.tag_name,T.tag_id FROM tags T INNER JOIN wikitags WT ON T.tag_id = WT.tag_id WHERE WT.wiki_id = $condition";
            
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $this->error = "Read operation failed: " . $e->getMessage();
            return false;
        }
    }
}

