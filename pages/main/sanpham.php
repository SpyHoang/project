<?php
$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);

while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>

    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" style="width: 100%;height: 100%;">
    <div class="page-product__briefing">
            <div class="page-product__img">
              <div class="page-product__img-center" style="background-image: url(admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>"></div>
              <div class="page-product__img-slider">
                <div class="page-product__img-slider-item"></div>
                <div class="page-product__img-slider-item"></div>
                <div class="page-product__img-slider-item"></div>
                <div class="page-product__img-slider-item"></div>
                <div class="page-product__img-slider-item"></div>
              </div>
            </div>
      
            <div class="page-product__item">
                <div class="page-product__item-name">
                  <span><?php echo $row_chitiet['tensanpham'] ?></span>
                </div>
                <div class="page-product__item-action">
                  <div class="page-product__item-rate">
                    <span>4</span>
                    <i class="fas fa-star page-product__item__star--gold"></i>
                    <i class="fas fa-star page-product__item__star--gold"></i>
                    <i class="fas fa-star page-product__item__star--gold"></i>
                    <i class="fas fa-star page-product__item__star--gold"></i>
                  </div>
                  <div class="page-product__item-sold">
                    <span><?php echo $row_chitiet['soluong'] ?></span>Đã bán
                  </div>
                </div>
                <div class="page-product__item-price">
                  <span><?php echo number_format($row_chitiet['giasp'], 0, ',', '.') . ' VND' ?></span>
                </div>
                <div class="page-product__item-quantity">
                  <span>Số lượng</span>
                  <div class="page-product__item-quantity-input">
                    <button class="page-product__item-quantity-input-increased">
                      <i class="fas fa-minus"></i>
                    </button>
                    <input class="page-product__item-quantity-input-value" type="text" name="gtsoluong" value="1">
                    <button class="page-product__item-quantity-input-decreased">
                      <i class="fas fa-plus"></i>
                    </button>
                    <span><?php echo $row_chitiet['soluong'] ?> sản phẩm có sẵn</span>
                  </div>
                </div>
                <div class="page-product__item-cart">
                  <button class="btn page-product__item-cart-btn btn--deprimary" name="themgiohang" type="submit">
                    <i class="fas fa-cart-plus"></i> Thêm Vào Giỏ Hàng
                  </button>
                  <button class="btn page-product__item-cart-btn btn--primary">Mua ngay</button>
                </div>
            </div>
          </div>
          <!-- Product-Information -->
          <div class="page-product__information">
            <div class="page-product__details">
              <div class="page-product__info-titles">CHI TIẾT SẢN PHẨM</div>

              <div class="page-product__details-list">
                <label>Mã sách: </label>
                <div><?php echo $row_chitiet['masp'] ?></div>
              </div>

              <div class="page-product__details-list">
                <label>Danh mục: </label>
                <div>
                  <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_chitiet['id_danhmuc'] ?> "><?php echo $row_chitiet['tendanhmuc'] ?></a>
                </div>
              </div>

              <div class="page-product__details-list">
                <label>Tác giả: </label>
                <div><?php echo $row_chitiet['tacgia'] ?></div>
              </div>

              <div class="page-product__details-list">
                <label>Nhà suất bản: </label>
                <div><?php echo $row_chitiet['tomtat'] ?></div>
              </div>

              <div class="page-product__details-list">
                <label>Số trang: </label>
                <div><?php echo $row_chitiet['sotrang'] ?></div>
              </div>
            </div>

            <div class="page-product__decscription">
              <div class="page-product__info-titles">MÔ TẢ SẢN PHẨM</div>
              <div class="page-product__decscription-text">
                <span><?php echo nl2br($row_chitiet['noidung']) ?>
                </span>
              </div>
            </div>
          </div>
    </form>

<?php
}
?>