<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My website</title>
</head>

<body>
    <!-- ­Uớc chung lớn nhất và bội chung nhỏ-->
    <!-- <form action="output.php" method="post">
        Số thứ nhất: <input type="text" name="number1"><br>
        Số thứ hai: <input type="text" name="number2"><br>
        <input type="submit">
    </form> -->
    <!-- <?php
    $so1 = $_POST["number1"];
    $so2 = $_POST["number2"];
    if ($so1 > $so2) {
        $min = $so2;
    } else {
        $min = $so1;
    }
    $i = 1;
    while ($i <= $min) {
        if ($so1 % $i == 0 && $so2 % $i == 0) {
            $UCLN = $i;
        }
        ;
        $i++;
    }
    ;
    echo "Ước chung lớn nhất: $UCLN <br>";
    echo "Bội chung nhỏ nhất: " . $so1 * $so2 / $UCLN;
    ?> -->
    <!-- nhập dài rộng và in hình chữ nhật-->
    <!-- <form action="" method="post">
        Chiều dài: <input type="text" name="dai"><br>
        Chiều rộng : <input type="text" name="rong"><br>
        <input type="submit">
    </form>
    <?php
    $dai = $_POST["dai"];
    $rong = $_POST["rong"];
    $i = 1;
    while ($i <= $dai) {
        echo "*";
        $j = 1;
        while ($j < $rong) {
            echo " * ";
            $j++;
        }
        ;
        echo "<br>";
        $i++;
    }
    ;
    ?> -->
    <!-- Nhập a và in ra bảng cửu chương a -->
    <form action="" method="post">
        Nhập số: <input type="text" name="number"><br>
        <input type="submit">
    </form>
    <?php
    $h = $_POST["number"];
    if ($h < 1) {
        echo "Số nhập vào không hợp lệ! Vui lòng nhập số khác";
    } elseif ($h > 9) {
        echo "Số nhập vào không hợp lệ! Vui lòng nhập số khác";
    } elseif ($h > 0 && $h < 10) {

        echo "Bảng cửu chương $h:<br>";
        for ($i = 1; $i <= 10; $i++) {
            echo (string) $h . " * " . $i . " = " . $h * $i . "<br>";
        }
        ;
    }

    ?>
</body>

</html>