<?php

class Produ {
    private $conn;


    function __construct($conn) {
        $this->conn = $conn;
    }

    public function read()
    {
        $query = "SELECT * FROM  tbprodu";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        return $stmt;
    }
    public function reads()
    {
        $query = "SELECT * FROM  tbprodu";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        return $stmt;
    }

    public function readEdit($id)
    {
        $query = "SELECT * FROM tbprodu WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt;
    }


}
