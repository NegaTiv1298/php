<?php
$text = pow(file_get_contents('text.txt'), 2);
file_put_contents('text.txt', $text);
echo $text;
