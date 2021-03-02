<?php
$arr = range(1, 15);
foreach ($arr as $elem) {
    $kv = $elem * $elem;
    $sum += $kv;
}
echo $sum;
///////////////////////////////////////////////////

for ($i = 1; $i <= 15; $i++) {
    $result += $i * $i;
}
echo $result;