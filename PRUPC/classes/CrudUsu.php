<?php
class Crud
{
    private $conn;
    private $table_name = "tbusu";
    
    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function create($nome, $email, $cpf , $senha)
    {
        $query = "INSERT INTO " . $this->table_name . " (nome, email, cpf , senha) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$nome, $email, $cpf , $senha]);
        return $stmt;
    }

    public function read()
    {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function readEdit($id)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt;
    }
    public function update($id, $nome, $email, $cpf , $senha)
    {
        $query = "UPDATE " . $this->table_name . " SET nome = ?, email= ? , cpf = ?, senha = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$nome, $email, $cpf , $senha, $id]);
        return $stmt;
    }

    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt;
    }
}
