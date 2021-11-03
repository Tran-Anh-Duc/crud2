<?php
include_once "DB.php";

$dbConnect = new DB();
$sql = "select * from products where  id =1";
$stmt = $dbConnect->connect()->query($sql);
$result = $stmt->fetchAll();


