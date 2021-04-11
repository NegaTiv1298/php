<?php
require_once 'City.php';

$city = new City('Мукачево', 1732, 85123);
$props = ['name', 'foundation', 'population'];
foreach ($props as $elem) {
    echo $city->$elem.'<br>';
}