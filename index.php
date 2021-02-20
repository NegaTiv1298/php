<?php
$time = time();
$time2 = mktime(7, 23, 48);
$result = floor(($time - $time2) / 60 / 60);
echo $result;