<form method="post" action="bai2.php">
    <label for="day">Ngày:</label>
    <input type="number" id="day" name="day" min="1" max="31" required><br>

    <label for="month">Tháng:</label>
    <input type="number" id="month" name="month" min="1" max="12" required><br>

    <label for="year">Năm:</label>
    <input type="number" id="year" name="year" required><br>

    <input type="submit" value="Kiểm tra">
</form>
<?php
if (isset($_POST['day']) && isset($_POST['month'])&& isset($_POST['year'])) {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    if (checkdate($month, $day, $year)) {
        echo "Ngày $day/$month/$year hợp lệ.";
    } else {
        echo "Ngày $day/$month/$year không hợp lệ.";
    }
}
?>








