<form action="Sum.php" method="post">
    Số thứ 1: <input type="number" name="a"><br>
    Số thứ 2: <input type="number" name="b">
    <input type="submit" name="btn" value="Tính tổng">
</form>


<?php
if (isset($_POST['a'])&&isset($_POST['b'])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
}

if (isset($_POST['btn'])){
    echo "Tổng 2 số là: " . $a + $b;
}


?>
<!-- if (isset($_POST['btn'])) -->
