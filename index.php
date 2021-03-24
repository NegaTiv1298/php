<?php
$arr = [1, 2, 3, 4, 5];
file_put_contents('text.txt', implode("\r\n", $arr));
