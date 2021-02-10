<?php
$a = 4;
$b = [1, 2, 3, 5, 6, 10, 15, 30];
$arr = [];
foreach ($b as $elem) {
        $arr[] = ($a%$elem==0);
    }
var_dump($arr);
