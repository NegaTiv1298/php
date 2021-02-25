<?php
function getDivisors($num)
{
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $divisors[] = $i;
        }
    }
    return $divisors;
}
function getCommonDivisors($a, $b)
{
    $divisorsA = getDivisors($a);
    $divisorsB = getDivisors($b);
    return array_intersect($divisorsA, $divisorsB);
}