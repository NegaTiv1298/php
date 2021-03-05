<?php
$arr = [2, 1, 3, 5];
$arr2 = [];
foreach ($arr as $elem) {
    for ($i = 1; $i <= $elem; $i++) {
        $arr2[] = $elem;
    }
}
var_dump($arr2);