<?php

$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>

<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>

<header class="header">
	<div class="grid wide">
		<!-- header navbar -->
		<nav class="header__navbar hide-on-mobile-tablet">
			<!-- header navbar left -->
			<ul class="header__navbar-list">
				<li class="header__navbar-item header__navbar-item--separate">
                    <a href="" class="header__navbar-item-link">Vào cửa hàng trên ứng dụng Chợ Phiên</a>
				</li>
				<li class="header__navbar-item">
					<span class="header__navbar-item-no-pointer">Kết nối</span>
					<a href="#" class="header__navbar-icon-link">
						<i class="header__navbar-icon fab fa-facebook"></i>
					</a>
					<a href="#" class="header__navbar-icon-link">
						<i class="header__navbar-icon fab fa-instagram"></i>
					</a>
				</li>
			</ul>
			<!-- end header navbar left -->

			<!-- header navbar right -->
			<ul class="header__navbar-list">
				<?php
				if (isset($_SESSION['dangky'])) {
				?>

				<?php
				} else {
				?>

				<li class="header__nav-item">
					<a href="index.php?quanly=dangky" class="header__navbar-item header__navbar-item--strong header__navbar-item--separate" id="header-btn-register">Đăng ký</a>
				</li>

				<?php
				}
				?>

				<?php
				if (isset($_SESSION['dangky'])) {
				?>

				<li class="header__nav-item header__navbar-user">
					<ul class="header__nav-item header__navbar-user-menu">
						<span class="header__nav-item header__navbar-user-name">
							<?php
							if (isset($_SESSION['dangky'])) {
								echo $_SESSION['dangky'];
							}
							?>
						</span>
						<li class="header__nav-item"><a href="index.php?dangxuat=1">Đăng xuất</a></li>
						<li class="header__nav-item"><a href="index.php?quanly=thaydoimatkhau">Đổi mật khẩu</a></li>
					</ul>
				</li>
					
				<?php
				} else {
				?>

				<li class="header__nav-item">
					<a href="index.php?quanly=dangnhap" class="header__navbar-item header__navbar-item--strong" id="">Đăng nhập</a>
				</li>

				<?php
				}
				?>
			</ul>
			<!-- end header navbar right -->
			
		</nav>
		<!-- end header-navbar -->


		<!-- header-search -->
		<div class="header-with-search">
			<!-- logo -->
			<div class="header__logo">
				<a href="index.php" class="header__logo-link">
					<img class="header__logo-img" src="images/logo.png" alt="">
				</a>
			</div>
			<!-- end logo -->

			<!-- search -->
			<form class="header__search hide-on-mobile" action="index.php?quanly=timkiem" method="POST">
				<div class="header__search-input-wrap">
					<input type="text" class="header__search-input" name="tukhoa" placeholder="Tìm kiếm sản phẩm tại đây">

					<div class="header__search-history">
						<h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
						<ul class="header__search-history-list">
							<li class="header__search-history-item">
								<a href="#">Sản phẩm 1</a>
							</li>
							<li class="header__search-history-item">
								<a href="#">Sản phẩm 2</a>
							</li>
						</ul>
					</div>
				</div>

				<button class="header__search-btn" name="timkiem">
					<i class="fas fa-search header__search-btn-icon"></i>
				</button>
			</form>
			<!-- end search -->

			<!-- cart -->
			<div class="header__cart">
				<div class="header__cart-wrap">
					<a href="index.php?quanly=giohang">
						<i class="fas fa-shopping-cart header__cart-icon" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<!-- end cart -->

		</div>
	<!-- end header-search -->
	</div>
	<ul class="header__sort-bar">
		<li class="header__sort-item">
			<a href="#" class="header__sort-link">Liên quan</a>
		</li>

		<li class="header__sort-item header__sort-item--active">
			<a href="#" class="header__sort-link">Mới nhất</a>
		</li>

		<li class="header__sort-item">
			<a href="#" class="header__sort-link">Bán chạy</a>
		</li>

		<li class="header__sort-item">
			<a href="#" class="header__sort-link">Giá</a>
		</li>
	</ul>
</header>