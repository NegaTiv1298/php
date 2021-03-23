<?php
$arr = ['1.txt', '2.txt', '3.txt'];
foreach ($arr as $elem) {
    file_put_contents($elem, '2');
    if (file_exists($elem) == true) {
        echo $elem. ' - '. 'Существует'. '<br>';
    } else {
        echo $elem. ' - '. 'Не существует'. '<br>';
    }
}