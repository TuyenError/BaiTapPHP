<?php
session_start();

// Kiểm tra nếu đã submit form thì lưu thông tin vào session
if (isset($_POST['btn'])) {
    if (isset($_SESSION['traicay'])) {
        $n = count($_SESSION['traicay']);
    } else {
        $n = 0;
        $_SESSION['traicay'] = array();
    }
    $_SESSION['traicay'][$n]["ten"] = $_POST['ten'];
    $_SESSION['traicay'][$n]["gia"] = $_POST['gia'];
    $_SESSION['traicay'][$n]["mota"] = $_POST['mota'];
    $_SESSION['traicay'][$n]["hinhanh"] = $_POST['HinhAnh'];
    header("Location: http://localhost/baitap/sanpham.php");
    exit();
}
?>

<form action="" method="post">
    Ten san pham <input type="text" name="ten" /><br>
    Gia tien <input type="number" name="gia" /><br>
    Mo ta <input type="text" name="mota" /><br>
    Hinh anh <input type="text" name="HinhAnh" /><br>
    <input type="submit" name="btn" value="Luu" />
</form>
