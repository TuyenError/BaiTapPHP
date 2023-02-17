<?php
$a = array(6, 8, 7, 5, 8, 5);
for ($i=0; $i<count($a);$i++){
     for($m=$i+1;$m<count($a);$m++){
        if($a[$i]>$a[$m]){
            $max = $a[$i];
            $min = $a[$m];
        }
     }
}
echo "Số lớn nhất là: $max <br>";
echo "Vị trí của $max là: ";
for($i=0;$i<count($a);$i++){
    if($a[$i]==$max){
        echo "$i ";
    }
}
echo "<br> Số nhỏ nhất là: $min <br>";
echo "Vị trí của $min là: ";
for ($i=0; $i<count($a); $i++) {
    if ($a[$i]==$min) {
        echo "$i ";
    }
}
?>