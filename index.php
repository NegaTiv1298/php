<?php
$str = 'http://site.ru';
echo preg_match('#^http?://[a-z0-9-]+\.[a-z]{2,3}$#', $str);