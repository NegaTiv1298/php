<?php
$str = 'aaab aaaf aaac';
echo preg_replace('#aaa(?!b)#i', '!', $str);