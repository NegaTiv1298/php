<?php
$str = '';
for ($i = 1; $i <= 6; $i++) {
    $str .= chr(mt_rand(97, 122));
}

echo $str;