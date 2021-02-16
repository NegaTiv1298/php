<?php
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$result = array_search('-', $arr);
$result2 = array_splice($arr, 2);
var_dump($result2);