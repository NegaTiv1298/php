<?php
require_once 'Arr.php';

$arr = new Arr;
$arr->add(1)->add(3)->append([2,4,5]);
$arr->add(4);
echo $arr->getSum();

//echo (new Arr)->add(1)->append([2, 3, 4])->add(5)->getSum(); - Так видавало Фатал.
