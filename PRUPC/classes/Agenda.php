<?php

class Agenda {
    private $conn;


    function __construct($conn) {
        $this->conn = $conn;
    }

    public function create($data,  $hora ,$fk_iddog)
    {
        $query = "INSERT INTO  tbagenda (data,  hora , fk_iddog) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$data,  $hora ,$fk_iddog]);
        return $stmt;
    }

    public function read()
    {
        $query = "SELECT * FROM  tbpet";
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
        $query = "SELECT * FROM tbpet WHERE fk_don = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt;
    }


}