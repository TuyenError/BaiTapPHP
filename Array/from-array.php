<form method="post">
  <label for="array">Nhập vào mảng (các số nguyên, cách nhau bằng dấu phẩy):</label><br>
  <input type="text" id="array" name="array"><br>
  <button name="btn" type="submit">Tìm giá trị lớn nhất và nhỏ nhất</button>
</form>

<?php
if (isset($_POST['btn'])){
    $array == $array.[];
    $max_value = max($array);
    $min_value = min($array);
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $max_value) {
            echo "Giá trị lớn nhất là: " . $max_value . " ở vị trí: " . $i . "<br>";
        }
        if ($array[$i] == $min_value) {
            echo "Giá trị nhỏ nhất là: " . $min_value . " ở vị trí: " . $i . "<br>";
        }
    }
}


?>
