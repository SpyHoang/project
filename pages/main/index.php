<?php
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham limit 25";
$query_pro = mysqli_query($mysqli, $sql_pro);

?>

<!-- aside -->
<div class="col l-2 m-0 c-0">
	<nav class="category">
		<h3 class="category__heading">
			<i class="fas fa-list-ul category__heading-icon"></i>Danh Mục
		</h3>
		<ul class="category-list" id="category-list">
		<?php
		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
		$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
		while ($row = mysqli_fetch_array($query_danhmuc)) {
		?>
			<li class="category-item">
				<a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?> " class="category-item__link">
				<?php echo $row['tendanhmuc'] ?>
				</a>
				<?php
				}
				?>
			</li>
		</ul>
	</nav>
</div>
<!-- end aside -->

<!-- article -->
<div class="col l-10 m-12 c-12">
	 		<!-- home filter -->
	<div class="home-filter hide-on-mobile-tablet" id="home-filter">
		<span class="home-filter__label">Sắp xếp theo</span>
		<button class="btn home-filter__btn btn--primary">Mới nhất</button>
		<button class="btn home-filter__btn">Bán chạy</button>

		<div class="select-input">
			<span class="select-input__label">Giá</span>
			<i class="fas fa-chevron-down select-input__icon"></i>
			<ul class="select-input__list">
				<li class="select-input__item">
					<a href="#" class="select-input__link">Giá: Thấp đến cao</a>
				</li>
				<li class="select-input__item">
					<a href="#" class="select-input__link">Giá: Cao đến thấp</a>
				</li>

			</ul>
		</div>

		<div class="home-filter__page">
			<span class="home-filter__page-num">
				<span class="home-filter__page-current">1</span>/
				<span class="home-filter__page-total">14</span>
			</span>
			<div class="home-filter__page-control">
				<a href="#" class="home-filter__page-btn home-filter__page-btn--disable">
					<i class="fas fa-angle-left home-filter__page-icon"></i>
				</a>
				<a href="#" class="home-filter__page-btn">
					<i class="fas fa-angle-right home-filter__page-icon"></i>
				</a>
			</div>
		</div>
	</div>
<!--end home filter -->

<!-- product -->
<div class="home-product">
	<div class="row sm-gutter">

		<!-- product item -->
		<?php
		while ($row = mysqli_fetch_array($query_pro)) {
		if ($row['tinhtrang'] == 1) {
		?>
		<div class="col l-2-4 m-4 c-6">
			<a class="home-product-item" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
				<div class="home-product-item-img" style="background-image: url(admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>)" alt="thay the">
				</div>
				<h4 class="home-product-item-name"> Tên sách : <?php echo $row['tensanpham'] ?></h4>
				<div class="home-product-item__price">
					<span class="home-product-item__price-old">3.200.000đ</span>
					<span class="home-product-item__price-current">Giá: <?php echo number_format($row['giasp'], 0, ',', '.') . ' vnđ' ?></span>
				</div>
				<div class="home-product-item__action">
					<span class="home-product-item__sold">22 đã bán</span>
				</div>
				<div class="home-product-item__origin">
					<span class="home-product-item__brand"><?php echo  $row['tendanhmuc'] ?></span>
				</div>
			</a>
		</div>
		<?php
		} else {
		}
	}
	?>
	</div>
</div>
<!--end product -->
<ul class="pagination home-product__pagination">
	<li class="pagination-item">
		<a href="#" class="pagination-item__link">
			<i class="pagination-item__icon fas fa-angle-left"></i>
		</a>
	</li>

	<li class="pagination-item pagination-item--active">
		<a href="#" class="pagination-item__link">1</a>
	</li>
	<li class="pagination-item">
		<a href="#" class="pagination-item__link">2</a>
	</li>
	<li class="pagination-item">
		<a href="#" class="pagination-item__link">3</a>
	</li>
	<li class="pagination-item">
		<a href="#" class="pagination-item__link">4</a>
	</li>
	<li class="pagination-item">
		<a href="#" class="pagination-item__link">5</a>
	</li>
	<li class="pagination-item">
		<a href="#" class="pagination-item__link">...</a>
	</li>
	<li class="pagination-item">
		<a href="#" class="pagination-item__link">14</a>
	</li>

	<li class="pagination-item">
		<a href="#" class="pagination-item__link">
			<i class="pagination-item__icon fas fa-angle-right"></i>
		</a>
	</li>
</ul>