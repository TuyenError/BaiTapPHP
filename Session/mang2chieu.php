<?php
session_start();
?>

<form action="" method="post">
    Ten san pham <input type="text" name="TenSP" /><br>
    Gia tien <input type="number" name="GiaSP" /><br>
    Mo ta <input type="text" name="Mota" /><br>
    Hinh anh <input type="text" name="HinhAnh" /><br>
    <input type="submit" name="btn" value="Luu" />
</form>

<?php
if (isset($_POST['btn'])) {
    if (isset($_SESSION['traicay'])) {
        $n = count($_SESSION['traicay']);
    } else {
        $n = 0;
        $_SESSION['traicay'] = array();
    }
    $_SESSION['traicay'][$n]["TenSP"] = $_POST['TenSP'];
    $_SESSION['traicay'][$n]["GiaSP"] = $_POST['GiaSP'];
    $_SESSION['traicay'][$n]["Mota"] = $_POST['Mota'];
    $_SESSION['traicay'][$n]["HinhAnh"] = $_POST['HinhAnh'];
    header("Location: http://localhost/Session/sanpham.php");
}
?>