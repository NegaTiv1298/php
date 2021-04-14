<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'StudenT.php';

$student = new StudenT;
$student->setName('Коля');
$student->setCourse(3);
$student->setAge(23);
$student->addOneYear();
echo $student->getName(). '.' .$student->getAge(). ' года.'. $student->getCourse();