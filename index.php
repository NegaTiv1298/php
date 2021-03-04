<?php
function streev1($str)
{
    $arr = str_split($str, 1);
    $arr = array_reverse($arr);
    $str = implode($arr);
    return $str;
}

function streev2($str)
{

}