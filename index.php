<?php
$str = 'a.a aba aea';
echo preg_replace('#(a\.a)+#', '!', $str);