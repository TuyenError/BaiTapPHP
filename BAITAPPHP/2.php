<form method="POST" action="">
    Nhập số: <input type="text" name="number">
    <input type="submit" value="Submit" name="submit">
</form>
<?php
if (isset($_POST['submit'])) {
    $number = ($_POST['number']);

    // In ra từ 1 đến số đó
    for ($i = 1; $i <= $number; $i++) {
        echo $i . " ";
    }
}
?>
