<form method="POST" action="">
    <label>Nhập tên của bạn:</label>
    <input type="text" name="name">
    <input type="submit" name="submit" value="Gửi">
</form>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo "Hello " . $name;
}
?>
