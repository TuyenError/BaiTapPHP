<?php
session_start();
if (isset($_SESSION['t'])) {
    $users = $_SESSION['t'];
    echo "Xin chào $users";
} else
    echo "Chưa có biến session!!!!";
?>