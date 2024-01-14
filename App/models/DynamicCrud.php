<?php
namespace App\models;
use App\models\DataBase;
use PDOException;
use PDO;
class DynamicCrud {
    private $conn;
    private $error;
    public $tableName;

    public function __construct($Tname) {
        $conection = new DataBase;
        $pdo = $conection->getconn();
        $this->conn=$pdo;
        $this -> tableName = $Tname;
    }

    public function getError() {
        return $this->error;
    }

    public function create($data) {
        try {
            $columns = implode(',', array_keys($data));
            $values = implode(',', array_fill(0, count($data), '?'));

            $stmt = $this->conn->prepare("INSERT INTO $this->tableName ($columns) VALUES ($values)");

            $stmt->execute(array_values($data));

            return true;
        } catch (PDOException $e) {
            $this->error = "Insert failed: " . $e->getMessage();
            return false;
        }
    }

    public function read($column ="", $condition = "" ,$limit = "") {
        try {
            $query = "SELECT * FROM $this->tableName ";
            
            if (!empty($column)) {
                if(!empty($limit)){
                    
                    if($this->tableName == 'wikis'){
                        $query .= "WHERE archived_at IS NULL ORDER BY $column DESC LIMIT $limit";
                    }else{
                        $query .= " ORDER BY $column DESC LIMIT $limit";
                    }
                }else{
                    $query .= " ORDER BY $column DESC";
                }
                
            }

            if (!empty($condition)) {
                $query = " SELECT  T.tag_name FROM tags T 
                           INNER JOIN wikitags WT ON T.tag_id = WT.tag_id
                            WHERE WT.wiki_id = $condition";
            }

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $this->error = "Read operation failed: " . $e->getMessage();
            return false;
        }
    }

    public function update( $data, $condition) {
        try {
          

            $setClause = implode('=?,', array_keys($data)) . '=?';
            
            $stmt = $this->conn->prepare("UPDATE $this->tableName SET $setClause WHERE $condition");

            if (isset($data['archived_at']) && strtoupper($data['archived_at']) === 'NULL') {
                $stmt = $this->conn->prepare("UPDATE $this->tableName SET archived_at = NULL WHERE $condition");
                $stmt->execute();
                return true;
            } 
 
            if (in_array('CURRENT_TIMESTAMP', array_values($data))) {
                $stmt = $this->conn->prepare("UPDATE $this->tableName SET archived_at = CURRENT_TIMESTAMP WHERE $condition");
                $stmt->execute();
            }else{
                $stmt->execute(array_values($data));
            }
            
            
            return true;
        } catch (PDOException $e) {
            $this->error = "Update operation failed: " . $e->getMessage();
            return false;
        }
    }

    public function delete($condition) {
        try {
            $stmt = $this->conn->prepare("DELETE FROM $this->tableName WHERE $condition");
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            $this->error = "Delete operation failed: " . $e->getMessage();
            return false;
        }
    }
    public function statistiques($name) {
        $query = "SELECT   COUNT(*) AS $name FROM  $this->tableName ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}








// // Create
// $createData = ['column1' => 'value1', 'column2' => 'value2'];
// $crud->create('your_table', $createData);

// // Read
// $readData = $crud->read('your_table');
// print_r($readData);

// // Update
// $updateData = ['column1' => 'new_value'];
// $crud->update('your_table', $updateData, 'column2 = "value2"');

// // Delete
// $crud->delete('your_table', 'column1 = "value1"');
