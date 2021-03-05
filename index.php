<?php
$arr = [1, 2, 3, 4, 5, 6, 7];
$arr2 = [];
$key = [];
$num = count($arr);
for ($i = 1; $i <= $num - 1; $i+=2) {
    $key = $arr[$i];
    $arr2[$key] = $arr[$i + 1];
}
var_dump($arr2);