<?php
$n = 16;
$b = 1;
$show = "1";
for ($i =4; $i<$n; $i+=3 ){
    $b = $b + $i;
$show = $show. "+" .(string)($i);
}
echo $show. "=" .$b;

?>