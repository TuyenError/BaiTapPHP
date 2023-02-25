<?php session_start() ?>
<html>
<?php if (isset($_SESSION['fruit'])) {
    $h = count($_SESSION['fruit']);
if (isset($_SESSION['fruit'][$_GET['iddel']])) {
    for ($i = $_GET['iddel']; $i < $h - 1; $i++) {
        $_SESSION['fruit'][$i]['tensp'] = $_SESSION['fruit'][$i + 1]['tensp'];
        $_SESSION['fruit'][$i]['giatien'] = $_SESSION['fruit'][$i + 1]['giatien'];
        $_SESSION['fruit'][$i]['mota'] = $_SESSION['fruit'][$i + 1]['mota'];
        $_SESSION['fruit'][$i]['hinhanh'] = $_SESSION['fruit'][$i + 1]['hinhanh'];
    }
    unset($_SESSION['fruit'][$h - 1]);
    header("Location:http://localhost/trungphp/add-edit-delete/show.php");
}
}
?>
</html>