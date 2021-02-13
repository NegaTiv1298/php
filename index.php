<?php
$a = 'smile.jpg';
if ('.png' == substr($a, -4) || '.jpg' == substr($a, -4)) {
    echo 'Да';
} else {
    echo 'Нет';
}