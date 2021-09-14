<?php
if (isset($_SESSION['cart'])) {
}
?>

    <?php
    if (isset($_SESSION['cart'])) {
        $i = 0;
        $tongtien = 0;
        foreach ($_SESSION['cart'] as $cart_item) {
            $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
            $tongtien += $thanhtien;
            $i++;
    ?>
<div class="_1nrPtQ">
    <div class="_1zPSKE">STT</div>
    <div class="_27GGo9">Sản phẩm</div>
    <div class="_3hJbyz">Đơn giá</div>
    <div class="_155Uu2">Số lượng</div>
    <div class="_10ZkNr">Số tiền</div>
    <div class="_1coJFb">Thao tác</div>
    </div>
<div class="cart-product">
            <div class="_1zPSKE"><?php echo $i; ?></div>
            <div class="_27GGo9">
              <div class="cart-product__img" style="background-image: url(admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>)"></div>
              <div class="cart-product__name">
                <a href="index.php?quanly=sanpham&id=<?php echo $cart_item['id'] ?>"><?php echo $cart_item['tensanpham']; ?></a>
              </div>
            </div>
            <div class="_3hJbyz"><?php echo number_format($cart_item['giasp'], 0, ',', '.') . ' VND'; ?></div>
            <div class="_155Uu2 cart-product__input">
              <button class="cart-product__item-input-increased">
              <i class="fas fa-plus"></i>
              </button>
              <input class="cart-product__item-input-value" type="text" value="<?php echo $cart_item['soluong']; ?>">
              <button class="cart-product__item-input-decreased">
                <i class="fas fa-minus"></i>
              </button>
            </div>
            <div class="_10ZkNr"><?php echo number_format($thanhtien, 0, ',', '.') . ' VND' ?></div>
            <div class="_1coJFb">
              <button><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></button>
            </div>
          </div>
        <?php
        }
        ?>
        <div class="_1nrPtQ cart-product__control">
          <div class="cart-product__control-delete"><a href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></div>
          <div class="cart-product__control-bill">
            <span class="cart-product__control-total">Tổng thanh toán (<?php echo $i; ?> sản phẩm):
                <span class="cart-product__control-total-pay"><?php echo number_format($tongtien, 0, ',', '.') . ' VND' ?></span>
            </span>
            <button class="btn cart-product__control-pay btn--primary">
                <?php
                if (isset($_SESSION['dangky'])) {
                ?>
                    <a href="pages/main/thanhtoan.php">Đặt hàng</a>
                <?php
                } else {
                ?>
                    <a href="index.php?quanly=dangky">Đăng ký để đặt hàng</a>
                <?php
                }
                ?>
            </button>
          </div>
        </div>
    <?php
    } else {
    ?>
    <div class="cart-product__empty">
        <img src="images/no_cart.png" alt="">
        <span>Hiện tại giỏ hàng trống</span>
    </div>
    <?php
    }
    ?>