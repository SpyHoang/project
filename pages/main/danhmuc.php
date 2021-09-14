<?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
//get ten danh muc
$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);
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
    <div class="home-filter" id="home-filter">
        <span class="home-filter__label">Danh mục sản phẩm: "<?php echo $row_title['tendanhmuc'] ?>"</span>
    </div>
<!--end home filter -->


<div class="home-product">
    <div class="row sm-gutter">
        <!-- product item -->
        <?php
        while ($row = mysqli_fetch_array($query_pro)) {
        ?>

        <div class="col l-2-4 m-4 c-6">
            <a class="home-product-item" href=" index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <div class="home-product-item-img" style="background-image: url(admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>)"></div>
                <h4 class="home-product-item-name"><?php echo $row['tensanpham'] ?></h4>
                <div class="home-product-item__price">
                    <span class="home-product-item__price-old"></span>
                    <span class="home-product-item__price-current"><?php echo number_format($row['giasp'], 0, ',', '.') . ' VND' ?>
                    </span>
                </div>
                <div class="home-product-item__action">
					<span class="home-product-item__sold">22 đã bán</span>
				</div>
                <div class="home-product-item__origin">
                    <span class="home-product-item__brand"><?php echo  $row_title['tendanhmuc'] ?></span>
                </div>
            </a>
        </div>
        
        <?php
        }
        ?>
	</div>
</div>