<?php
$str = 'https://site.ru/';
echo preg_match('#^https?://[a-z0-9-]+\.[a-z]{2,3}/?$#', $str);