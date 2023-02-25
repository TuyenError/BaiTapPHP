<?php session_start() ?>
<html>
<?php if (isset($_SESSION['fruit'][$_GET['id']])) {
     ?>
    <form method="post">
        <table>
            <tr>
                <td>
                    
                    Tên sản phẩm: <input type="text" name="ten" value="<?php echo $_SESSION['fruit'][$_GET['id']]['tensp']; ?> ">
                </td>
            </tr>
            <tr>
                <td>
                    Giá sản phẩm: <input type="text" name="gia" value="<?php echo $_SESSION['fruit'][$_GET['id']]['giatien']; ?> ">
                </td>
            </tr>
            <tr>
                <td>
                    Mô tả sản phẩm: <input type="text" name="mota" value="<?php echo $_SESSION['fruit'][$_GET['id']]['mota']; ?> ">
                </td>
            </tr>
            <tr>
                <td>
                    Hình ảnh sản phẩm: <input type="text" name="anh" value="<?php echo $_SESSION['fruit'][$_GET['id']]['hinhanh']; ?> "> <br>
                    <input type="submit" name="btnedit" value="Edit">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['btnedit'])) {
        $_SESSION['fruit'][$_GET['id']]['tensp'] = $_POST['ten'];
        $_SESSION['fruit'][$_GET['id']]['giatien'] = $_POST['gia'];
        $_SESSION['fruit'][$_GET['id']]['mota'] = $_POST['mota'];
        $_SESSION['fruit'][$_GET['id']]['hinhanh'] = $_POST['anh'];
        header("Location:http://localhost/add-edit-delete/show.php");
    }
    ?>
<?php } ?>
</html>