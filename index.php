<?php
$str = 'abcabcabc';
echo strtr($str, ['a' => '1', 'b' => '2', 'c' => '3']);
echo strtr($str, 'abc', '123');