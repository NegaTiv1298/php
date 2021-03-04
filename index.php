<?php
$str = 'abcde';
$str2 = '';
$arr = str_split($str);
foreach ($arr as $elem) {
    if (ord($elem) >= 97 && ord($elem) <= 122) {
        $str2 .= strtoupper($elem);
    } else {
        $str2 .= strtolower($elem);
    }
}
echo $str2;