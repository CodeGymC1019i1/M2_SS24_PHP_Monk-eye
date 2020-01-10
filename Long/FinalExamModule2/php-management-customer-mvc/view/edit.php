<h2>Cập nhật thông tin sản phẩm </h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="product_code" value="<?php echo $product->product_code; ?>"/>
    <div class="form-group">
        <label>Tên mặt hàng</label>
        <input type="text" name="product_name" value="<?php echo $product->product_name; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Loại</label>
        <input type="text" name="type_of_product" value="<?php echo $product->type_of_product; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Giá</label>
        <input type="text" name="price" value="<?php echo $product->price; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Số lượng</label>
        <input type="text" name="number" value="<?php echo $product->number; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Ngày tạo</label>
        <input type="text" name="create_date" value="<?php echo $product->create_date; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <input type="text" name="description" value="<?php echo $product->description; ?>" class="form-control"/>
    </div>

    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>