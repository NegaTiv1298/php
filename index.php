<?php
function Arrunique($arr)
{
    $result = [];
    foreach ($arr as $elem) {
        if (in_array($elem, $result) == false) {
            $result[] = $elem;
        }
    }
    return $result;
}

$arr = [1, 1, 1, 2, 3, 4, 4, 5];
var_dump(Arrunique($arr));