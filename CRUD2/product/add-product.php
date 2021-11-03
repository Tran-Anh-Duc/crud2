<?php
include_once "../models/ProductModel.php";
include_once "../DB.php";
$productModel = new ProductModel();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $data = [
        "name" => $_REQUEST['name'],
        "price" => (int)$_REQUEST['price'],
        "description" => $_REQUEST['desc']
    ];
    $productModel->create($data);
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add product</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="name" placeholder="ten san pham">
    <input type="text" name="price" placeholder="gia san pham">
    <input type="text" name="desc" placeholder="mo ta san pham">
    <button type="submit">them moi</button>
</form>
</body>
</html>