<?php
session_start();
?>
<?php
if (isset($_GET['id'])) {
    $masp = $_GET['id'];
    if (isset($_SESSION['traicay'])) {
        $tensp = $_SESSION['traicay'][$masp]['tensp'];
        $giasp = $_SESSION['traicay'][$masp]['giasp'];
        $mota = $_SESSION['traicay'][$masp]['mota'];
        $hinhanh = $_SESSION['traicay'][$masp]['hinhanh'];
    }
}
?>
<form action="" method="post" enctype="multipart/from-data">
    <table>
        <tr>
            <td> Tên sản phẩm </td>
            <td> <input type="text" name="tensp"></td>
        </tr>
        <tr>
            <td> Giá tiền </td>
            <td> <input type="text" name="giasp"></td>
        </tr>
        <tr>
            <td> Mô Tả </td>
            <td> <input type="text" name="mota"></td>
        </tr>
        <tr>
            <td> Hình ảnh </td>
            <td> <input type="file" name="hinhanh"></td>
        </tr>
    </table>
    <input type="submit" name="btn" value="Lưu">
</form>
<?php
if (isset($_POST["btn"])) {
    $_SESSION['traicay'][$masp]['tensp'] = $_POST['tensp'];
    $_SESSION['traicay'][$masp]['giasp'] = $_POST['giasp'];
    $_SESSION['traicay'][$masp]['mota'] = $_POST['mota'];
    if (isset($_FILES['hinhanh'])) {
        $file = $_FILES['hinhanh'];
        $tenfile = $file['name'];
        if ($tenfile != '')
            move_uploaded_file($file['tmp_name'], $tenfile);
        $_SESSION['traicay'][$masp]['hinhanh'] = $tenfile;

    }

}
header("Location: mang_n_chieu.php");
?>