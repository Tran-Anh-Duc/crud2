<?php
include_once "DB.php";
include_once "models/categoriesModel.php";
$categoriesModel = new CategoriesModel();
$category = $categoriesModel->getAll();
?>

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
<a href="product/add-product.php">
    <button>ADD </button></a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($category as  $categories): ?>
        <tr>
            <td><?= $categories['id'] ?></td>
            <td><?= $categories['name'] ?></td>
            <td><a onclick="return confirm('are you sure')" href="category/category-delete.php?id=<?php echo $categories['id']?>">Delete</a></td>
<!--            <td><a href="product/product-edit.php?id=--><?php //echo $product['id']?><!--">Edit</a></td>-->
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>

