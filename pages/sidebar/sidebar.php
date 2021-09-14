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