<?php
include_once "database/DB.php";
class baseModel
{

    protected string $table;
    protected PDO $dbConnect;

    public function __construct()
    {
        $db = new DB();
        $this->dbConnect =  $db->connect();
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

}