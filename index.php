<?php
function getDigitsSum($num)
{
    $digits = str_split($num);
    $sumDigits = array_sum($digits);
    return $sumDigits;

}