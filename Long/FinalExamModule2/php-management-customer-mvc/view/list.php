<h2>Danh sách sản phẩm </h2>
<a href="./index.php?page=add">Thêm mới</a>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Loại</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Ngày tạo</th>
        <th>Mô tả</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $product): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $product->product_name ?></td>
        <td><?php echo $product->type_of_product ?></td>
        <td><?php echo $product->price ?></td>
        <td><?php echo $product->number ?></td>
        <td><?php echo $product->create_date ?></td>
        <td><?php echo $product->description ?></td>
        <td> <a href="./index.php?page=delete&product_code=<?php echo $product->product_code; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&product_code=<?php echo $product->product_code; ?>" class="btn btn-sm">Update</a></td>
    <?php endforeach; ?>
    </tbody>
</table>