<?php
include_once "../models/ProductModel.php";
include_once "../DB.php";
$productModel = new ProductModel();
$id = $_GET['id'];
$product = $productModel->getById($id);
echo  "<pre>";
var_dump($product);

