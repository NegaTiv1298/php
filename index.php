<?php
$arr = [3, 3, -1, -2, 3, -3];
$arr1 = [];
foreach ($arr as $elem) {
    $arr1[] = abs($elem);
}
var_dump($arr1);
