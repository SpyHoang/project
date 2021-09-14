<?php

$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>

<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>
<div class="header">
    <div class="grid wide">
    <nav class="header__navbar">
        <ul class="header__navbar-nav">
            <li class="header__nav-item">
                <a href="index.php" class="header__navbar-item-link">Trang chủ</a>
            </li>
            <li class="header__nav-item">
                <span class="header__nav-item--no-pointer">Kết nối</span>
                <a href="" class="header__nav-link">
                    <i class="header__nav-icon fab fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="" class="header__nav-link">
                    <i class="header__nav-icon fab fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
        </ul>

        <ul class="header__navbar-nav">
        <?php
            if (isset($_SESSION['dangky'])) {
            ?>
            <?php
            } else {
            ?>
                <li class="header__nav-item">
                    <a href="index.php?quanly=dangnhap" class="header__navbar-item">Đăng nhập</a>
                </li>
            <?php
            }
            ?>
            <?php
            if (isset($_SESSION['dangky'])) {
            ?>
                <li class="header__nav-item header__navbar-user">
                    <ul uclass="header__nav-item header__navbar-user-menu">
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
                    <a href="index.php?quanly=dangky" class="header__navbar-item-link">Đăng ký</a>
                </li>
            <?php
            }
            ?>
        </ul>
    </nav>
    <div class="header-block-search">
        <div class="header__logo">
            <img src="/images/logo.png" alt="logo" class="header__logo-img">
        </div>
        <div class="header__search">
            <form class="header__search-input" action="index.php?quanly=timkiem" method="POST">
                <input type="text" placeholder="Tìm kiếm sản phẩm" name="tukhoa">
                <button type="submit" name="timkiem">
                    <i class="header__search-btn-icon fas fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <div class="header__cart">
            <a href="index.php?quanly=giohang">
                <i class="fas fa-shopping-cart header__cart-icon" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    </div>
</div>