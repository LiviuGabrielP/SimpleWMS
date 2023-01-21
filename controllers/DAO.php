<?php
require 'dbconfig.php';
class DAO {
   
    private $conn;

    public function __construct() {
        
        try {
            $this->conn = new PDO("mysql:host=".HOST.";port=".PORT.";dbname=".DBNAME, USERNAME, PASSWORD);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function select($table, $columns = '*', $where = null, $order = null, $limit = null) {
        $query = "SELECT $columns FROM $table";
        if($where != null) $query .= " WHERE $where";
        if($order != null) $query .= " ORDER BY $order";
        if($limit != null) $query .= " LIMIT $limit";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($table, $data) {
        // remove auto-increment column from data array
        unset($data['auto_increment_col_name']);
        $columns = implode(',', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));
        $query = "INSERT INTO $table ($columns) VALUES ($values)";
        $stmt = $this->conn->prepare($query);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
       // dd($stmt);
        $stmt->execute();
    }
    

    public function update($table, $data, $where) {
        $set = "";
        foreach ($data as $key => $value) {
            $set .= "$key = :$key, ";
        }
        $set = rtrim($set, ", ");
        $query = "UPDATE $table SET $set WHERE $where";
        $stmt = $this->conn->prepare($query);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
    }

    public function delete($table, $where) {
        $query = "DELETE FROM $table WHERE $where";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }

    public function getColumns($table) {
        $stmt = $this->conn->prepare("DESCRIBE $table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
    
    public function close() {
        $this->conn = null;
    }
}
