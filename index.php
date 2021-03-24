<?php
$arr = file('text.txt');
$sum = (array_sum($arr));
$text = file_get_contents('text.txt');
file_put_contents('text.txt', $text. "\r\n". $sum);
