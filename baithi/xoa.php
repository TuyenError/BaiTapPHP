<?php
session_start();
?>
<?php

if (!isset($_SESSION["traicay"])) {
    $_SESSION["traicay"] = array();
}



// Xóa sản phẩm
if (isset($_POST["btn-delete"])) {
    $index = $_POST["index"];
    unset($_SESSION["traicay"][$index]);
    header("location: http://localhost/baithi/mang_n_chieu.php");
    exit();
}

?>