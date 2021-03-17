<?php
$str = '1asd 2ds 34a3sd 21423';
$preg = preg_match_all('#\d#', $str, $m);
echo array_sum($m[0]);