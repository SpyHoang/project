<div class="app__container">
    <div class="grid wide">
        <div class="row sm-gutter app__content">
                <?php
                if (isset($_GET['quanly'])) {
                    $tam = $_GET['quanly'];
                } else {
                    $tam = '';
                }
                if ($tam == 'danhmucsanpham') {
                    include("main/danhmuc.php");
                } else if ($tam == 'giohang') {
                    include("main/giohang.php");
                } else if ($tam == 'tintuc') {
                    include("main/tintuc.php");
                } else if ($tam == 'sanpham') {
                    include("main/sanpham.php");
                } else if ($tam == 'lienhe') {
                    include("main/lienhe.php");
                } else if ($tam == 'dangky') {
                    include("main/dangky.php");
                } else if ($tam == 'thaydoimatkhau') {
                    include("main/thaydoimatkhau.php");
                } else if ($tam == 'thanhtoan') {
                    include("main/thanhtoan.php");
                } else if ($tam == 'camon') {
                    include("main/camon.php");
                } else if ($tam == 'dangnhap') {
                    include("main/dangnhap.php");
                } else if ($tam == 'timkiem') {
                    include("main/timkiem.php");
                } else {
                    // include("main/home_filter.php");
                    include("main/index.php");
                    // include("main/pagination.php");
                }

                ?>
            </div>
            
        </div>
    </div>
</div>