<?php
$day = 31;
$month = 2;
$year = 2023;

if (checkdate($month, $day, $year)) {
echo "Ngày hợp lệ";
} else {
echo "Ngày không hợp lệ";
}
?>

"<br>"

Trong PHP, hàm checkdate($month, $day, $year) dùng để kiểm tra tính hợp lệ của ngày,
tháng và năm. Nếu ngày, tháng và năm hợp lệ, hàm sẽ trả về giá trị true và nếu không hợp lệ thì trả về false.

Ví dụ, trong ví dụ trên, biến $day được gán giá trị 29, 
biến $month được gán giá trị 2 và biến $year được gán giá trị 2020.
Sau đó, chúng ta sử dụng hàm checkdate() để kiểm tra tính hợp lệ của ngày, tháng và năm. 
Nếu hàm trả về giá trị true, chúng ta sẽ in ra "Ngày hợp lệ" và nếu hàm trả về false, chúng ta sẽ in ra "Ngày không hợp lệ".