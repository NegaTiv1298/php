<?php
$str = '12345678';
$result = array_reverse(str_split(strrev($str), 2));
echo implode('', $result);