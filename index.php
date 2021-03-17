<?php
$str = 'bbb <b> hello </b>, <b> world </b> eee';
echo preg_replace('#<b>(.+?)</b>#', '!', $str);