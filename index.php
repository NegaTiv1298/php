<?php
$arr = range(1,10);
$sum = 0;
$kol = 0;
for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
    $kol++;
    if ($sum > 10) {
        break;
    }
}
echo $kol;