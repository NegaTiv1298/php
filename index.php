<?php
$str = 'aa aba abba abbba abca abea';
echo preg_replace('#ab+a#', '!', $str);