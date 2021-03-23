<?php
$text = file_get_contents('text.txt') + 1;
file_put_contents('text.txt', $text);
echo $text;
