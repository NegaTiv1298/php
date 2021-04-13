<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'Driver.php';

$driver = new Driver;
$driver->setName('Николай');
$driver->setDriverExp(3);
$driver->setDriverCt('A,B,C');
echo $driver->getName(). '. Стаж вождения - ' . $driver->getDriverExp(). ' года.' . 'Категории : ' .$driver->getDriverCt();