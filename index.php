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

$user = new User();
$user->name = 'Kolya';
$user->age = 23;
echo $user->name;
echo $user->age;
