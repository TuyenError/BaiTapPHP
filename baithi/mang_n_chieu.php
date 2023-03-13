<?php
session_start();
?>
<table border="1px solid black">
    <tr>
        <td>Tên sản phẩm</td>
        <td>Giá sản phẩm</td>
        <td>Mô tả sản phẩm</td>
        <td>Hình ảnh sản phẩm</td>
        <td>Hành động</td>
    </tr>
    <?php
    if (isset($_SESSION['traicay'])) {
        print_r($_SESSION['traicay']);
        $n = count($_SESSION['traicay']);
        for ($i = 0; $i < $n; $i++) {
            ?>
            <tr>
                <td>
                    <?php echo $_SESSION['traicay'][$i]['tensp']; ?>
                </td>
                <td>
                    <?php echo $_SESSION['traicay'][$i]['giasp']; ?>
                </td>
                <td>
                    <?php echo $_SESSION['traicay'][$i]['mota']; ?>
                </td>
                <td><img src="<?php echo $_SESSION['traicay'][$i]['hinhanh']; ?>" width="100" height="100"></td>
                <td><a href="xoa.php?id=<?php echo $i ?>">Xóa</a>
                    <a href="sua.php?id=<?php echo $i ?>">Cập Nhập</a>
                    <a href="xem.php?id=<?php echo $i ?>">Xem chi tiết</a>
                </td>
            </tr>
        <?php }
    } ?>
</table>
<a href="nhapmang2chieu.php">Nhập tiếp</a>



