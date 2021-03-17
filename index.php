<?php
$str = 'mail@yandex.ru mail@yandex.ru mail mail@yandex.ru yandex';
echo preg_match_all('#[a-z0-9_.-]+@[a-z_.-]+\.[a-z]{2,3}#', $str, $m). '<br>';
var_dump($m);