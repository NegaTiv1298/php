<?php
$arr = ['1', '2', '3', '4', '5'];
$flag = False;
foreach ($arr as $elem) {
    if ($elem == 5) {
        $flag = True;
        break;
    }
}
if ($flag === true) {
    echo 'Да';
} else {
    echo 'Нет';
}