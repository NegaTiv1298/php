<?php
$arr = ['1.txt', '2.txt', '3.txt'];
foreach ($arr as $elem) {
    file_put_contents($elem, '');
    echo file_get_contents($elem);
}