<?php
require_once 'Arr.php';

$arr = new Arr;

$arr->add([10,10,5]);
echo $arr->getAvg();