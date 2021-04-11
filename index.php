<?php
require_once 'City.php';

$city = new City('Мукачево', 1732, 85123);
$props = ['name', 'foundation', 'population'];

echo $city->{$props[0]}. ' - '. $city->{$props[1]}. ' - '. $city->{$props[2]};