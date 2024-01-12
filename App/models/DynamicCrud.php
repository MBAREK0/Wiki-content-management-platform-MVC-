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

    public function read($column, $condition = "") {
        try {
            $query = "SELECT * FROM $this->tableName ORDER BY $column DESC";
            
            if (!empty($condition)) {
                $query .= " WHERE $condition";
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

            $stmt->execute(array_values($data));

            return true;
        } catch (PDOException $e) {
            $this->error = "Update operation failed: " . $e->getMessage();
            return false;
        }
    }

    public function delete( $condition) {
        try {
            $stmt = $this->conn->prepare("DELETE FROM $this->tableName WHERE $condition");
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            $this->error = "Delete operation failed: " . $e->getMessage();
            return false;
        }
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
