<?php
$a = 30;
$arr = [];
for ($i = 1; $i <= $a; $i++) {
   if ($a % $i == 0) {
       $arr[] = $i;
   }
}
var_dump($arr);
