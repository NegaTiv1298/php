<?php
$str = 'aa aba abba abbba abbbba abbbbba';
echo preg_replace('#ab{0,3}a#', '!', $str);