<?php
require_once 'Employee.php';
require_once 'Date.php';
require_once 'Trait2.php';
require_once 'Trait3.php';
require_once 'iFigure.php';
require_once 'iProgrammer.php';
require_once 'User.php';
require_once 'Programmer.php';
require_once 'iSphere.php';
require_once 'Sphere.php';

$date = new Date('2025-12-31');

echo $date->getYear().'<br>';  // выведет '2025'
echo $date->getMonth().'<br>'; // выведет '12'
echo $date->getDay().'<br>';   // выведет '31'

echo $date->getWeekDay().'<br>';     // выведет '3'
echo $date->getWeekDay('ru').'<br>'; // выведет 'среда'
echo $date->getWeekDay('en').'<br>'; // выведет 'wednesday'

echo (new Date('2025-12-31'))->addYear(1).'<br>'; // '2026-12-31'
echo (new Date('2025-12-31'))->addDay(1).'<br>';  // '2026-01-01'

echo (new Date('2025-12-31'))->subDay(3)->addYear(1); // '2026-12-28'