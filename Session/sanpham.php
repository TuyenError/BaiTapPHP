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

// Kiểm tra nếu đã submit form thì lưu thông tin vào session
if (isset($_POST['btn'])) {
    $n = count($traicay);
    $traicay[$n]['TenSP'] = $_POST['ten'];
    $traicay[$n]['GiaSP'] = $_POST['tien'];
    $traicay[$n]['Mota'] = $_POST['mo'];
    $traicay[$n]['HinhAnh'] = $_POST['anh'];

    $_SESSION['traicay'] = $traicay;
    header("Location: sanpham.php");
    exit();
}
?>

Danh sách trái cây <br>
<table border="1">
    <tr>
        <td>Ten SP</td>
        <td>Gia</td>
        <td>Mota</td>
        <td>HinhAnh</td>
    </tr>
    <?php
    // Hiển thị danh sách trái cây từ session
    if (isset($_SESSION['traicay'])) {
        $n = count($_SESSION['traicay']);
        for ($i = 0; $i < $n; $i++) {
            ?>

                        <tr>
                            <td>
                                <?php echo $_SESSION['traicay'][$i]["TenSP"]; ?>
                            </td>
                            <td>
                                <?php echo $_SESSION['traicay'][$i]["GiaSP"]; ?>
                            </td>
                            <td>
                                <?php echo $_SESSION['traicay'][$i]["Mota"]; ?>
                            </td>
                            <td>
                                <?php echo $_SESSION['traicay'][$i]["HinhAnh"]; ?>
                            </td>
                        </tr>

                        <?php
        }
    }
    ?>
</table>