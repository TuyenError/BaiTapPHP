<?php
session_start();
?>
<?php

if (!isset($_SESSION["traicay"])) {
    $_SESSION["traicay"] = array();
}



// Xóa sản phẩm
if (isset($_POST["btn-delete"])) {
    $index = $_POST["index"];
    unset($_SESSION["traicay"][$index]);
    header("location: http://localhost/baitap/sanpham.php");
    exit();
}

?>

<h1>Danh sách trái cây</h1>

<a href="http://localhost/baitap/mang2chieu.php">Thêm sản phẩm</a>

<table border="1">
    <tr>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Mô tả</th>
        <th>Hình ảnh</th>
        <th></th>
    </tr>
    <?php foreach ($_SESSION["traicay"] as $index => $trai_cay) { ?>
        <tr>
            <td>
                <?php echo $trai_cay["ten"]; ?>
            </td>
            <td>
                <?php echo $trai_cay["gia"]; ?>
            </td>
            <td>
                <?php echo $trai_cay["mota"]; ?>
            </td>
            <td>
                <img src="<?php echo $trai_cay["hinhanh"]; ?>" width="100" height="100">
            </td>
            <td>
                <form action="" method="POST" style="display: inline;">
                    <a href="http://localhost/baitap/edit.php?id=<?php echo $index ?>">Sửa</a>
                </form>
                <form action="" method="POST" style="display: inline;">
                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <input type="submit" name="btn-delete" value="Xóa">
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
<?php
