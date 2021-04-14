<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'StudenT.php';

$student = new StudenT('Коля', 23, 3);
echo $student->getName(). ' '. $student->getAge(). ' '. $student->getCourse();