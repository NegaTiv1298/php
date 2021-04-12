<?php
require_once 'ArrayAvgHelper.php';

$user = new ArrayAvgHelper;
echo $user->getAvg3([1,2,3,5]);
