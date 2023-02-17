<form method="post" action="bai4.php">
    <label for="a">Số a:</label>
    <input type="number" id="a" name="a" required><br>

    <label for="b">Số b:</label>
    <input type="number" id="b" name="b" required><br>

    <input type="submit" value="In các số chia hết cho 3">
</form>
<?php
if (isset($_POST['a']) && isset($_POST['b'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    echo "Các số chia hết cho 3 trong khoảng ($a,$b) là: ";
    for ($i = $a; $i <= $b; $i++) {
        if ($i % 3 == 0) {
            echo $i . " ";
        }
}
    
}
?>