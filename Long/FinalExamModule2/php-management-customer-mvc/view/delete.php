<h1>Bạn chắc chắn muỗn xóa mặt hàng này?</h1>

<h3><?php echo $product->product_name; ?></h3>

<form action="./index.php?page=delete" method="post">
    <input type="hidden" name="product_code" value="<?php echo $product->product_code; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php">Cancel</a>
    </div>
</form>