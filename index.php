<?php
$str = 'ab..c';
if (strpos($str, '..')) {
    echo 'Да';
} else {
    echo 'Нет';
}