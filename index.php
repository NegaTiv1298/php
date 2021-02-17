<?php
$arr = [' a ', ' b ', ' с '];
$result = array_map('trim', $arr);
var_dump($result);