<form method="POST" action="">
    Canh 1:
    <input type="number" name="canh1"><br>
    Canh 2:
    <input type="number" name="canh2"><br>
    Canh 3:
    <input type="number" name="canh3"><br>

    <input type="submit" name="btn">
</form>

<?php # Kiểm tra tam giác khi có độ dài 3 cạnh
if (isset($_POST["canh1"]) || isset($_POST["canh2"]) || isset($_POST["canh3"])) {

    function check_tam_giac(int $canh1, int $canh2, int $canh3)
    {
        if (
            $canh1 == $canh2 && $canh1 != $canh3 ||
            $canh1 == $canh3 && $canh1 != $canh2 ||
            $canh2 == $canh3 && $canh1 != $canh3
        ) {
            return "BT4: Đây là tam giác cân với cạnh thứ nhất là $canh1, cạnh thứ hai là $canh2, cạnh thứ ba là $canh3";
        } else if ($canh1 == $canh2 && $canh2 == $canh3) {
            return "BT4: Đây là tam giác đều với cạnh thứ nhất là $canh1, cạnh thứ hai là $canh2, cạnh thứ ba là $canh3";
        } else {
            return "BT4: Đây là tam giác không đều không cân với cạnh thứ nhất là $canh1, cạnh thứ hai là $canh2, cạnh thứ ba là $canh3";
        }
    }
    ;
    $x = $_POST["canh1"];
    $y = $_POST["canh2"];
    $z = $_POST["canh3"];

    echo check_tam_giac($x, $y, $z);
}
;
    