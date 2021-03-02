<?php
$arr = range(1, 10);
$sum = 0;
foreach ($arr as $elem) {
    $sum += $elem * $elem;
}
echo floor(sqrt($sum));
