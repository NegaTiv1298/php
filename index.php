<?php
$arr = ['1.txt', '2.txt', '3.txt'];
foreach ($arr as $elem) {
    $get = file_get_contents($elem);
    file_put_contents($elem, $get. '!');
}