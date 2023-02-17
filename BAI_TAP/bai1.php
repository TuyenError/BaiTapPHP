

<?php
$month = 5; #ta đặt giá trị cho biến $month là 5

switch ($month) { #ta sử dụng switch ... case để xác định số ngày trong tháng $month.
    case 1: #Mỗi case trong switch sẽ tương ứng với một tháng trong năm
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $numDays = 31; #giá trị của biến $numDays sẽ được thiết lập tương ứng với số ngày trong tháng đó.
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $numDays = 30; #giá trị của biến $numDays sẽ được thiết lập tương ứng với số ngày trong tháng đó.
        break;
    case 2:
        $numDays = 28; #giá trị của biến $numDays sẽ được thiết lập tương ứng với số ngày trong tháng đó.
        break;
    default:
        echo "Invalid month";
}
echo "Month $month has $numDays days.";
?>
