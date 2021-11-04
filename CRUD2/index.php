<?php
include_once "models/ProductModel.php";
include_once "models/categoryModel.php";
include_once "controller/ProductController.php";
include_once "controller/categoryController.php";
$productController = new ProductController();
$categoryController = new CategoryController();
$page = (isset($_GET["page"]) ? $_GET['page'] : "");
?><s></s>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach san pham </title>
</head>
<body>
<div class="navbar">
    <a href="index.php?page=product-list">product</a>
    <a href="index.php?page=category-list">category</a>
</div>
<?php
switch ($page) {
    case "product-list":
        $productController->index();
        break;
    case "category-list":
        $categoryController->index();
        break;
}
?>
</body>
</html>
