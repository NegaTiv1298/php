<?php
$arr = [1, 3, -2, -5, 9, 11, 7];
foreach ($arr as $elem) {
    if ($elem > 0 && $elem < 10) {
        $result += $elem;
    }
}
echo $result;