<?php
function hBilet($num)
{
    $arr = str_split($num, 1);
    return $arr[0] + $arr[1] + $arr[2] == $arr[3] + $arr[4] + $arr[5];
}
$num = '222222';
if (hBilet($num)) {
    echo 'Поздравляем, вы выиграли счастливый билет';
} else {
    echo 'Повезет в следуюющий раз';
}