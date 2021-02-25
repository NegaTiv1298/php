<?php
$arr = [1, 2, 3, -1, -2, -3, 5, 7];
function isNumberInRange($num)
{
    if ($num > 0 && $num < 10) {
        return true;
    } else {
        return false;
    }
}
$newArr = [];
foreach ($arr as $elem) {
    if (isNumberInRange($elem)) {
        $newArr[] = $elem;
    }
}
var_dump($newArr);