<?php
$str = 'var_test_text';
$arr = explode('_', $str);
echo $arr[0] . ucfirst($arr[1]) . ucfirst($arr[2]);