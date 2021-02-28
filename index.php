<?php

function recurs($num)
{
    $result = array_sum(str_split($num));
    if ($result > 9) {
        $result = recurs($result);
    }
    return $result;
}
$arr = '34';
echo recurs($arr);