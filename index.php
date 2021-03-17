<?php
$str = 'mail@yandex.ru';
echo preg_match('#^[a-z0-9_.-]+@[a-z_.-]+\.[a-z]{2,3}$#', $str);