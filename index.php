<?php
$arr = [];

for ($i = 1; $i <= 9; $i++) {
    $str = '';
    for ($j = 1; $j <= $i; $j++) {
        $str .= $i;
    }

    $arr[] = $str;
}
var_dump($arr);