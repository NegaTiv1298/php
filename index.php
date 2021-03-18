<?php
$str = 'aa b cc';
echo preg_replace('#([a-z])(?=\1)#i', '!', $str);