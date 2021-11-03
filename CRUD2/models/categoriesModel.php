<?php

class CategoriesModel
{
    private string $table;
    protected  PDO $dbConnect;

    public function __construct()
    {
        $this->table = 'categories';
        $db = new DB();
        $this->dbConnect = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from $this->table";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }
    public function getById($id)
    {
        $sql = "select * from $this->table where id = $id";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch();
    }
    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
    public function edit($data)
    {
        $sql = "UPDATE $this->table SET `name`  = ?, WHERE `id` = ?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(4,$data['id']);
        $stmt->execute();
    }
    public function create($data)
    {
        $sql = "insert into $this->table(`name`) values (?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->execute();
    }
}