<?php
$arr = [];
$count = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr[$i][$j] = $count;
        $count++;
    }
    var_dump($arr);
}
