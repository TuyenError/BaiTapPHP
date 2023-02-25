<?php
session_start();

?>
<?php
if (isset($_GET["id"])) {
    foreach ($_SESSION["traicay"] as $index => $trai_cay) {
        ?>
    <form action="" method="post">
        Ten san pham <input type="text" name="ten" value="<?php echo $trai_cay["ten"]; ?>"><br>
        Gia tien <input type="number" name="gia" value="<?php echo $trai_cay["gia"]; ?>"><br>
        Mo ta <input type="text" name="mota" value="<?php echo $trai_cay["mota"]; ?>"><br>
        Hinh anh <input type="text" name="hinhanh" value="<?php echo $trai_cay["hinhanh"]; ?>"><br>
        <input type="submit" name="btnedit" value="Luu">
    </form>
<?php }
}?>
<?php
if (isset($_POST['btnedit'])) {
    $_SESSION['traicay'][$n]["ten"] = $_POST['ten'];
    $_SESSION['traicay'][$n]["gia"] = $_POST['gia'];
    $_SESSION['traicay'][$n]["mota"] = $_POST['mota'];
    $_SESSION['traicay'][$n]["hinhanh"] = $_POST['HinhAnh'];
    header("Location: http://localhost/baitap/sanpham.php");
    exit();
}

?>

