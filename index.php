<?php
$str = 'http://site.ru';
echo preg_replace('#http://([a-z]+\.[a-z]{2,3})#', '<a href="$0">$1</a>', $str);