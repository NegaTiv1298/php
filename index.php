<?php
$str = '';
$arr = [];
for ($i = 1; $i <= 9; $i++) {
    $arr[] .= $i;
}
$str = implode('-', $arr);
echo '-'. $str. '-';