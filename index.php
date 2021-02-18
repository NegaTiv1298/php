<?php
$arr = range(1, 26);
$arr2 = range ('a', 'z');
$arr3 = array_combine($arr2, $arr);
var_dump($arr3);