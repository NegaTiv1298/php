<?php
$arr = ['1.txt', '2.txt', '3.txt'];
foreach ($arr as $elem) {
    file_put_contents($elem, '2');
    $get[] = file_get_contents($elem);
    $impl = implode('', $get);
    file_put_contents('new.txt', $impl);
}
echo file_get_contents('new.txt');
