<?php
$text = file_get_contents('text.txt');
$arr = explode("\r\n", $text);
$sum = (array_sum($arr));
file_put_contents('sum.txt', $sum);