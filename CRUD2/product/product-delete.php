<?php
include_once "../models/ProductModel.php";
include_once "../DB.php";
$productModel = new ProductModel();
if (isset($_GET['id'])){
    $id = $_GET['id'];
    if ($productModel->getById($id) !==null){
        $product = $productModel->delete($id);
        header("location:../index.php");
    }
}

