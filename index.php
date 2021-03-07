<?php
$now = time();
$nY = mktime(0,0,0,12,31);
$result = $nY - $now;
echo 'До нового года осталось : '. floor($result / (60*60*24));