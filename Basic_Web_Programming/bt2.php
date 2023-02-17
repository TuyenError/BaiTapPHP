<?php
$a = 2;
$b = 5;
$c = 6;
$d = 10;
$e = 4;
$min = $a;
$max = $a;
if ($min > $b)
    $min = $b;
if ($min > $c)
    $min = $c;
if ($min > $d)
    $min = $d;
if ($min > $e)
    $min = $e;

if ($max < $b)
    $max = $b;
if ($max < $c)
    $max = $c;
if ($max < $d)
    $max = $d;
if ($max < $e)
    $max = $e;

echo "Số nhỏ nhất là $min"."<br>"; 
echo "Số nhỏ nhất là $max";
?>