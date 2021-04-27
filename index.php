<?php
require_once 'Employee.php';
require_once 'Trait1.php';
require_once 'Trait2.php';
require_once 'Trait3.php';
require_once 'iFigure.php';
require_once 'iProgrammer.php';
require_once 'Test.php';
require_once 'Programmer.php';
require_once 'iSphere.php';
require_once 'Sphere.php';

$test = new Test();
echo $test->getSum();