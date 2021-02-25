<?php
function getDigitsSum($num)
{
    $digits = str_split($num);
    $sumDigits = array_sum($digits);
    return $sumDigits;

}
$year = [];
for ($i = 1; $i <= 2021; $i++) {
    if (getDigitsSum($i) == 13) {
        $year[] = $i;
    }
}
var_dump($year);