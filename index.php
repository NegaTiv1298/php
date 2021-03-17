<?php
$str = 'a1b2c3';
echo preg_replace('#(a1b2c3)#', '$0$0', $str);