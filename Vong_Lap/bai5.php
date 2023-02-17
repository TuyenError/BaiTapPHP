<?php
echo "<br>Cho số n = 1021, tính 1 + 0 + 2 + 1" . "<br>";

$bt5 = 1234;
$bt5_clone = $bt5;
$tong = 0;

while ($bt5 > 0){
$tong = $tong + ($bt5 % 10);
$bt5 = $bt5 / 10;
}
echo "<br>Cho số n = $bt5_clone, tổng là: $tong" . "<br>";

?>