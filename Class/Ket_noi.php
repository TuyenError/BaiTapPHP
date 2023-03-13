<?php
$ketnoi = mysqli_connect('localhost', 'root', '', 'quanlysanpham') or die('Connect fail!');
$sql = 'select * from sanpham';
$ketqua = mysqli_query($ketnoi, $sql) or die('Lệnh truy vấn bị lỗi !');
$i = 1;
while ($row =mysqli_fetch_assoc($ketqua)){
    echo $i . '.' . $row['TenSP'] . '--' . $row['Gia'] . 'VND<br>';
    $i++;
}
?>