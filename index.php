<?php
$str = 'yandex12-3.ru';
echo preg_match('#[a-z0-9-]\.[a-z]{2,3}#', $str);
