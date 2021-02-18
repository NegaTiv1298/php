<?php
$arr = range(1, 26);
$arr2 = range('a', 'z');
$result = array_combine($arr2, $arr);
var_dump($result);