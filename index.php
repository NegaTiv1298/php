<?php
$str = '2+3 223 2223';
echo preg_replace('#(2\+3)+#', '!', $str);