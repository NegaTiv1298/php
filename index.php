<?php
function isEven($num)
{
    if ($num % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
$arr = [10, 5, 22, 8, 11, 34];
foreach ($arr as $elem) {
    if (isEven($elem)) {
        $newArr[] = $elem;
    }
}
var_dump($newArr);