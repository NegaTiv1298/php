<?php
$arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
$sum = 0;
foreach ($arr as $elem) {
    foreach ($elem as $subElem) {
        foreach ($subElem as $subsubElem) {
            $sum += $subsubElem;
        }
    }
}
echo $sum;