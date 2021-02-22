<?php
$now = time();
$ny = mktime(0,0,0,12,31);
$result = $ny - $now;
echo floor($result / (60*60*24));