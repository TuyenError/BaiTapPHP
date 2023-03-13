<?php
session_start();
?>
Chi tiết sản phẩm cần xem: 
<?php

if (isset($_GET['id'])){
    $masp = $_GET['id'];
    if(isset($_SESSION['traicay'])){
?>
Tên sản phẩm: <?php echo $_SESSION['traicay'][$masp]['tensp'];?>
<img src="<?php echo $_SESSION['traicay'][$masp]['hinhanh']; ?>" height="150" width="90"?>
<?php

    }
}
?>