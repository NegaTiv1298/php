<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8];

$str = '';
while (count($arr) > 0) {
    $str .= array_shift($arr);
    $str .= array_pop($arr);
}

echo $str;
// Воспользувався рішенням. До конця не поняв.