<?php
$arr = range(1, 100);
foreach ($arr as $elem) {
    if ($elem % 7 == 0) {
        $result += $elem;
    }
}
echo $result;

