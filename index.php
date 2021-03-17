<?php
$str = 'hello.site.ru';
echo preg_match('#^[a-z0-9-]+\.[a-z0-9-]+\.[a-z]{2,3}$#', $str);
