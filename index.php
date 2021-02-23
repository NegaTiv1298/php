<?php
$num = [1, 2, 3, 4, 5, 6];
$flag = false;
$kol = count($num);
for ($i = 1; $i <= $kol; $i++) {
    if ($num[$i] == $num[$i - 1]) {
        $flag = true;
        break;
    }
}
if ($flag) {
    echo 'True';
} else {
    echo 'False';
}