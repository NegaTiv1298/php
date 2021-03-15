<?php
$str = 'aba aca aea abba adca abea';
echo preg_replace('#ab.a#', '!', $str);