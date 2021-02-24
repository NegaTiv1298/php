<?php
$arr = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($arr as $elem) {
    foreach ($elem as $subElem) {
        $sum += $subElem;
    }
}
echo $sum;