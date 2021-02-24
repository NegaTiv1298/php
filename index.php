<?php
$arr = [];
$str = '';
for ($i = 1; $i <= 10; $i++) {
    $str .= 'x';
    $arr[] = $str;
}
var_dump($arr);