<?php
$str = 'aa aba abba abbba abbbba abbbbba';
echo preg_replace('#ab{4,}a#', '!', $str);