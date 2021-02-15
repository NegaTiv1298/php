<?php
$arr = [3, 11, 23, 42, 16, 37];
foreach ($arr as $elem) {
    if (strpos($elem, '3') !== false) {
        echo $elem. '<br>';
    }
}