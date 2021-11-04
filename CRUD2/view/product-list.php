<a href="product-add.php">
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
    <?php if (isset($products)):?>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['description'] ?></td>
            <td><a href="../product/Product-detail.php?id=<?php echo $product['id']?>">Detail</a></td>
            <td><a onclick="return confirm('are you sure')" href="../product/product-delete.php?id=<?php echo $product['id']?>">Delete</a></td>
            <td><a href="../product/product-edit.php?id=<?php echo $product['id']?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>
    <?php else:?>
    <tr>
        <td colspan="5">khong co san pham nao o day</td>
    </tr>
    <?php endif;?>
    </tbody>
</table>
