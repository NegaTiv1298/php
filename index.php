<?php
$arr = [1, 2, 4, 5, 5];
$arr = ($arr = array_unique($arr))[count($arr)-2];
var_dump($arr);