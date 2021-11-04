<?php
include_once "../models/categoryModel.php";
class CategoryController
{
private CategoryModel $categoryModel;
public function __construct()
{
    $this->categoryModel = new CategoryModel();
}

    public function index()
    {
        $categories = $this->categoryModel->getAll();
        include_once "../view/category-list.php";
}

}