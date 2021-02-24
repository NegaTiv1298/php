<?php
function arrayFill($param, $param2)
{
    $result = [];
    for ($i = 1; $i <= $param2; $i++) {
        $result[] = $param;
    }
    return $result;
}
