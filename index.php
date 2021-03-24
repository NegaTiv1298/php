<?php
$text = file_get_contents('text.txt');
$arr = explode("\r\n", $text);
var_dump($arr);