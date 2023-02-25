<form method="post" action=" ">
  Nhập số thứ nhất: <input type="number" name="num1"><br>
  Nhập số thứ hai: <input type="number" name="num2"><br>
  <input type="submit" name="submit" value="So sánh">
</form>

<?php
if (isset($_POST["submit"])){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

if ($num1 > $num2 ){
        echo "$num1 lớn hơn $num2";
} elseif ($num1 < $num2) {
        echo "$num1 nhỏ hơn $num2";
} else {
        echo "$num1 bằng $num2";
        exit;
}
}
?>