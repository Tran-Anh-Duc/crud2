<a href="product-add.php">
    <button>ADD </button></a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($categories)):?>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $category['id'] ?></td>
                <td><?= $category['name'] ?></td>
<!--                <td><a href="../product/Product-detail.php?id=--><?php //echo $category['id']?><!--">Detail</a></td>-->
                <td><a onclick="return confirm('are you sure')" href="../product/product-delete.php?id=<?php echo $category['id']?>">Delete</a></td>
<!--                <td><a href="../product/product-edit.php?id=--><?php //echo $category['id']?><!--">Edit</a></td>-->
            </tr>
        <?php endforeach; ?>
    <?php else:?>
        <tr>
            <td colspan="5">khong co san pham nao o day</td>
        </tr>
    <?php endif;?>
    </tbody>
</table>

