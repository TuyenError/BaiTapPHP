<?php
session_start();

if (!isset($_SESSION["traicay"])) {
    $_SESSION["traicay"] = array();
}

if (isset($_POST["btn-sub"])) {
    $n = count($_SESSION["traicay"]);
    $_SESSION["traicay"][$n]["ten"] = $_POST["ten"];
    $_SESSION["traicay"][$n]["gia"] = $_POST["gia"];
    $_SESSION["traicay"][$n]["mota"] = $_POST["mota"];
    $_SESSION["traicay"][$n]["hinhanh"] = $_POST["hinhanh"];

    header("location: http://localhost/baitap/sanpham.php ");
    exit();
}
?>
<form action="" method="POST">
    <table>
        <tr>
            <td> Nhập tên sản phẩm:</td>
            <td><input type="text" name="ten"></td>
        </tr>
        <tr>
            <td> Giá sản phẩm:</td>
            <td><input type="number" name="gia"></td>
        </tr>
        <tr>
            <td> Mô tả:</td>
            <td><input type="text" name="mota"></td>
        </tr>
        <tr>
            <td> Hình ảnh:</td>
            <td><input type="text" name="hinhanh"></td>
        </tr>
    </table>
    <input type="submit" name="btn-sub" value="Lưu">
</form>

