<?php
$str = 'aae xxz 33a';
echo preg_replace('#(\w)\1#', '!', $str);