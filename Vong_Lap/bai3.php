<?php
$a = 54;
$dem = 0;
for ($i=1; $i<= $a; $i++){
    if ($a % $i == 0){
        $dem++;
    }
}
if ($dem == 2){
    echo "$a là số nguyên tố";
} else{
    echo "$a không phải là số nguyên tố";
};
?>