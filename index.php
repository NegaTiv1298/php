<?php
$str = 'a\a abc';
echo preg_replace('#a\\\\a#', '!', $str);