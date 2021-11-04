<?php
include_once "database/DB.php";
include_once "baseModel.php";
class ProductModel extends  baseModel
{

    protected string $table = "products";
    public function edit($data)
    {
        $sql = "UPDATE $this->table SET `name`  = ?,`price`=?,`description`= ? WHERE `id` = ?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['price']);
        $stmt->bindParam(3, $data['description']);
        $stmt->bindParam(4,$data['id']);
        $stmt->execute();
    }
    public function create($data)
    {
        $sql = "insert into $this->table(`name`,`price`,`description`) values (?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["price"]);
        $stmt->bindParam(3, $data["description"]);
        $stmt->execute();
    }

}