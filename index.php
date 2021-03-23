<?php
$text = file_get_contents('text.txt');
file_put_contents('text.txt', $text. '!');
