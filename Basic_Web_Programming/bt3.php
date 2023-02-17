<?php
echo "BT3: ";

$a1 = rand(-3, 3);
$b2 = rand(-3, 3);
$c3 = rand(-3, 3);

echo "Pt: $a1 x<sup>2</sup> + $b2   x + $c3 = 0" . "<br>";

$dt = ($b2 * $b2) - (4 * $a1 * $c3);
if ($a1 != 0) {
    if ($dt > 0) {
        echo "Pt có x1 = " . ((-$b2) + sqrt($dt)) / ($a1 * 2) .
            " và có x2 = " . ((-$b2) - sqrt($dt)) / ($a1 * 2) . "<br>";
    } else if ($dt < 0) {
        echo "Pt có vô nghiệm" . "<br>";
    } else {
        echo "Pt có nghiệm kép là: x1 = x2 =" . (-$b2) / ($a1 * 2) . "<br>";
    }
} else {
    echo "Nhập lại a";
}
print "<br><br>";
?>