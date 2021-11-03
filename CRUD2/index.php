<?php
include_once "DB.php";
include_once "models/ProductModel.php";
$productModel = new ProductModel();
$products = $productModel->getAll();
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
        <th>Price</th>
        <th>Desc</th>
        <th>Detail</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['description'] ?></td>
            <td><a href="product/Product-detail.php?id=<?php echo $product['id']?>">Detail</a></td>
            <td><a onclick="return confirm('are you sure')" href="product/product-delete.php?id=<?php echo $product['id']?>">Delete</a></td>
            <td><a href="product/product-edit.php?id=<?php echo $product['id']?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
