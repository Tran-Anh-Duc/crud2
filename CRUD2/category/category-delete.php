
<?php
include_once "../DB.php";
include_once "../models/categoriesModel.php";
$categoriesModel = new CategoriesModel();
if (isset($_GET['id'])){
    $id = $_GET['id'];
    if ($categoriesModel->getById($id) !==null){
        $categoriesModel->delete($id);
        header("location:../index1.php");
    }
}

