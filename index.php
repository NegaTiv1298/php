<?php
$str = 'xxxxxxxx';
$len = strlen($str);
for ($i = $len; $i > 0; $i--) {
    echo substr($str, 0, $i). '<br>';
}