<?php
$arr = [12];
$flag = false;
foreach ($arr as $elem) {
    if ($elem % 1 == 0 && $elem % $elem == 0) {
        $flag = true;
        break;
    }
}
if ($flag === true) {
    echo 'Это число - простое';
} else {
    echo 'Это число - не простое';
}