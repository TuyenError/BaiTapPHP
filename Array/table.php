<?php

$data = array(
    array("Name", "Age", "Gender"),
    array("John", 30, "Male"),
    array("Mary", 25, "Female"),
    array("Tom", 35, "Male")
);
echo "Danh sách ";
echo "<table style='border-collapse: collapse;'>";
foreach ($data as $row) {
    echo "<tr style='border: 4px solid black;'>";
    foreach ($row as $cell) {
        echo "<td style='border: 5px solid black;'>" . $cell . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>