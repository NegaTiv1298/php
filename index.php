<?php
function getDivisors($num)
{
    $arr = [];
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $arr[] = $num;
        }
    }
    return $arr;
}
function ArraySum($arr)
{
    $sum = 0;
    foreach ($arr as $elem) {
        $sum += $elem;
    }
    return $sum;
} // От сюда я не зміг сам зробити.
$friend = [];
for ($i = 1; $i < 1000; $i++) {
    $sum1 = ArraySum(getDivisors($i));
    if ($sum1 > 1) {
        for ($j = $i + 1; $j <= 1000; $j++) {
            if ($sum1 == ArraySum(getDivisors($j))) {
                $friend[$i][] = $j;
            }
        }
    }
}
var_dump($friend);