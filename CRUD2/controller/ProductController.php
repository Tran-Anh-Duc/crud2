<?php
include_once "../models/ProductModel.php";

class ProductController
{
    private ProductModel $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        include_once "view/product-list.php";
    }
}