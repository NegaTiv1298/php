<?php
require_once 'City.php';

$city = [
    new City('Мукачево', 85000),
    new City('Ужгород', 130000),
    new City('Хуст', 28000),
    new City('Іршава', 23000),
    new City('Свалява', 19000)
];

foreach ($city as $elem) {
    echo $elem->name. ' - '. $elem->population. '<br>';
}