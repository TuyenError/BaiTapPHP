<form method="post" action="bai5.php">
    <label for="number">Nhập số nguyên:</label>
    <input type="number" id="number" name="number"><br>

    <input type="submit" value="Tính tổng">
</form>
<?php
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    $sum = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $sum += $digit;
        $number = floor($number / 10);
    }

    $number = $_POST['number'];
    echo "Tổng các chữ số của số $number là: $sum.";
}
?>