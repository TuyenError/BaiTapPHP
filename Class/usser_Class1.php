<?php
$tenNV = 'Cao Tuyen';
$dcNV = '101B Lê Hữu Trác';
$emailNV = 'caotuyenks1605@gmail.com';
$phoneNV = '0964984046';
$bangcap = 'ĐH';
$tenKH = 'Tuyen Error';
$dcKH = 'Tòa Nhà Thái Dương';
$emailKH = 'tuyenerror.ks@gmail.com';
$phoneKH = '0905081174';
$loaiKH = 'VIP';
require 'Class_1.php';
$nv1 = new Nhanvien($tenNV, $dcNV, $emailNV, $phoneNV, $bangcap);
$nv1->hienthi();
$kh1 = new KhachHang($tenKH, $dcKH, $emailKH, $phoneKH, $loaiKH);
$kh1->hienthi();

?>