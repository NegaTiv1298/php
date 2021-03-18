<?php
$str = 'baaa caaa baa';
echo preg_replace('#(?<=b)aaa#i', '!', $str);