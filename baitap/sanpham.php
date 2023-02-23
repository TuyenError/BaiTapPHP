<?php
session_start();

// Khởi tạo mảng trái cây ban đầu
$traicay = array();
$traicay[0]['TenSP'] = "Táo";
$traicay[0]['GiaSP'] = "25";
$traicay[0]['Mota'] = "Táo Mỹ";
$traicay[0]['HinhAnh'] = "<img src='https://images1.content-hci.com/commimg/myhotcourses/blog/post/myhc_94121.jpg'>";

$traicay[1]['TenSP'] = "Chanh";
$traicay[1]['GiaSP'] = "16";
$traicay[1]['Mota'] = "Chanh Chua";
$traicay[1]['HinhAnh'] = "<img src='https://img.thuocbietduoc.com.vn/images/news/2019/8/qua-chanh0.jpg'>";

$traicay[2]['TenSP'] = "Cà Chua Bi";
$traicay[2]['GiaSP'] = "25";
$traicay[2]['Mota'] = "Cà chua bi tươi ngon";
$traicay[2]['HinhAnh'] = "<img src='https://img.websosanh.vn/v10/users/review/images/ic4jw9odnesbc/1562232260651_5455903.jpg?compress=85'>";
?>

<?php

if (!isset($_SESSION["traicay"])) {
    $_SESSION["traicay"] = array();
}

// Sửa sản phẩm
if (isset($_POST["btn-edit"])) {
    $index = $_POST["index"];
    $_SESSION["traicay"][$index]["ten"] = $_POST["ten"];
    $_SESSION["traicay"][$index]["gia"] = $_POST["gia"];
    $_SESSION["traicay"][$index]["mota"] = $_POST["mota"];
    $_SESSION["traicay"][$index]["hinhanh"] = $_POST["hinhanh"];
    header("location: http://localhost/baitap/mang2chieu.php");
    exit();
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
                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <input type="submit" name="btn-edit" value="Sửa">
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
