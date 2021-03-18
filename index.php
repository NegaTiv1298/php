<?php
$str = 'baaa caaa faaa';
echo preg_replace('#(?<!b)aaa#i', '!', $str);