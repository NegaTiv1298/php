<?php
$arr = ['http://google.com', 'yandex.ru', 'http://code.mu', 'youtube'];
$result = [];
foreach ($arr as $elem) {
    $str = implode(',', $arr);
    if (strpos($elem, 'http://') === 0) {
        $result[] = $elem;
    }
}
var_dump($result);
