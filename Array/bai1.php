<from

?>
<?php
$array = array(1, 2, 3, 4, 5, 8, 10, 1, 9, 1, 10 ,7 ,10);
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

?>