<?php
session_start();
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
if (isset($_POST['btn'])) {
    $n = 0;
    if (isset($_SESSION['traicay'])) {
            $n = count($_SESSION['traicay']);
            $_SESSION['traicay'][$n]['tensp'] = $_POST['tensp'];
            $_SESSION['traicay'][$n]['giasp'] = $_POST['giasp'];
            $_SESSION['traicay'][$n]['mota'] = $_POST['mota'];


            if (isset($_FILES['hinhanh'])) {
                $file = $_FILES['hinhanh'];
                $tenfile = $file['name'];
                move_uploaded_file($file['tmp_name'], $tenfile);
                $_SESSION['traicay'][$n]['hinhanh'] = $tenfile;
            }
        header("Location: http://localhost/baithi/mang_n_chieu.php");

    }

}
?>