<?php
$arr = [];
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $arr[$i][] = mt_rand(1, 10);
    }
}
var_dump($arr);