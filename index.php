<?php
$str = 'aba accca azzza wwwwa';
echo preg_replace('#a.+?a#', '!', $str);